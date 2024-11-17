<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artikel['judul'] }}</title>
    <style>
        /* Styling dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Header */
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

        /* Gradient Header */
        .header-gradient {
            position: relative;
            background: linear-gradient(to bottom, #C5E88C, hsla(97, 59%, 89%, 0.1), #C5E88C),
                        url('{{ $artikel["gambar_url"] }}');
            background-size: cover;
            background-position: center;
            padding: 6rem 5% 3rem;
            min-height: 500px;
            color: #333;
        }

        .header-gradient h1 {
            position: absolute;
            bottom: 1rem;
            left: 5%;
            font-size: 2rem;
            margin: 0;
            color: black;
        }

        /* Main Content */
        .content {
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
            height: 65vh;
            margin-top: 500px;
        }

        .footer-logo img {
            width: 100px;
            margin-top: 100px;
        }

        .footer-links h3, .footer-contact h3 {
            margin-bottom: 1rem;
            margin-top: 100px;
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
            <a href="{{ route('artikel') }}#artikel">Artikel</a>
            <a href="#kontak">Kontak</a>
        </nav>
        <!--<a href="{{ route('login') }}">
            <button class="login-btn">Login</button>
        </a>-->
    </header>

    <!-- Gradient Header with Title -->
    <div class="header-gradient">
        <h1>{{ $artikel['judul'] }}</h1>
    </div>

    <!-- Main Content -->
    <div class="content">
        <p>{!! nl2br(e($artikel['isi'])) !!}</p>
    </div>

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
