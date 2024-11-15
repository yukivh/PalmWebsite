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

/* .text-box style updated to be more responsive */
.text-box {
    border: 1px solid #ccc; /* Border around the box */
    padding: 5px; /* Space inside the box */
    border-radius: 5px; /* Rounded corners */
    background-color: #f9f9f9; /* Light background color */
    font-size: 16px; /* Text size */
    width: 100%; /* Let the text box take full available width */
    min-height: 2rem; /* Ensure it grows with content */
    word-wrap: break-word; /* Ensure long words break and don't overflow */
    box-sizing: border-box; /* Include padding in width calculation */
}



/* Add responsiveness for mobile view */
@media screen and (max-width: 768px) {
    .content {
        flex-direction: column; /* Stack sidebar and content vertically */
    }

    .content-area {
        width: 100%; /* Ensure full width for content area */
    }
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
                    <div class="text-box">
                    This is a text box filled with words
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="text-box">
                    This is a text box filled with words
                    </div>
                </div>
                <div class="form-group">
                    <label>Number Phone</label>
                     <div class="text-box">
                    This is a text box filled with words
                    </div>
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
                    <tbody id="artikel-table-body">
                        <!-- Rows will be added dynamically -->
                    </tbody>
                </table>
                <div class="pagination" id="pagination"></div>
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
        const totalPages = 10; // Max 10 pages

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
            updatePagination();
        }

        function addArtikel() {
            alert("Add Artikel functionality is yet to be implemented.");
        }

function updatePagination() {
    const paginationContainer = document.getElementById('pagination');
    paginationContainer.innerHTML = '';

    let startPage = Math.max(1, currentPage - 1); // Show 1 page before current
    let endPage = Math.min(totalPages, currentPage + 1); // Show 1 page after current

    // Adjust so that we always show 3 pages (including the current page)
    if (endPage - startPage < 2) {
        startPage = Math.max(1, endPage - 2); // If there is not enough space on the left, adjust
    }

    if (currentPage > 1) {
        paginationContainer.innerHTML += `<a href="#" class="pagination-arrow" onclick="previousPage()"><</a>`;
    }

    // Add page numbers within range (current page - 1, current page, current page + 1)
    for (let i = startPage; i <= endPage; i++) {
        paginationContainer.innerHTML += `<a href="#" class="page-number" onclick="changePage(${i})">${i}</a>`;
    }

    if (currentPage < totalPages) {
        paginationContainer.innerHTML += `<a href="#" class="pagination-arrow" onclick="nextPage()">></a>`;
    }
}

function changePage(pageNumber) {
    currentPage = pageNumber;
    updatePagination();
}

function nextPage() {
    if (currentPage < totalPages) {
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

window.onload = updatePagination;

        function saveArtikel() {
            const judul = document.getElementById("judul").value;
            const status = document.getElementById("status").value;

            if (judul && status) {
                const tableBody = document.getElementById('artikel-table-body');

                if (currentEditRow) {
                    currentEditRow.cells[1].innerText = judul;
                    currentEditRow.cells[2].innerText = status;
                } else {
                    const newRow = tableBody.insertRow();
                    const rowCount = tableBody.rows.length;

                    newRow.innerHTML = `
                        <td>${rowCount}</td>
                        <td>${judul}</td>
                        <td>${status}</td>
                        <td class="action-buttons">
                            <button onclick="editArtikel(this)">Edit</button>
                            <button class="delete-btn" onclick="deleteArtikel(this)">Delete</button>
                        </td>
                    `;
                }

                closeModal();
            } else {
                alert("Please fill out all fields.");
            }
        }

        function editArtikel(button) {
            document.getElementById("modal-title").textContent = "Edit Artikel";
            const row = button.closest('tr');
            currentEditRow = row;

            document.getElementById("judul").value = row.cells[1].innerText;
            document.getElementById("status").value = row.cells[2].innerText;

            document.getElementById("addArtikelModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("addArtikelModal").style.display = "none";
        }

        function deleteArtikel(button) {
            const row = button.closest('tr');
            row.remove();

            const tableBody = document.getElementById('artikel-table-body');
            Array.from(tableBody.rows).forEach((row, index) => {
                row.cells[0].innerText = index + 1;
            });
        }

        window.onclick = function(event) {
            const modal = document.getElementById("addArtikelModal");
            if (event.target == modal) {
                closeModal();
            }
        }

        updatePagination();
    </script>
</body>

</html>