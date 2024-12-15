<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Museum')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Apply the Poppins font */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Custom Styles for Navbar */
        .navbar {
            background-color: #1476d7; /* Dark background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
            height: 80px; /* Set a fixed height for the navbar */
        }
        .navbar-brand {
            font-size: 1.8rem; /* Increased font size for the brand */
            font-weight: bold;
            color: #f8f9fa !important;
            
        }
        .nav-link {
            color: #f8f9fa !important; /* White color */
            font-size: 1.2rem; /* Increased font size for links */
            font-weight: 600; /* Bold font for better visibility */
            padding: 0.8rem 1.5rem; /* Increase padding for larger clickable area */
            margin-right: 15px; /* Add margin between items */
        }
        .nav-link:hover {
            color: #ffc107 !important; /* Gold hover effect */
            background-color: rgba(255, 255, 255, 0.1); /* Slight highlight on hover */
            border-radius: 5px;
        }
        .nav-item .active {
            color: #ffc107 !important; /* Gold active link */
            text-decoration: underline; /* Underline active link */
        }
        .navbar-toggler {
            border-color: #f8f9fa;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,1)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        /* Icon Image Style */
        .navbar-brand img {
            border-radius: 50%; 
            width: 50px; /* Increased icon size */
            height: 50px; 
            object-fit: cover; /* Ensures the image fits the container */
            
        }

        /* Add padding to body to avoid content being hidden under the fixed navbar */
        body {
            padding-top: 80px; /* Adjust according to the height of your navbar */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Brand with Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/bayu.jpg') }}" alt="Logo">
                Museum Axioo
            </a>
            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('event') ? 'active' : '' }}" href="/event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('pengunjung') ? 'active' : '' }}" href="/pengunjung">Pengunjung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
