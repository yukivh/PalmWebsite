<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Menanam Sawit</title>
    <style>
        /* Reset and base styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Flexbox Layout */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f5f5f5;
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
            cursor: pointer;
        }

        /* Header Gradient Background with Image */
        .header-gradient {
            position: relative; /* Allows positioning of inner elements */
            background: linear-gradient(to bottom, #C5E88C, hsla(97, 59%, 89%, 0.1), #C5E88C),
                        url('assets/bg\ web-01.png'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            padding: 6rem 5% 3rem; /* Adds padding at the top to compensate for header */
            min-height: 300px; /* Adjust this value to make the box taller */
            color: #333;
        }

        .header-gradient h1 {
            position: absolute; /* Position relative to .header-gradient */
            bottom: 1rem; /* Move title 1rem above the bottom */
            left: 5%; /* Align title to the left with same padding as content */
            font-size: 2rem;
            margin: 0;
            color: black;
        }

        /* Main Content Styling */
        .content {
            flex: 1;
            padding: 2rem 5%;
            color: #333;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            display: flex;
            justify-content: space-around;
            align-items: start;
            background-color: #012522;
            color: white;
            padding: 2rem 5%;
            margin-top: auto;
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
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
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
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

    <!-- Gradient Header with Title -->
    <div class="header-gradient">
        <h1>Cara Menanam Sawit</h1> <!-- Positioned at the bottom left -->
    </div>

    <!-- Main Content Section -->
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in aliquet est...</p>
        <!-- Additional paragraphs can go here -->
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-logo">
            <img src="{{ asset("/assets/Group 5 2.png") }}" alt="Palm On Logo">
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <a href="{{ url("#home") }}">Beranda</a>
            <a href="{{ url("#features") }}">Artikel</a>
            <a href="{{ url("#features") }}">Feature</a>
        </div>
        <div class="footer-contact">
            <h3>Hubungi Kami</h3>
            <p>+62xxxxxxxxxxx</p>
            <p>palmon@email.com</p>
        </div>
    </footer>

</body>
</html>
