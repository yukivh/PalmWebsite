<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm On - Sign Up</title>
    <style>
        /* General reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;

        /* Ensure the entire page height is used */
        html, body {
            height: 100%;
        }

        html {
        scroll-behavior: smooth;
        }

        body {
            margin: 0;
            color: #333;
        }

        /* Main content area that fills the viewport */
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('assets/bg web-01.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            flex: 1; /* Pushes footer to the bottom if content is short */
        }

        /* Top Navigation Bar */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #C5E88C;
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
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

        .signup-container {
         background-color: #fff;
         padding: 2rem;
         margin-top: 10rem; /* Space above the form (adjust this value) */
         margin-bottom: 5rem; /* Space below the form (add this line) */
         border-radius: 50px;
         width: 400px;
         box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
         text-align: center;
         display: flex;
         flex-direction: column;
         justify-content: center;
}


        .signup-container h2 {
            margin-bottom: 1rem;
        }

        /* Tab styling */
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .tab {
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-weight: bold;
            color: #333;
            border: 1px solid transparent;
        }

        .tab.active {
            color: #fff;
            background-color: #4F9369;
            border-radius: 50px;
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

        /* Submit button styling */
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

        /* Google sign-in option styling */
        .google-signin {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #555;
        }

        input[type="text"] {
        border-radius: 30px; /* Adjust the radius value for rounded corners */
        padding: 12px;       /* Add padding for a better user experience */
        border: 1px solid #ccc; /* Border styling */
         width: 100%;         /* Make it responsive */
         margin-bottom: 5px; /* Add space between the input fields */
}

input[type="email"] {
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

        /* Footer Styling */
        footer {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background-color: #012522;
            color: white;
            padding: 2rem 5%;
            width: 100%;
            margin-top: auto; /* Push footer to bottom */
            flex-wrap: wrap;
        }

        .footer-logo img {
            width: 100px;
        }

        .footer-links, .footer-contact {
            margin: 1rem 0;
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
    </style>
    <script>
        function switchTab(category) {
            // Get elements
            var umumForm = document.getElementById('umumForm');
            var pakarForm = document.getElementById('pakarForm');
            var umumTab = document.getElementById('umumTab');
            var pakarTab = document.getElementById('pakarTab');
            
            // Toggle forms
            if (category === 'umum') {
                umumForm.style.display = 'block';
                pakarForm.style.display = 'none';
                umumTab.classList.add('active');
                pakarTab.classList.remove('active');
            } else {
                umumForm.style.display = 'none';
                pakarForm.style.display = 'block';
                pakarTab.classList.add('active');
                umumTab.classList.remove('active');
            }
        }
    </script>
</head>
<body>
    <!-- Main Content Section -->
    <main>
        <!-- Header Section -->
        <header id="register">
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

        <!-- Signup Form Container -->
        <div class="signup-container">
            <h2>Sign up</h2>
            <div class="tabs">
                <div id="umumTab" class="tab active" onclick="switchTab('umum')">Umum</div>
                <div id="pakarTab" class="tab" onclick="switchTab('pakar')">Pakar</div>
            </div>

            <!-- Umum Form -->
            <div id="umumForm">
                <div class="form-group">
                    <label for="usernameUmum">Username</label>
                    <input type="text" id="usernameUmum" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="emailUmum">Email</label>
                    <input type="email" id="emailUmum" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="passwordUmum">Password</label>
                    <input type="password" id="passwordUmum" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="phoneUmum">Phone Number</label>
                    <input type="text" id="phoneUmum" placeholder="Phone Number">
                </div>
                <button class="submit-btn">SIGN UP</button>
                <div class="google-signin">Or Sign up with: <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google" width="20"></div>
            </div>

            <!-- Pakar Form -->
            <div id="pakarForm" style="display: none;">
                <div class="form-group">
                    <label for="usernamePakar">Username</label>
                    <input type="text" id="usernamePakar" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="emailPakar">Email</label>
                    <input type="email" id="emailPakar" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="passwordPakar">Password</label>
                    <input type="password" id="passwordPakar" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="phonePakar">Phone Number</label>
                    <input type="text" id="phonePakar" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="certificate">Upload Sertifikat Pakar</label>
                    <input type="file" id="certificate">
                </div>
                <button class="submit-btn">SIGN UP</button>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer id="kontak">
        <div class="footer-logo">
            <img src="{{ asset('/assets/Group 5 2.png') }}" alt="Palm On Logo">
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
