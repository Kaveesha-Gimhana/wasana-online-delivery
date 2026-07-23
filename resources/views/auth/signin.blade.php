<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wasana Delivery | Sign Up</title>

    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="login-main-div">

        <img src="{{ asset('images/nav-logo.png') }}" class="login-logo mb-3">

        <div class="login-form-div">

            <h2>SIGN UP</h2>

            <div class="login-content">

                <form id="registerForm">

                    <!-- Username -->
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input
                            type="text"
                            id="username"
                            class="form-control"
                            placeholder="Enter your User Name">

                        <small id="usernameError" class="text-danger"></small>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            id="email"
                            class="form-control"
                            placeholder="Enter your Email">

                        <small id="emailError" class="text-danger"></small>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            placeholder="Enter your Password">

                        <small id="passwordError" class="text-danger"></small>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input
                            type="password"
                            id="confirmPassword"
                            class="form-control"
                            placeholder="Confirm your Password">

                        <small id="confirmPasswordError" class="text-danger"></small>
                    </div>

                    <button
                        type="button"
                        class="btn login-btn w-100 mt-3"
                        onclick="validateForm()">

                        Sign Up

                    </button>

                </form>

                <a href="{{ url('/') }}" class="btn login-back-btn w-100 mt-2">
                    Back
                </a>

                <p class="mt-3">
                    Have an account?
                    <a href="{{ url('/login') }}" class="login-link">
                        Login
                    </a>
                </p>

            </div>

        </div>

    </div>

    <script src="{{ asset('js/validation.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>