<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm On - Login</title>
    <style>
        /* General reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 60px;
            background-image: url('assets/bg\ web-01.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
        }

        /* Top Navigation Bar */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #C5E88C;
            padding: 1rem 5%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        header nav a {
            margin: 0 1rem;
            text-decoration: none;
            color: #333;
        }

        .login-btn {
            padding: 0.5rem 1rem;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Container for the login form */
        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 20px;
            width: 300px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Form styling */
        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group label {
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
            display: block;
        }

        /* Login button styling */
        .submit-btn {
            width: 100%;
            padding: 0.5rem;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        /* Additional options styling */
        .additional-options {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header id="login">
        <div class="logo">Palm On</div>
        <nav>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel') }}">Artikel</a>
            <a href="{{ url("#") }}">Kontak</a>
        </nav>
        <a href="{{ route('login')}}">
        <button class="login-btn">Login</button>
        </a>
    </header>

    

    <!-- Login Form Container -->
    <div class="login-container">
        <h2>Login</h2>
        <div class="form-group">
            <input type="text" placeholder="Email/Username">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password">
        </div>
        <button class="submit-btn">LOGIN</button>
        <div class="additional-options">
            Belum punya akun? <a href="{{ url("#register") }}" style="color: #4CAF50;">daftar sekarang</a>
        </div>
    </div>

</body>
</html>
