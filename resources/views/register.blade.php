<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm On - Sign Up</title>
    <style>
        /* General reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 60px;
            background-image: url('assets/bg\ web-01.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
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


        /* Container for the form */
        .signup-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 20px;
            width: 300px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
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
            background-color: #4CAF50;
            border-radius: 10px;
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
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
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
</body>
</html>
