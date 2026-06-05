<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e293b, #312e81);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: hidden;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 25px;
            padding: 40px 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
            color: white;
        }

        .logo {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            margin: 0 auto 15px;
            border: 3px solid rgba(255,255,255,0.3);
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }

        .title {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            color: #cbd5e1;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-control {
            height: 55px;
            border-radius: 12px;
            border: none;
            background: rgba(255,255,255,0.12);
            color: white;
        }

        .form-control:focus {
            background: rgba(255,255,255,0.18);
            color: white;
            box-shadow: 0 0 0 3px rgba(99,102,241,0.3);
        }

        .form-control::placeholder {
            color: #cbd5e1;
        }

        label {
            margin-bottom: 8px;
            font-weight: 500;
        }

        .btn-login {
            height: 55px;
            border-radius: 12px;
            border: none;
            /* background: linear-gradient(135deg, #6366f1, #4f46e5); */
            background-color: #ff5722 ;
            color: white;
            font-weight: 600;
            transition: all .3s ease;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(99,102,241,0.4);
        }

        .alert {
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <!-- Logo -->
        <img src="{{ asset('images/nav-logo.png') }}" alt="Logo" class="logo">

        <h2 class="title">Admin Panel</h2>
        <p class="subtitle">Sign in to continue</p>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <div class="mb-3">
                <label>Email Address</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Enter your email"
                       required>
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Enter your password"
                       required>
            </div>

            <button type="submit" class="btn btn-login w-100">
                Login
            </button>
        </form>

    </div>

</body>

</html>
