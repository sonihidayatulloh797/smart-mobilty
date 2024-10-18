<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <!-- Manajemen Kamera -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('manajemen-kamera') }}">
                <i class="bi bi-person"></i>
                <span>Manajemen Kamera</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <!-- Analisis Kinerja Simpang -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('analisis-kinerja-simpang1') }}">
                <i class="bi bi-question-circle"></i>
                <span>Analisis Kinerja Simpang</span>
            </a>
        </li>
        <!-- End Analisis Kinerja Simpang -->

    </ul>

</aside>
