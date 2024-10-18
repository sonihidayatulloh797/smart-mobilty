<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Smart Mobility</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Link untuk Bootstrap Icons -->

    <style>
        body {
            background: url('https://s3-alpha-sig.figma.com/img/a47a/513a/1d6fb08c884c1944be0997ec09db1c8a?Expires=1730073600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=WdyI6vATr-oL9gOtLjTo7tJtuXvfHQid6j8Yw-laVZvJaL7AuIUHxk~VqJXlj2Mi5EdTHFXQU~AMlzTxac3E7AnU3hCh01Rh-bP9t540ZpVD~T4Qez8MktNAeBnYMyM~Eo4f1uDnklnetvnYYtjxJaSuBQ5WPEAnmO03CH7hh26gCUcO5-5Bznf7i08-o3J9nYPtDDJI-ZJ9hFHtEOEv~YmxCRYMRBjnBAiyt6wqg30DOX9WzebKxN9SCsPtQumpvsoUrGidVfHdZKFxv9gXb5e3~DD24ke-upSc~llDCVXAGQ6ZtdenpB~4jciJzi1~A~jdTqS2TVlrgtHsdQaFVA__') no-repeat center center fixed;
            /* Path ke gambar background */
            background-size: cover;
            /* Agar gambar memenuhi seluruh layar */
            height: 100vh;
            /* Memastikan tinggi body 100% dari viewport */
            margin: 0;
            /* Menghilangkan margin default */
            position: relative;
            /* Agar overlay dapat diposisikan relatif terhadap body */
        }

        .overlay {
            position: absolute;
            /* Posisi absolut untuk overlay */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Overlay hitam dengan opasitas 50% */
            z-index: 1;
            /* Di bawah konten, tetapi di atas background */
        }

        .custom-navbar {
            width: 100%;
            height: 61px;
            background: #9F9F9F0D;
            /* Background navbar */
            box-shadow: 0px 8px 16px 0px #00000026;
            /* Bayangan untuk navbar */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            /* Agar konten navbar dapat diposisikan */
            z-index: 2;
            /* Di atas overlay */
        }

        .navbar-text {
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 29.05px;
            text-align: left;
            color: white;
            /* Warna teks */
        }

        .login-container {
            position: absolute;
            /* Posisi absolut untuk konten login */
            top: 50%;
            /* Posisikan di tengah vertikal */
            left: 50%;
            /* Posisikan di tengah horizontal */
            transform: translate(-50%, -50%);
            /* Menyesuaikan posisi ke tengah */
            z-index: 2;
            /* Di atas overlay */
            width: 300px;
            /* Lebar kontainer login */
            background: none;
            /* Latar belakang transparan */
            padding: 20px;
            /* Jarak di dalam kontainer */
            border-radius: 8px;
            /* Sudut membulat */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Bayangan kontainer */
        }

        .login-header {
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            /* Jarak bawah untuk header */
            color: white;
            /* Warna teks header */
        }

        .form-group {
            margin-bottom: 15px;
            /* Jarak antar elemen form */
        }

        .form-control {
            background: none;
            /* Latar belakang transparan untuk input */
            border: 1px solid rgba(255, 255, 255, 0.5);
            /* Border untuk input */
            color: white;
            /* Warna teks input */
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
            /* Warna placeholder */
        }

        .btn-signin {
            width: 100%;
            /* Tombol mengisi lebar penuh */
        }

        /* Gaya untuk footer */
        .footer {
            position: absolute;
            bottom: 0;
            /* Posisi footer di bagian bawah */
            left: 50%;
            /* Posisikan di tengah horizontal */
            transform: translateX(-50%);
            /* Menyesuaikan posisi ke tengah */
            z-index: 2;
            /* Di atas overlay */
            color: white;
            /* Warna teks footer */
            background: none;
            /* Latar belakang transparan */
            padding: 10px;
            /* Jarak di dalam footer */
            text-align: center;
            /* Teks rata tengah */
            width: 100%;
            /* Lebar footer */
        }

    </style>

</head>

<body>
    <!-- Overlay gelap -->
    <div class="overlay"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark custom-navbar">
        <span class="navbar-text">
            <img src="{{ asset('assets/img/Fase/Logo.png') }}" alt="Logo">
        </span>
    </nav>

    <!-- Konten Login -->
    <div class="login-container">
        <div class="login-header">Login</div>
        <form action="{{ route('landing-page') }}">
            <div class="form-group">
                <label for="username" style="color: white">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label for="password" style="color: white">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                    <button type="button" class="btn btn-outline-secondary bg-light" onclick="togglePassword()">
                        <span id="password-icon" class="bi bi-eye"></span> <!-- Ikon akan ditambahkan di sini -->
                    </button>
                </div>
            </div>
            <button type="submit" class="btn btn-signin mt-3" style="color: white; background: linear-gradient(180deg, #23DFA8 0%, #13795B 100%);
">Sign In</button>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        © 2000 - Company, Inc. All rights reserved. Address Address
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');

            // Ubah tipe input dari password ke text dan sebaliknya
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('bi-eye');
                passwordIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('bi-eye-slash');
                passwordIcon.classList.add('bi-eye');
            }
        }

    </script>
</body>

</html>
