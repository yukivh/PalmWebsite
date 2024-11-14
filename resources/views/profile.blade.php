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
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #C5E88C;
            padding: 1rem 5%;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
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
        .table th,
        .table td {
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

        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .modal-header h2 {
            font-size: 1.5rem;
        }
        .close-btn {
            color: #aaa;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
        }
        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }
        .modal-footer button {
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
        .save-btn {
            background-color: #67b168;
            color: white;
        }
        .cancel-btn {
            background-color: #d9534f;
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
        }
        .footer-logo img {
            width: 100px;
        }
        .footer-links h3,
        .footer-contact h3 {
            margin-bottom: 1rem;
        }
        .footer-links a,
        .footer-contact p {
            color: #ccc;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .spacer {
            height: 2rem;
        }

        /* Table Styles */
        .table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            min-width: 100px; /* Ensures minimum width */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .table th {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>
    <header>
        <div class="logo">Palm On</div>
        <nav>
            <a href="{{ route('home') }}#home">Beranda</a>
            <a href="{{ route('artikel')}}#artikel">Artikel</a>
            <a href="#kontak">Kontak</a>
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
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h2>Informasi Akun - My Artikel</h2>
                    <button class="edit-profile-btn" onclick="addArtikel()">Add Artikel</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
                <div class="pagination" id="pagination">
                    <a href="#" class="page-number" onclick="changePage(1)">1</a>
                    <a href="#" class="page-number" onclick="changePage(2)">2</a>
                    <a href="#" class="page-number" onclick="changePage(3)">3</a>
                    <a href="#" class="page-number" onclick="changePage(4)">4</a>
                    <a href="#" class="page-number" onclick="changePage(5)">5</a>
                    <a href="#" class="page-number" onclick="changePage(6)">6</a>
                    <a href="#" class="page-number" onclick="changePage(7)">7</a>
                    <a href="#" class="page-number" onclick="changePage(8)">8</a>
                    <a href="#" class="page-number" onclick="changePage(9)">9</a>
                    <a href="#" class="page-number" onclick="changePage(10)">10</a>
                    <a href="#" class="pagination-arrow" onclick="previousPage()"><</a>
                    <a href="#" class="pagination-arrow" onclick="nextPage()">></a>
                </div>
            </div>
        </div>
    </div>

<!-- Add/Edit Artikel Modal -->
<div id="addArtikelModal" class="modal">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h2 id="modal-title">Add Artikel</h2>
            <span class="close-btn" onclick="closeModal()">&times;</span>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
            <!-- Judul Field -->
            <div class="form-group">
                <span id="judulText" style="display: block; font-weight: bold; margin-bottom: 5px;">Judul</span> <!-- Static text above input -->
                <input type="text" id="judul" placeholder="Enter Judul">
            </div>
            <!-- Status Field -->
            <div class="form-group">
                <span id="statusText" style="display: block; font-weight: bold; margin-bottom: 5px;">Status</span> <!-- Static text above input -->
                <input type="text" id="status" placeholder="Enter Status">
            </div>
        </div>
        <!-- Modal Footer -->
        <div class="modal-footer">
            <button class="cancel-btn" onclick="closeModal()">Cancel</button>
            <button class="save-btn" onclick="saveArtikel()">Save</button>
        </div>
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
        let currentPage = 1;

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

        function addArtikel() {
            alert("Add Artikel functionality is yet to be implemented.");
        }

        function changePage(pageNumber) {
            currentPage = pageNumber;
            updatePagination();
        }

        function nextPage() {
            if (currentPage < 10) {
                currentPage++;
                updatePagination();
            }
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                updatePagination();
            }
        }

        function updatePagination() {
            let pageLinks = document.querySelectorAll('.page-number');
            pageLinks.forEach(link => {
                if (parseInt(link.innerText) === currentPage) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

let currentEditRow = null;

        function addArtikel() {
            document.getElementById("modal-title").textContent = "Add Artikel";
            document.getElementById("judul").value = '';
            document.getElementById("status").value = '';
            currentEditRow = null;
            document.getElementById("addArtikelModal").style.display = "block";
        }

        function editArtikel(button) {
            document.getElementById("modal-title").textContent = "Edit Artikel";
            const row = button.parentNode.parentNode;
            currentEditRow = row;

            document.getElementById("judul").value = row.cells[1].innerText;
            document.getElementById("status").value = row.cells[2].innerText;
            document.getElementById("addArtikelModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("addArtikelModal").style.display = "none";
        }

        function saveArtikel() {
            const judul = document.getElementById("judul").value;
            const status = document.getElementById("status").value;

            if (judul && status) {
                if (currentEditRow) {
                    currentEditRow.cells[1].innerText = judul;
                    currentEditRow.cells[2].innerText = status;
                } else {
                    const table = document.querySelector(".table tbody") || document.createElement('tbody');
                    if (!table.parentNode) document.querySelector(".table").appendChild(table);

                    const row = document.createElement("tr");

                    row.innerHTML = `
                        <td>${table.rows.length + 1}</td>
                        <td>${judul}</td>
                        <td>${status}</td>
                        <td class="action-buttons">
                            <button onclick="editArtikel(this)">Edit</button>
                            <button class="delete-btn" onclick="deleteArtikel(this)">Delete</button>
                        </td>
                    `;

                    table.appendChild(row);
                }

                closeModal();
            } else {
                alert("Please fill out all fields.");
            }
        }

        function deleteArtikel(button) {
            const row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);

            document.querySelectorAll(".table tbody tr").forEach((row, index) => {
                row.cells[0].innerText = index + 1;
            });
        }

        window.onclick = function(event) {
            const modal = document.getElementById("addArtikelModal");
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
