<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="artikel">Palm On - Kumpulan Artikel</title>
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

        


        /* Main content styling */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 5%;
        }

        /* Search bar styling */
        .search-bar {
            width: 200px;
            padding: 0.5rem;
            border: 1px solid #333;
            border-radius: 20px;
            margin-bottom: 1.5rem;
            margin-top: 1.5rem;
        }

        /* Title styling */
        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Articles grid styling */
        .article-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, 335px);
            gap: 20px;
            margin-top: 30px;
        }

        /* Individual article card styling */
        .article-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            width: 335px;
            height: auto;
            text-decoration: none;
        }

        .article-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 0.5rem;
        }

        .article-card h3 {
            font-size: 1.2rem;
            color: #333;
            margin: 0.5rem 0;
        }

        .article-card p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.5rem;
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
            margin-top: 300px;
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
    <header>
        <div class="logo">Palm On</div>
        <nav>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel') }}#artikel">Artikel</a>
            <a href="#kontak">Kontak</a>
            <!--<a href="{{ route('login') }}">
            <button class="login-btn">Login</button>
            </a>-->
        </nav>
    </header>

    <!-- Main Container -->
    <div class="container">
        <!-- Page Title -->
        <h1>Kumpulan Artikel</h1>
        <hr>

        <!-- Articles Grid -->
        <div class="article-grid">
            <!-- Loop through artikel data -->
            @foreach ($artikels as $artikel)
                <a href="{{ route('isi_artikel', $artikel['id']) }}" class="article-card">
                    <img src="{{ $artikel['gambar_url'] }}" alt="{{ $artikel['judul'] }}">
                    <h3>{{ $artikel['judul'] }}</h3>
                    <p>{{ Str::limit($artikel['isi'], 100) }}...</p>
                    <p><small>Oleh: {{ $artikel['nama_pembuat'] }}</small></p>
                </a>
            @endforeach
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
