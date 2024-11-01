<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Smart Mobility</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('adminassets/img/sccic.png') }}" rel="icon">
    <link href="{{ asset('adminassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('adminassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/vendor/bootstrap-icons/bootstrap-icons.css')  }}" rel="stylesheet">
    <link href="{{ asset('adminassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('adminassets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('adminassets/css/style.css')  }}" rel="stylesheet">

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
        .table-street th, .table-street td {
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

        #nested-section5::before { /* Left arrow */
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            border-left-color: #333;
        }

        #nested-section5::after { /* Right arrow */
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


    @livewireStyles
</head>

<body>
    <body>

    <!-- ======= Header ======= -->
    @include('components.admin-header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('components.admin-sidebar')
    <!-- ======= End Sidebar ======= -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Smart Mobility</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Smart Mobility</a>
        </div>
    </footer> --}}
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('adminassets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('adminassets/js/main.js') }}"></script>

    @livewireScripts

</body>

</html>
