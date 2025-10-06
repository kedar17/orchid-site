# TrackMate Functional Specification

---

## 1. Software Stack

- **Backend**: Node.js (Express or Koa)  
- **Frontend**: Next.js (React)  
- **Database**: MongoDB (Mongoose ODM)  
- **CI/CD**: Git + Docker + GitHub Actions (or GitLab CI)  
- **Hosting**: AWS (EC2/ECS/EKS, S3, CloudFront)  

---

## 2. Architecture Overview

TrackMate will consist of three main layers:

- **API Layer**  
  - Exposes REST endpoints for event ingestion, profile management, and campaign triggers  
  - Stateless Node.js services behind a load balancer  

- **Data Layer**  
  - MongoDB stores user profiles, raw events, and aggregated metrics  
  - Optional Redis layer for rate-limiting and session caching  

- **Integration Layer**  
  - Client-side JavaScript snippet for in-browser events  
  - Server-side JS pixel or webhook for backend events  

---

## 3. Event Tracking Workflow

1. User interacts with the site or app.  
2. Client script or server pixel POSTs JSON payload to our tracking API.  
3. API validates payload, links it to a profile, and saves the event in the **events** collection.  
4. For “profile-creating” events, create or update a record in the **profiles** collection.  
5. Background job processor (Bull/Agenda) handles email triggers, analytics aggregation, and webhooks.  

---

## 4. Data Models

### 4.1 Profiles

| Field           | Type      | Required | Description                       |
|-----------------|-----------|----------|-----------------------------------|
| `_id`           | ObjectId  | Yes      | Internal identifier               |
| `email`         | String    | Yes      | Primary lookup key                |
| `firstName`     | String    | Yes      |                                   |
| `lastName`      | String    | Yes      |                                   |
| `phone`         | String    | No       | E.164 format                      |
| `consent.email` | Boolean   | Yes      | Opt-in flag for email marketing   |
| `metadata`      | Object    | No       | Custom tags or segments           |
| `createdAt`     | Date      | Yes      | Profile creation timestamp        |
| `updatedAt`     | Date      | Yes      | Last update timestamp             |

### 4.2 Events

| Field        | Type      | Required | Description                                    |
|--------------|-----------|----------|------------------------------------------------|
| `_id`        | ObjectId  | Yes      | Internal identifier                            |
| `profileId`  | ObjectId  | Yes      | Reference to the associated profile            |
| `name`       | String    | Yes      | e.g. `page_view`, `add_to_cart`, `order_placed`|
| `timestamp`  | Date      | Yes      | ISO-8601 event time                            |
| `properties` | Object    | No       | Event-specific data (see payload definitions)  |
| `userAgent`  | String    | No       | Captured from request header                   |
| `ip`         | String    | No       | Source IP for geolocation                      |

---

## 5. Standard Payload Definitions

### 5.1 Client-Side Events

**Endpoint**: `POST /api/track/event`

| Event Name     | Required Properties                                                                          |
|----------------|----------------------------------------------------------------------------------------------|
| `active_site`  | `url`, `sessionId`                                                                           |
| `page_view`    | `url`, `referrer`, `title`                                                                   |
| `deep_scroll`  | `percentage`                                                                                 |
| `button_click` | `elementId`, `text`                                                                          |
| `add_to_cart`  | `productId`, `quantity`, `price`                                                             |
| `form_submit`  | `formId`, `fields: { email, firstName, lastName, phone, accept_terms }`                      |
| `order_product`| `orderId`, `items: [{ productId, amount, tax, discount }]`                                   |

### 5.2 Server-Side Events (JS Pixel / Webhook)

**Endpoint**: `POST /api/track/server-event`

```json
{
  "event": "order_placed",
  "orderId": "1234",
  "profile": {
    "firstName": "Jane",
    "lastName": "Doe",
    "email": "jane@example.com",
    "phone": "+911234567890"
  },
  "shippingAddress": {
    "street": "123 Main St",
    "city": "Kolkata",
    "postcode": "700001",
    "country": "IN"
  },
  "billingAddress": {
    "street": "123 Main St",
    "city": "Kolkata",
    "postcode": "700001",
    "country": "IN"
  },
  "items": [
    {
      "name": "T-Shirt",
      "sku": "TSHIRT001",
      "amount": 499,
      "tax": 49,
      "discount": 0
    }
  ],
  "orderTotal": 548,
  "timestamp": "2025-08-27T18:30:00Z"
}