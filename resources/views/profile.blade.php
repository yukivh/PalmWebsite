<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Informasi Akun</title>

    <style>

        /* Reset */

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

            padding: 0.7rem 2rem;

            background-color: white;

            border: 1px solid #ddd;

            border-radius: 5px;

            cursor: pointer;

        }



        /* Main Layout */

        .container {
            display: flex;
            padding-top: 50px;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }



        .content {

            display: flex;

            flex: 1;

            padding: 20px;

        }



        /* Sidebar */

        .sidebar {

            width: 25%;

            max-width: 250px;

            background-color: #fff;

            padding: 20px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            border-radius: 15px;

        }



        .sidebar .profile-icon {

            width: 80px;

            height: 80px;

            border-radius: 50%;

            background-color: #C5E88C;

            margin: 0 auto;

        }



        .sidebar nav {

            margin-top: 20px;

            text-align: center;

        }



        .sidebar nav a {

            display: block;

            margin: 10px 0;

            color: #333;

            text-decoration: none;

            font-weight: bold;

        }



        .sidebar nav a.active {

            color: #67b168;

            text-decoration: underline;

        }



        /* Content Area */

        .content-area {

            flex: 1;

            margin-left: 20px;

            background-color: #fff;

            padding: 20px;

            border-radius: 15px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }



        .content-area h2 {

            margin-bottom: 20px;

        }



        .content-area .form-group {

            margin-bottom: 15px;

        }



        .content-area .form-group label {

            display: block;

            font-weight: bold;

            margin-bottom: 5px;

        }



        .content-area .form-group input {

            width: 100%;

            padding: 10px;

            border: 1px solid #ccc;

            border-radius: 5px;

        }



        .content-area .edit-profile-btn {

            display: inline-block;

            padding: 10px 20px;

            background-color: #67b168;

            color: white;

            border: none;

            border-radius: 5px;

            cursor: pointer;

            margin-top: 20px;

        }



        .table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }



        .table th, .table td {

            border: 1px solid #ddd;

            padding: 8px;

            text-align: left;

        }



        .table th {

            background-color: #f2f2f2;

        }



        .action-buttons {

            display: flex;

            gap: 10px;

        }



        .action-buttons button {

            padding: 5px 10px;

            background-color: #67b168;

            color: white;

            border: none;

            border-radius: 5px;

            cursor: pointer;

        }



        .action-buttons .delete-btn {

            background-color: #d9534f;

        }



        .pagination {

            display: flex;

            justify-content: flex-end;

            align-items: center;

            margin-top: 20px;

        }



        .pagination a {

            padding: 5px 10px;

            margin: 0 3px;

            text-decoration: none;

            color: #333;

            background-color: #e0f3e0;

            border-radius: 5px;

        }



        .pagination a.active {

            background-color: #67b168;

            color: white;

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
    <header>
        <div class="logo">Palm On</div>
        <nav>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel') }}">Artikel</a>
            <a href="{{ url("#") }}">Kontak</a>
        </nav>
        <a href="{{ url("#") }}">
            <img src="{{ asset("/assets/Group 5 2.png") }}" alt="User Avatar" style="width: 30px; vertical-align: middle; border-radius: 50%;">
        </a>
    </header>
    <div class="container">
        <div class="content">
            <aside class="sidebar">
                <div class="profile-icon"></div>
                <nav>
                    <a href="{{ url("#") }}" onclick="showProfile()" class="active" id="profile-link">Profile</a>
                    <a href="{{ url("#") }}" onclick="showMyArtikel()" id="artikel-link">My Artikel</a>
                </nav>
            </aside>
            <div class="content-area" id="profile-section">
                <h2>Informasi Akun - Profile</h2>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Number Phone</label>
                    <input type="text" placeholder="Number Phone">
                </div>
                <button class="edit-profile-btn">Edit Profile</button>
            </div>
            <div class="content-area" id="artikel-section" style="display: none;">
                <h2>Informasi Akun - My Artikel</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Cara Menanam Sawit</td>
                            <td>Published</td>
                            <td>
                                <div class="action-buttons">
                                    <button>Edit</button>
                                    <button class="delete-btn">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <a href="{{ url("#") }}">1</a>
                    <a href="{{ url("#") }}">2</a>
                    <a href="{{ url("#") }}" class="active">...</a>
                    <a href="{{ url("#") }}">&gt;</a>
                    <a href="{{ url("#") }}">+</a>
                </div>
            </div>
        </div>
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
    <script>
        function showProfile() {
            document.getElementById('profile-section').style.display = 'block';
            document.getElementById('artikel-section').style.display = 'none';
            document.getElementById('profile-link').classList.add('active');
            document.getElementById('artikel-link').classList.remove('active');
        }

        function showMyArtikel() {
            document.getElementById('profile-section').style.display = 'none';
            document.getElementById('artikel-section').style.display = 'block';
            document.getElementById('profile-link').classList.remove('active');
            document.getElementById('artikel-link').classList.add('active');
        }

        function showProfile() {
            document.getElementById('profile-section').style.display = 'block';
            document.getElementById('artikel-section').style.display = 'none';
            document.getElementById('profile-link').classList.add('active');
            document.getElementById('artikel-link').classList.remove('active');
        }

        function showMyArtikel() {
            document.getElementById('profile-section').style.display = 'none';
            document.getElementById('artikel-section').style.display = 'block';
            document.getElementById('profile-link').classList.remove('active');
            document.getElementById('artikel-link').classList.add('active');
        }
    </script>
</body>
</html>
