@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            width: 100%;
            box-sizing: border-box;
        }
        .navbar-left {
            display: flex;
            align-items: center;
        }
        .logo {
            height: 40px;
            margin-right: 10px;
        }
        .brand {
            font-size: 18px;
            font-weight: bold;
        }
        .beta {
            background-color: #333;
            color: white;
            padding: 2px 6px;
            margin-left: 5px;
            font-size: 12px;
            border-radius: 3px;
        }
        .navbar-center {
            display: flex;
            align-items: center;
        }
        .nav-link {
            margin: 0 15px;
            text-decoration: none;
            color: black;
            font-size: 16px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .navbar-right {
            display: flex;
            align-items: center;
        }
        .login {
            margin-right: 15px;
            text-decoration: none;
            color: black;
            font-size: 16px;
        }
        .register {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .login-form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-form .form-group {
            margin-bottom: 15px;
        }
        .login-form label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form .error-message {
            color: red;
        }
    </style>
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')
    <div class="{{ $auth_type ?? 'login' }}">
        <div class="navbar">
            <div class="navbar-left">
                <span class="brand">Toyota Mobility Solutions</span>
                <span class="beta">BETA</span>
            </div>
            <div class="navbar-center">
                <a href="#" class="nav-link">About</a>
                <div class="dropdown">
                    <a href="#" class="nav-link">Services</a>
                    <div class="dropdown-content">
                        <a href="#">Service 1</a>
                        <a href="#">Service 2</a>
                        <a href="#">Service 3</a>
                    </div>
                </div>
                <a href="#" class="nav-link">Contact</a>
            </div>
            <div class="navbar-right">
                <a href="{{ $login_url }}" class="login">Login</a>
                <button class="register" onclick="window.location.href='{{ $register_url }}'">Register</button>
            </div>
        </div>
        <form class="login-form" id="loginForm">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <button type="submit">Login</button>
            <div class="error-message" id="errorMessage"></div>
        </form>
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("#loginForm");
        const emailInput = document.querySelector("input[name='email']");
        const phoneInput = document.querySelector("input[name='phone']");
        const errorMessage = document.getElementById("errorMessage");

        form.addEventListener("submit", function (e) {
            e.preventDefault();
            errorMessage.textContent = ""; 

            const email = emailInput.value;
            const phone = phoneInput.value;

            if (email === "valid_user@example.com" && phone === "09088175555") {
                alert("Form submitted successfully!");
                return;
            }

            // Check if phone number is valid and not starting with '+' followed by country code
            if (!/^\+?0[0-9]{10}$/.test(phone)) {
                errorMessage.textContent = "Incorrect phone number format. Please try again.";
                return;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                errorMessage.textContent = "Incorrect email format. Please try again.";
                return;
            }

            if (!email || !phone) {
                errorMessage.textContent = "Email and Phone number cannot be empty.";
                return;
            }

            if (/[^a-zA-Z0-9@.]/.test(email) || /[^0-9+]/.test(phone)) {
                errorMessage.textContent = "Special characters are not allowed in Email and Phone number.";
                return;
            }

            errorMessage.textContent = "Invalid credentials.";
        });
    });
</script>
@stop
