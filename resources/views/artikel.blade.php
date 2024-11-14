<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="artikel">Palm On - Kumpulan Artikel</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
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
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        /* Individual article card styling */
        .article-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
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

    <!-- Main Container -->
    <div class="container">
        <!-- Page Title -->
        <h1>Kumpulan Artikel</h1>
        <hr>
        
        <!-- Search Bar -->
        <input type="text" class="search-bar" placeholder="Search...">

        <!-- Articles Grid -->
        <div class="article-grid">

            <!-- Article Card -->
            <div class="article-card">
                <img src="{{ asset("/Artikel(1).png") }}" alt="Cara Menanam Sawit"> <!-- Update image path here -->
                <h3>Cara Menanam Sawit</h3> <!-- Update article title here -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu quam eget neque viverra porta...</p> <!-- Update article description here -->
            </div>

            <!-- Duplicate Article Cards -->
            <div class="article-card">
                <img src="{{ asset("/Artikel(1).png") }}" alt="Cara Menanam Sawit">
                <h3>Cara Menanam Sawit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu quam eget neque viverra porta...</p>
            </div>

            <div class="article-card">
                <img src="{{ asset("/Artikel(1).png") }}" alt="Cara Menanam Sawit">
                <h3>Cara Menanam Sawit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu quam eget neque viverra porta...</p>
            </div>

            <div class="article-card">
                <img src="{{ asset("/Artikel(1).png") }}" alt="Cara Menanam Sawit">
                <h3>Cara Menanam Sawit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu quam eget neque viverra porta...</p>
            </div>

            <div class="article-card">
                <img src="{{ asset("/Artikel(1).png") }}" alt="Cara Menanam Sawit">
                <h3>Cara Menanam Sawit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu quam eget neque viverra porta...</p>
            </div>

            <div class="article-card">
                <img src="{{ asset("/Artikel(1).png") }}" alt="Cara Menanam Sawit">
                <h3>Cara Menanam Sawit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu quam eget neque viverra porta...</p>
            </div>

        </div>
    </div>

</body>
</html>

