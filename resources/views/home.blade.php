<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm On Landing Page</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
        scroll-behavior: smooth;
        }

        /* Top Navigation Bar */
        header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #C5E88C;
            padding: 1rem 5%;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
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

        

        /* Hero Section */
        .hero {
            background-image: url("{{ asset('assets/bg web-01.png') }}"); /* Background image */
            background-size: cover;
            background-position: center;
            padding: 100px 5% 50px;
            color: #fff;
            text-align: center;
            position: relative;
            min-height: 100vh; /* Adjust height here to make it fullscreen */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /*background: linear-gradient(rgba(0, 77, 64, 0.7), rgba(0, 77, 64, 0.7));*/
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-content img {
            width: 150px;
            margin-bottom: 1rem;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .play-store-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            background-color: #ffffff;
            border-radius: 30px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: #000;
            font-weight: bold;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            width: 220px;
            margin-left: 12rem;
        }

        .play-store-btn img {
            width: 30px; /* Adjust size as needed */
            margin-right: 0.2rem;
            margin-top: 0.6rem;
        }

        .play-store-btn span {
            display: inline-block;
            font-size: 15px;
            line-height: 1.2;
        }

        .play-store-btn:hover {
            background-color: #f7f7f7;
        }
        /* About Section */
        .about {
            display: flex;
            align-items: center;
            padding: 5% 10%;
            background: linear-gradient(#01221F, #142F2D, #142F2D, #376853, #99B3A8, #CAD9D2, #E2ECE7, #fff);
        }

        .about .text {
            flex: 1;
            padding-right: 2rem;
            color: white;
        }

        .about .text h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .about .text p {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            text-align: center;
            
        }

        .about .app-image {
            
        }

        .about .app-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin-left: 20px;
        }

        /* Features Section */
        .features {
            padding: 5% 10%;
            text-align: center;
            background-color: #ffffff;
        }

        .features h2 {
            font-size: 2rem;
            color: #03352E;
            margin-bottom: 1rem;
        }

        .feature-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns layout */
            gap: 5rem;
        }

        .feature-card {
            background-color: #4F9369;
            color: white;
            padding-top: 3rem;
            padding-bottom: 3rem;
            padding-left: 0rem;
            padding-right: 0rem;
            border-radius: 3rem;
            text-align: center;
        }

        /* Article Section */
        .article-section {
            background-image: url('assets/pakar_asset-01 1.png');
            background-size: cover;
            background-position: center;
            padding: 100px 5%;
            color: #fff;
            text-align: center;
            position: relative;
            margin-bottom: 200px;
            margin-top: 200px;
        }

        .article-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 77, 64, 0.7), rgba(0, 77, 64, 0.7));
            z-index: 1;
        }

        .article-content {
            position: relative;
            z-index: 2;
        }

        .article-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .article-section p {
            margin-bottom: 2rem;
            font-size: 1.2rem;
        }

        .article-section .btn {
            padding: 0.5rem 1.5rem;
            background-color: white;
            color: #004d40;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
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

        .spacer {
            height: 2rem;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header id="home">
        <div class="logo">Palm On</div>
        <nav>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel')}}#artikel">Artikel</a>
            <a href="#kontak">Kontak</a>
            <!--<a href="{{ route('login') }}">
            <button class="login-btn">Login</button>
            </a>-->
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <img src="{{ asset("/assets/Group 5 2.png") }}" alt="Palm On Logo">
            <p>Kebutuhan Kebun Sawitmu akan terpenuhi dengan satu aplikasi !!</p>
            <a href="{{ url("#") }}" class="play-store-btn">
                <span>Donwload Now</span>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="text">
            <h2 style=" align-items:center">Palm On</h2>
            <p>Palm On adalah aplikasi yang dirancang untuk memenuhi segala kebutuhan dalam pengelolaan kebun sawit Anda. Dari kalkulasi hingga simulasi lahan, kami memiliki semuanya dalam satu aplikasi!</p>
        </div>
        <div class="app-image">
            <img src="{{ asset("/assets/Hp.png") }}" alt="PalmOn App Image">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <h2 id="apa">Feature</h2>
            <!-- Spacer -->
        <div class="spacer"></div>
        <div class="feature-cards">
            <div class="feature-card">
                <img src="{{asset("/assets/icon_kalkulasi.png")}}" style="width: 80px; height:100px; margin-bottom:20px;" alt="icon_kalkulasi">
                <h3>Kalkulasi</h3>
                <p style="padding: 5px;">Fitur ini dapat membantu kamu dalam menghitung laba pendapatan dari hasil kebunmu dalam satu kali klik !!</p>
            </div>
            <div class="feature-card">
                <img src="{{asset("/assets/icon_simulasi.png")}}" style="width: 100px; height:100px; margin-bottom:20px;" alt="icon_simulasi">
                <h3>Simulasi Lahan</h3>
                <p style="padding: 5px;">Bantu kamu dalam menentukan lahan yang layak untuk kebun sawitmu</p>
            </div>
            <div class="feature-card">
                <img src="{{asset("/assets/icon_guide.png")}}" style="width: 80px; height:100px; margin-bottom:20px;" alt="icon_guide">
                <h3>Guide</h3>
                <p style="padding: 5px;">Kumpulan panduan untuk kamu yang masih bingung dalam mengelola kebun sawit</p>
            </div>
            <div class="feature-card">
                <img src="{{asset("/assets/icon_artikel.png")}}" style="width: 80px; height:100px; margin-bottom:20px;" alt="icon_artikel">
                <h3>Artikel</h3>
                <p style="padding: 5px;">Kumpulan artikel yang dapat menambah pengetahuan kamu seputar kebun sawit</p>
            </div>
        </div>
    </section>

    <!-- Article Section -->
    <section class="article-section">
        <div class="article-overlay"></div>
        <div class="article-content">
            <h2>Kamu Pakar Ahli?</h2>
            <p>Kamu Bisa Publish Artikel Di sini nih !!</p>
            <a href="{{ route('howartikel') }}#cara" class="btn">Lihat Cara</a>
        </div>
    </section>

    <!-- Spacer -->
    <div class="spacer"></div>

    <!-- Footer Section -->
    <footer id="kontak">
        <div class="footer-logo">
            <img src="{{ asset("/assets/Group 5 2.png") }}" alt="Palm On Logo">
        </div>
        <div class="footer-links">
            <h3>Quick Links</h3>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel') }}#artikel">Artikel</a>
            <a href="#features">Feature</a>
        </div>
        <div class="footer-contact">
            <h3>Hubungi Kami</h3>
            <p>+62xxxxxxxxxxx</p>
            <p>palmon@email.com</p>
        </div>
    </footer>

</body>
</html>
