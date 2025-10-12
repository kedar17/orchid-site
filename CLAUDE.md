# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**Orchid Soft** is a construction/project management system built with Laravel 12 and modern frontend tooling. The application manages clients, projects, tasks, expenses, billing, and user roles with a public-facing website alongside an admin dashboard.

## Essential Commands

### Development
```bash
# Start development server with queue, logs, and Vite
composer dev

# Or start services individually:
php artisan serve              # Backend server (http://localhost:8000)
npm run dev                    # Vite dev server for frontend assets
php artisan queue:listen       # Process queued jobs
php artisan pail               # Real-time log monitoring
```

### Testing
```bash
composer test                  # Run PHPUnit test suite
php artisan test               # Alternative test command
php artisan test --filter TestName  # Run specific test
```

### Database
```bash
php artisan migrate            # Run migrations
php artisan migrate:fresh      # Drop all tables and re-run migrations
php artisan migrate:fresh --seed  # Fresh migration with seeders
php artisan db:seed            # Run database seeders
```

### Code Quality
```bash
./vendor/bin/pint              # Format code using Laravel Pint
php artisan config:clear       # Clear configuration cache
php artisan cache:clear        # Clear application cache
php artisan route:list         # List all registered routes
```

### Assets
```bash
npm run build                  # Build production assets with Vite
npm run dev                    # Development build with hot reload
```

## Architecture

### Application Structure

**Backend (Laravel 12)**
- **Controllers**: Split into public controllers (`app/Http/Controllers/`) and admin controllers (`app/Http/Controllers/Admin/`)
  - Public: `HomeController`, `AboutController`, `ServiceDetailsController`, `ContactController`
  - Admin: `DashboardController`, `ClientController`, `ProjectController`, `TaskController`, `UserController`, `ExpenseTrackController`, `FinanceBillingController`, `PaymentSettlementComtroller`

- **Models** (`app/Models/`): Core entities include `User`, `Client`, `Project`, `Task`, `Billing`, `BillingType`, `Budget`, `Category`, `Expense`, `Materials`, `TimeSheet`, `ContactForm`

- **Authentication & Authorization**: Laravel UI authentication + Spatie Laravel Permission for role-based access control

**Frontend**
- **Build System**: Vite with Tailwind CSS v4 and Bootstrap 5
- **Views**: Blade templates in `resources/views/`
  - Admin dashboard views in `resources/views/admin/`
  - Auth views in `resources/views/auth/`
  - Layouts and partials organized under respective directories
- **Assets**:
  - Styles: `resources/sass/` (SCSS) and `resources/css/`
  - Scripts: `resources/js/`

### Routing Architecture

All routes defined in `routes/web.php`:
- **Public routes**: Home, About, Services, Insights, Contact form submission
- **Auth routes**: Provided by `Auth::routes()` (login, register, password reset)
- **Admin routes**: Protected by `auth` middleware, include CRUD operations for clients, projects, tasks, users, billing, expenses, payments

### Database

- **Default**: SQLite (configured in `.env.example`)
- **Sessions**: Database-driven
- **Queue**: Database connection
- **Cache**: Database store

Key tables include: `users`, `clients`, `projects`, `tasks`, `billings`, `budgets`, `categories`, `expenses`, `materials`, `time_sheets`, `contact_forms`, plus Spatie permission tables.

### Key Features

1. **Client Management**: Track client information and associated projects
2. **Project Management**: Create projects, assign tasks, track progress, view project details
3. **Task Management**: Assign tasks to users with status tracking
4. **Finance & Billing**: Track expenses, create invoices, manage billing types
5. **User & Role Management**: User CRUD with role-based permissions (Spatie)
6. **Contact Forms**: Public contact form submissions stored in database
7. **Dashboard**: Filtered task views and project statistics

## Development Notes

### Environment Setup
1. Copy `.env.example` to `.env`
2. Run `composer install`
3. Run `npm install`
4. Generate app key: `php artisan key:generate`
5. Create SQLite database: `touch database/database.sqlite`
6. Run migrations: `php artisan migrate`

### Key Dependencies
- **Backend**: Laravel 12, Spatie Laravel Permission, Laravel Tinker, Laravel UI
- **Frontend**: Tailwind CSS v4, Bootstrap 5, Vite, Axios
- **Dev Tools**: PHPUnit, Laravel Pint, Laravel Pail, Laravel Sail, Mockery

### File Locations
- **Middleware**: Applied at route level in `routes/web.php`
- **Migrations**: `database/migrations/`
- **Seeders**: `database/seeders/DatabaseSeeder.php`
- **Config**: `config/` (includes `permission.php` for Spatie roles)
- **Tests**: `tests/Feature/` and `tests/Unit/`

### Important Patterns
- Admin controllers use namespace `App\Http\Controllers\Admin\`
- Models use standard Laravel Eloquent relationships
- Views follow Blade template inheritance pattern with layouts
- API-style responses for AJAX operations (e.g., task filtering, form submissions)
- RESTful route naming for CRUD operations

## Testing

PHPUnit is configured with:
- In-memory SQLite for testing
- Array drivers for cache, mail, session
- Separate Feature and Unit test suites

Run tests before committing changes to ensure no regressions.
