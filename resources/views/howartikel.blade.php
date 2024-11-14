<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Publish Artikel</title>
    <style>
        /* Reset and base styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        html {
        scroll-behavior: smooth;
        }

        /* Flexbox Layout */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 70px; /* To prevent content overlap with the fixed header */
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

        /* Main Content Styling */
        .container {
            flex: 1; /* Takes up available space between header and footer */
            padding: 2rem 5%;
        }

        h1 {
            margin-bottom: 1rem;
            color: #333;
        }

        .instructions {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .instructions ol {
            padding-left: 1.5rem;
        }

        .instructions li {
            margin-bottom: 0.5rem;
            color: #333;
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

        .spacer {
            height: 2rem;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header id="howartikel">
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

    <!-- Instructions Section -->
    <div class="container">
        <div class="instructions">
            <h1>Cara Publish Artikel</h1>
            <ol>
                <li>Pergi ke menu login -> daftar sekarang, pada halaman sign in pilih kategori pakar.</li>
                <li>Selanjutnya lakukan registrasi pada halaman sign in dan isi data yang diperlukan pada form.</li>
                <li>Tunggu sampai akun anda terverifikasi.</li>
                <li>Setelah terverifikasi, silahkan masuk ke menu account pada pojok kanan website.</li>
                <li>Pada halaman account masuk ke opsi my artikel, pada halaman ini akan terlihat status artikel yang telah anda submit, klik icon tanda tambah untuk membuat artikel.</li>
                <li>Isi form artikel dengan lengkap dan klik request publish.</li>
                <li>Admin akan mengecek dan meng-accept artikel kamu agar bisa muncul pada halaman artikel website maupun mobile.</li>
            </ol>
        </div>
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
