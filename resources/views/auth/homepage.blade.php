<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Drawer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    .bg-image {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
    }

    .title-content {
        height: 60vh;
    }

    .offcanvas-header {
        background-color: #343a40; /* Dark background color */
        color: #fff; /* Light text color */
    }

    .offcanvas-title {
        color: #fff; /* Light text color */
    }

    .offcanvas-body {
        padding: 20px; /* Add padding for better appearance */
    }

    .offcanvas-body .text-muted {
        font-size: 14px; /* Adjust font size */
    }

    .offcanvas-body ul {
        display: grid; /* Use grid layout */
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); /* Responsive grid */
        gap: 10px; /* Add gap between items */
        padding: 0; /* Remove default padding */
    }

    .offcanvas-body ul li {
        padding: 10px; /* Add padding to list items */
        border-radius: 5px; /* Add border radius */
        background-color: #70b088; /* Light background color */
        transition: background-color 0.3s; /* Add transition */
    }

    .offcanvas-body ul li a {
        color: #343a40; /* Dark text color */
        text-decoration: none; /* Remove default underline */
    }

    .offcanvas-body ul li:hover {
        background-color: #e9ecef; /* Change background color on hover */
    }

    .profile-img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .navbar-nav .dropdown-menu {
        right: 0;
        left: auto;
    }

    .navbar {
        padding: 1rem 2rem; /* Increase padding for a larger navbar */
    }

    .navbar-brand button {
        font-size: 1.25rem; /* Increase font size for the button */
        padding: 0.5rem 1rem; /* Increase padding for the button */
    }

    .navbar-nav .nav-link {
        font-size: 1.25rem; /* Increase font size for nav links */
    }
</style>

<body>
    <div class="bg-image" style="background-image: url('{{ asset('pexels-gdtography-277628-911738.jpg') }}');">
        <div id="app" class="container-fluid mx-0 px-0">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-5-strong">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Menu
                        </button>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('download.jpg') }}" alt="Profile Picture" class="profile-img">
                                    John Doe
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <label for="fileInput" class="dropdown-item"><i class="fas fa-upload mr-1"></i>Upload
                                        Image</label>
                                    <input type="file" id="fileInput" style="display: none;">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Edit Profile</a>
                                    <a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Drawer -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <h3>Essentials</h3>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Amount</a></li>
                        <li><a href="#">Purchase</a></li>
                        <li><a href="#">Receipt</a></li>
                        <li><a href="{{ url('layouts/applayout') }}">Expenses</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main content -->
            <div class="container-fluid px-0 mx-0">
                <!-- Your main content here -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
