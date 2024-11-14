<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm On</title>
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

        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Ensures footer stays at the bottom */
            min-height: 100vh;
            background-image: url('assets/bg web-01.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
        }

        /* Main Content Area */
        main {
            flex: 1; /* Takes remaining space */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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

        /* Container styling */
        .container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 20px;
        width: 350px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
         text-align: center;
         margin-top: 80px; /* Offset for fixed header */
        flex: 1; /* Pushes footer to the bottom */
        max-height: 400px; /* Set a maximum height */
        overflow-y: auto; /* Make the container scrollable if content exceeds max-height */
}


        .container h2 {
            margin-bottom: 1rem;
        }

        /* Button styling */
        .btn {
            padding: 0.5rem 1.5rem;
            background-color: #4F9369;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        /* Footer */
        footer {
            display: flex;
            justify-content: space-around;
            align-items: start;
            background-color: #012522;
            color: white;
            padding: 2rem 5%;
            width: 100%;
            max-height: 200px; /* Set a maximum height for the footer */
            overflow-y: auto; /* Make the footer scrollable if content exceeds the max-height */
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

        .footer-links a:hover, .footer-contact p:hover {
            color: #4CAF50;
        }

        /* Spacer to separate content from footer */
        .spacer {
            height: 2rem;
        }
    </style>
</head>
<body>
    <!-- Main Content Section -->
    <main>
        <!-- Header Section -->
        <header>
            <div class="logo">Palm On</div>
            <nav>
                <a href="{{ route('home') }}#home">Beranda</a>
                <a href="{{ route('artikel')}}#artikel">Artikel</a>
                <a href="#kontak">Kontak</a>
            </nav>
            <a href="{{ url("#") }}">
                <img src="{{ asset("/assets/Group 5 2.png") }}" alt="User Avatar" style="width: 30px; vertical-align: middle; border-radius: 50%;">
            </a>
        </header>

        <!-- Registration Confirmation Page -->
        <div class="container">
            <h2>Terima kasih telah mendaftar sebagai pakar</h2>
            <p>Pihak kami akan mengecek legalitas pakar kamu. Silahkan cek email secara berkala untuk pemberitahuan aktivasi akun</p>
            <a href="{{ route('home') }}#home">
            <button class="btn">Kembali ke beranda</button>
            </a>
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
