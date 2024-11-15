<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Akun</title>
    <style>
        /* Reset */
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
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #a8d08d;
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

        /* Main Layout */
        .container {
            display: flex;
            padding-top: 100px;
            min-height: 100vh;
            flex-direction: column;
            align-items: center;
        }

        /* Toggle Buttons */
        .toggle-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .toggle-buttons button {
            padding: 10px 20px;
            background-color: #a8d08d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .toggle-buttons button.active {
            background-color: #67b168;
        }

        /* Content Area */
        .content-area {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            padding-bottom: 60px;
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

        .submit-btn {
            padding: 10px 20px;
            background-color: #67b168;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
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
    <header id="change_profile">
        <div class="logo">Palm On</div>
        <nav>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel')}}#artikel">Artikel</a>
            <a href="#kontak">Kontak</a>
        </nav>
        <a>
        <img id="profile"src="{{ asset("/assets/Group 5 2.png") }}" alt="User Avatar" style="width: 30px; vertical-align: middle; border-radius: 50%;">
        </a>
    </header>

    <div class="container">
        <div class="toggle-buttons">
            <button id="profileBtn" onclick="showProfileForm()" class="active">Profile</button>
            <button id="passwordBtn" onclick="showPasswordForm()">Password</button>
        </div>

        <div class="content-area" id="profile-form">
            <h2>Profile Information</h2>
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
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" placeholder="Confirm New Password">
            </div>
            <button class="submit-btn">Submit Profile</button>
        </div>

        <div class="content-area" id="password-form" style="display: none;">
            <h2>Change Password</h2>
            <div class="form-group">
                <label>Old Password</label>
                <input type="password" placeholder="Old Password">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" placeholder="New Password">
            </div>
            <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password" placeholder="Confirm New Password">
            </div>
            <button class="submit-btn">Submit Password</button>
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

    <script>
        function showProfileForm() {
            document.getElementById('profile-form').style.display = 'block';
            document.getElementById('password-form').style.display = 'none';
            document.getElementById('profileBtn').classList.add('active');
            document.getElementById('passwordBtn').classList.remove('active');
        }

        function showPasswordForm() {
            document.getElementById('profile-form').style.display = 'none';
            document.getElementById('password-form').style.display = 'block';
            document.getElementById('passwordBtn').classList.add('active');
            document.getElementById('profileBtn').classList.remove('active');
        }
    </script>
</body>
</html>
