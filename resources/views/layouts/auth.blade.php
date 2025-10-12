<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Orchid Soft') }} - @yield('title', 'Authentication')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background: #f3f4f6;
        }

        .auth-container {
            display: flex;
            min-height: 100vh;
        }

        /* Left Side - Branding */
        .auth-brand-side {
            flex: 1;
            background: linear-gradient(135deg, #FB4C00 0%, #FF7A3D 50%, #FFA76F 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .auth-brand-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.4;
        }

        .brand-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 500px;
        }

        .brand-logo {
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 40px;
            backdrop-filter: blur(10px);
            border: 3px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .brand-logo:hover {
            transform: scale(1.05);
        }

        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.15));
        }

        .brand-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .brand-subtitle {
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .brand-features {
            text-align: left;
            margin-top: 40px;
        }

        .brand-feature {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .brand-feature svg {
            width: 24px;
            height: 24px;
            margin-right: 12px;
            fill: white;
            flex-shrink: 0;
        }

        /* Right Side - Auth Form */
        .auth-form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background: white;
        }

        .auth-form-container {
            width: 100%;
            max-width: 460px;
        }

        .auth-header {
            margin-bottom: 32px;
        }

        .auth-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .auth-header p {
            font-size: 15px;
            color: #6b7280;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #374151;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
            background: #f9fafb;
        }

        .form-control:focus {
            outline: none;
            border-color: #FB4C00;
            background: white;
            box-shadow: 0 0 0 4px rgba(251, 76, 0, 0.1);
        }

        .form-control.is-invalid {
            border-color: #ef4444;
            background: #fef2f2;
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 13px;
            margin-top: 6px;
            display: block;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #FB4C00;
        }

        .form-check-label {
            font-size: 14px;
            color: #6b7280;
            cursor: pointer;
            margin: 0;
        }

        .btn {
            padding: 14px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #FB4C00 0%, #FF7A3D 100%);
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(251, 76, 0, 0.35);
        }

        .btn-link {
            background: none;
            color: #FB4C00;
            padding: 0;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-link:hover {
            color: #FF7A3D;
            text-decoration: underline;
        }

        .auth-footer {
            text-align: center;
            padding-top: 24px;
            margin-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        .auth-footer-text {
            font-size: 14px;
            color: #6b7280;
        }

        .auth-footer-link {
            color: #FB4C00;
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer-link:hover {
            color: #FF7A3D;
            text-decoration: underline;
        }

        .alert {
            padding: 14px 16px;
            border-radius: 10px;
            margin-bottom: 24px;
            font-size: 14px;
            line-height: 1.5;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        .alert-info {
            background-color: #dbeafe;
            color: #1e40af;
            border: 1px solid #93c5fd;
        }

        .text-muted {
            color: #6b7280;
            font-size: 14px;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-center {
            align-items: center;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%236b7280' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 36px;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .auth-container {
                flex-direction: column;
            }

            .auth-brand-side {
                min-height: 300px;
                padding: 40px 20px;
            }

            .brand-title {
                font-size: 32px;
            }

            .brand-features {
                display: none;
            }

            .auth-form-side {
                padding: 40px 20px;
            }

            .auth-header h1 {
                font-size: 28px;
            }
        }

        @media (max-width: 640px) {
            .auth-brand-side {
                min-height: 250px;
                padding: 40px 20px;
            }

            .brand-logo {
                width: 120px;
                height: 120px;
                margin-bottom: 24px;
                border-radius: 20px;
            }

            .brand-title {
                font-size: 24px;
            }

            .brand-subtitle {
                font-size: 14px;
            }

            .auth-form-side {
                padding: 30px 20px;
            }

            .auth-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- Left Side - Branding -->
        <div class="auth-brand-side">
            <div class="brand-content">
                <div class="brand-logo">
                    <img src="{{ asset('img/orchid_o_white.svg') }}" alt="Orchid Software Logo">
                </div>
                <h1 class="brand-title">Orchid Software</h1>
                <p class="brand-subtitle">Construction & Project Management Platform</p>

                <div class="brand-features">
                    <div class="brand-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                        </svg>
                        <span>Streamlined Project Management</span>
                    </div>
                    <div class="brand-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                        </svg>
                        <span>Real-time Collaboration Tools</span>
                    </div>
                    <div class="brand-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                        </svg>
                        <span>Comprehensive Financial Tracking</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Auth Form -->
        <div class="auth-form-side">
            <div class="auth-form-container">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
