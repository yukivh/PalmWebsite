<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm On - Login</title>
    <style>
        /* General reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
        scroll-behavior: smooth;
        }

        /* Body styling */
        body {
            margin: 0;
            background-image: url('assets/bg web-01.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
            overflow-x: hidden;
        }

        /* Main content area that fills the viewport */
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-top: 60px;
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
            padding-top: 2rem;
            padding-bottom: 3rem;
            border-radius: 50px;
            width: 500px;
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
            background-color: #4F9369;
            color: #fff;
            border: none;
            border-radius: 50px;
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

        /* Footer */
        footer {
            display: flex;
            justify-content: space-around;
            align-items: start;
            background-color: #012522;
            color: white;
            padding: 2rem 5%;
        }

        .footer-logo img {
            width: 100px;
        }

        .footer-links h3, .footer-contact h3 {
            margin-bottom: 1rem;
        }

        .footer-links a, .footer-contact p {
            color: #ccc;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        input[type="text"] {
        border-radius: 30px; /* Adjust the radius value for rounded corners */
        padding: 12px;       /* Add padding for a better user experience */
        border: 1px solid #ccc; /* Border styling */
         width: 100%;         /* Make it responsive */
         margin-bottom: 5px; /* Add space between the input fields */
}

input[type="password"] {
        border-radius: 30px; /* Adjust the radius value for rounded corners */
        padding: 12px;       /* Add padding for a better user experience */
        border: 1px solid #ccc; /* Border styling */
         width: 100%;         /* Make it responsive */
         margin-bottom: 5px; /* Add space between the input fields */
}
    </style>
</head>
<body>

    <!-- Main Content Section -->
    <main>
        <!-- Header Section -->
        <header id="login">
            <div class="logo">Palm On</div>
            <nav>
                <a href="{{ route('home') }}#home">Beranda</a>
                <a href="{{ route('artikel')}}#artikel">Artikel</a>
                <a href="#kontak">Kontak</a>
            </nav>
            <a href="{{ route('login')}}">
            <button class="login-btn">Login</button>
            </a>
        </header>

        <!-- Login Form Container -->
        <div class="login-container">
            <h2>Login</h2>
            <div class="form-group" style="border-radius: 50px;">
                <input type="text" placeholder="Email/Username">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password">
            </div>
            <button class="submit-btn">LOGIN</button>
            <div class="additional-options">
                Belum punya akun? <a href="{{ route('register')}}#register" style="color: #4CAF50;">daftar sekarang</a>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer id="kontak">
        <div class="footer-logo">
            <img src="{{ asset("/assets/Group 5 2.png") }}" alt="Palm On Logo">
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel') }}#artikel">Artikel</a>
            <a href="{{ route('features') }}#features">Feature</a>
        </div>
        <div class="footer-contact">
            <h3>Hubungi Kami</h3>
            <p>+62xxxxxxxxxxx</p>
            <p>palmon@email.com</p>
        </div>
    </footer>

</body>
</html>
