<html>
<head>
    <title>Smart Mobility Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: url('{{ asset('assets/img/Fase/hero.jpg') }}') no-repeat center center/cover;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #000;
            padding: 1rem;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-brand span {
            color: red;
        }
        .navbar .nav-item .nav-link {
            color: #fff;
        }
        .content {
            background: rgba(178, 0, 0, 0.8); /* 0.8 = 20% transparansi */
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem auto;
            max-width: 800px;
        }
        .steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }
        .step {
            background: #fff;
            color: #000;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .step.active {
            background: #00cccc;
        }
        .step-label {
            text-align: center;
            margin-top: 0.5rem;
            color: #fff;
        }
        .buttons {
            margin-left: 20px;
            margin-top: 2rem;
        }
        .buttons .btn {
            background-color: #028989;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .card {
            border-radius: 10px;
            padding: 20px;
        }
        .upload-section, .download-section {
            margin-bottom: 30px;
        }
        .upload-section input[type="text"] {
            border: 1px solid #f8d7da;
            border-radius: 5px;
            padding: 10px;
            width: 300px;
            margin-right: 10px;
        }
        .upload-section input[type="text"]::placeholder {
            color: #d3d3d3;
        }
        .btn-upload {
            background-color: #17a2b8;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-upload i {
            margin-left: 5px;
        }
        .btn-download {
            background-color: #ffc107;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-download i {
            margin-left: 5px;
        }

        .footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing-page') }}">
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

    <div class="content">
        <div class="steps">
            <a href="{{ route('landing-page1') }}" style="text-decoration: none; color: #000"><div class="step">1</div></a>
            <a href="{{ route('landing-page2') }}" style="text-decoration: none; color: #000"><div class="step">2</div></a>
            <a href="{{ route('landing-page3') }}" style="text-decoration: none; color: #000"><div class="step active">3</div></a>
            <a href="#" style="text-decoration: none; color: #000"><div class="step">4</div></a>
        </div>
        <div class="steps">
            <div class="step-label">Data Source</div>
            <div class="step-label">Setting Parameter</div>
            <div class="step-label">Preview</div>
            <div class="step-label">Result</div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="mt-4">3. Input Data</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Faucibus rutrum feugiat eu massa hendrerit sed nibh quam eu. Nisl integer dignissim massa diam nam. Risus pretium in mattis egestas vulputate turpis pharetra urna elit. Blandit at felis tincidunt tristique gravida egestas dictum dignissim.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="buttons">
                            <button class="btn">
                                <i class="fas fa-plus"></i> Data Dummy
                            </button>
                            <button class="btn">
                                <i class="fas fa-plus"></i> Data Real
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="upload-section">
                        <h5>Upload Data</h5>
                        <input type="text" placeholder="Input Data........">
                        <button class="btn btn-upload">
                            Upload <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                    <div class="download-section">
                        <h5>Download Template</h5>
                        <button class="btn btn-download">
                            Download <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer">
        © 2000 - Company, Inc. All rights reserved. Address Address
    </div>
</body>
</html>
