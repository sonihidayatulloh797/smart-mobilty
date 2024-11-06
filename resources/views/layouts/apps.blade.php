<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/Fase/Logo.png') }}" width="100" type="image/x-icon">

    <title>Smart Mobility</title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            transition: width 0.3s;
            background: radial-gradient(100% 100% at 50% 0%, #B20000 50%, #DB0000 100%);
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar.expanded {
            width: 250px;
        }

        .sidebar-heading {
            display: inline;
            transition: display 0.3s;
        }

        .sidebar.collapsed .sidebar-heading {
            display: none;
        }

        .main-content {
            margin-left: 80px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .header {
            height: 60px;
            background: radial-gradient(100% 100% at 50% 0%, #B20000 50%, #DB0000 100%);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            margin-left: 80px;
            transition: margin-left 0.3s;
            color: white;
        }

        .header.collapsed {
            margin-left: 80px;
        }

        .nav {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            height: 60px;
            width: 100%;
            color: white;
            transition: color 0.3s, background-color 0.3s;
        }

        .nav-link.active {
            background-color: #7c0303;
        }

        .nav-link:hover {
            color: white;
            /* Mengubah warna font menjadi putih saat hover */
            background-color: rgba(0, 0, 0, 0.2);
        }

        .nav-link span {
            margin-left: 10px;
            display: inline;
        }

        .sidebar.collapsed .nav-link span {
            display: none;
        }

        #toggleSidebar {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            background: #002F34;
            border: none;
            color: white;
            width: 100%;
            height: 60px;
            border-top-right-radius: 50px 80px;
        }

    </style>

    <style>
        .main-section {
            aspect-ratio: 1 / 1;
            border: 2px solid #333;
            padding: 1%;
            display: flex;
            flex-direction: column;
        }

        .nested-row {
            flex: 1;
            display: flex;
        }

        .nested-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
            overflow: hidden;
            color: #333;
            position: relative;
            font-size: 0.8vw;
        }

        #nested-section1 {
            border-right: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        #nested-section3 {
            border-left: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        #nested-section7 {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        #nested-section9 {
            border-left: 1px solid #333;
            border-top: 1px solid #333;
        }

        .table-street {
            color: #333;
            margin-bottom: 0;
            font-size: 0.7vw;
            width: 100%;
            height: 100%;
        }

        .table-street th,
        .table-street td {
            border-color: rgba(51, 51, 51, 0.3);
            padding: 1px !important;
        }

        .vertical-header {
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(180deg);
            white-space: nowrap;
        }

        .right-header {
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(0deg);
        }

        /* Arrow styles for nested-section5 */
        #nested-section5::before,
        #nested-section5::after,
        #nested-section5 .arrow-top,
        #nested-section5 .arrow-bottom {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border: 0.8vw solid transparent;
        }

        #nested-section5::before {
            /* Left arrow */
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            border-left-color: #333;
        }

        #nested-section5::after {
            /* Right arrow */
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            border-right-color: #333;
        }

        #nested-section5 .arrow-top {
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            border-top-color: #333;
        }

        #nested-section5 .arrow-bottom {
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-bottom-color: #333;
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Untuk heatmap -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-matrix@1.3.0"></script>

    @livewireStyles
</head>

<body>

    <!-- Sidebar -->
    @include('components.admin-sidebar')

    <!-- Header -->
    @include('components.admin-header')

    <div class="main-content" id="main-content">
        @yield('content')
    </div>

    <script>
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const header = document.getElementById('header');
        const mainContent = document.getElementById('main-content');

        toggleSidebar.addEventListener('click', () => {
            const isCollapsed = sidebar.classList.toggle('collapsed');
            sidebar.classList.toggle('expanded');
            header.classList.toggle('collapsed');
            mainContent.style.marginLeft = isCollapsed ? '80px' : '250px';

            const icon = toggleSidebar.querySelector('i');
            toggleSidebar.querySelector('span.sidebar-heading').style.display = isCollapsed ? 'none' : 'inline';
            icon.classList.toggle('bi-caret-left-fill', !isCollapsed);
            icon.classList.toggle('bi-caret-right-fill', isCollapsed);
        });

    </script>

    <script>
        let cameraCount = 1; // Variabel untuk menghitung jumlah kamera

        document.getElementById('addCameraBtn').addEventListener('click', function () {
            cameraCount++; // Menaikkan jumlah kamera

            // Membuat elemen kartu baru
            const newCard = `
                <div class="col-md-2 mb-4 card-item">
                    <div class="card">
                        <div class="card-body">
                            <iframe width="100%" height="150" src="https://www.youtube.com/embed/example${cameraCount}" frameborder="0" allowfullscreen style="border-radius: 10px;"></iframe>
                            <h5 class="card-title">Kamera ${cameraCount}</h5>
                            <p>Simpang XXX</p>
                        </div>
                    </div>
                </div>
            `;

            // Menambahkan kartu baru ke dalam row
            document.getElementById('cardRow').insertAdjacentHTML('beforeend', newCard);
        });

        // Fitur pencarian
        document.getElementById('searchForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Mencegah pengiriman form

            const searchTerm = document.getElementById('searchInput').value
        .toLowerCase(); // Ambil input pencarian
            const cards = document.querySelectorAll('.card-item'); // Ambil semua elemen kartu

            // Iterasi melalui setiap kartu
            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent
            .toLowerCase(); // Ambil judul kartu
                // Menyembunyikan atau menampilkan kartu berdasarkan pencarian
                if (title.includes(searchTerm)) {
                    card.style.display = 'block'; // Tampilkan kartu jika cocok
                } else {
                    card.style.display = 'none'; // Sembunyikan kartu jika tidak cocok
                }
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('adminassets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/php-email-form/validate.js') }}"></script>

    @livewireScripts
</body>

</html>
