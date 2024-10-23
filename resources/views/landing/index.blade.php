<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mobility</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <style>
        /* Custom CSS for Hero Section */
        .hero {
            background: url('{{ asset('assets/img/Fase/hero.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            /* justify-content: center; */
            color: white;
            text-align: center;
            position: relative;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.5rem;
        }

        .hero .btn-primary,
        .hero .btn-outline-light {
            font-size: 1.2rem;
            padding: 0.75rem 2rem;
            margin: 0.5rem;
        }

        /* Footer Styles */
        footer {
            background-color: rgba(0, 0, 0, 0.5); /* Transparent background */
            color: white;
            padding: 1rem 0;
            text-align: center;
            position: relative;
            width: 100%;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/Fase/Logo.png') }}" alt="logo">
            </a>

            <div class="d-flex ms-auto align-items-center">
                <!-- Profile Dropdown -->
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownUser"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 text-white">Hai, Username</span>
                        <img src="{{ asset('assets/img/Fase/user.png') }}" class="rounded-circle" alt="Profile Picture"
                            width="40" height="40">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person-circle me-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i> Settings
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-overlay"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-content text-start">
                        <h1><span class="heading-effect">Smart</span> <span style="color: #FF0000">Mobility</span></h1>
                        <h1>Simulator</h1>
                        <p>Your journey to excellence starts here.</p>
                        <div>
                            <a href="{{ route('admin-dashboard') }}" class="btn button-dashboard">Dashboard</a>
                            <a href="#" class="btn button-tutorial" style="margin-left: 20px">Mulai Tutorial</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-content text-start mt-4">
                        <h5>PERHATIAN :</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Faucibus rutrum feugiat eu massa hendrerit sed nibh quam eu. Nisl integer dignissim massa diam nam. Risus pretium in mattis egestas vulputate turpis pharetra urna elit. Blandit at felis tincidunt tristique gravida egestas dictum dignissim.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark">
        <p>&copy; 2024 Smart Mobility Simulator. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
