<aside id="sidebar" class="sidebar" style="background: #390000;
">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link" style="width: 100%" href="{{ route('dashboard') }}">
                <i class="bi bi-grid" style="color: #390000;"></i>
                <span style="color: #390000;">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <!-- Traffic Flow -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('manajemen-kamera') }}">
                <i class="bi bi-signpost-2" style="color: #390000;"></i>
                <span style="color: #390000;">Traffic Flow</span>
            </a>
        </li>
        <!-- End -->

        <!-- Congestion -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('analisis-kinerja-simpang1') }}">
                <i class="bi bi-cone-striped" style="color: #390000;"></i>
                <span style="color: #390000;">Congestion</span>
            </a>
        </li>
        <!-- End Analisis Kinerja Simpang -->

        <!-- Intersection -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-arrow-left-right" style="color: #390000;"></i>
                <span style="color: #390000;">Intersection</span>
            </a>
        </li>
        <!-- End -->

        <!-- Travel Time -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('analisis-kinerja-simpang1') }}">
                <i class="bi bi-map" style="color: #390000;"></i>
                <span style="color: #390000;">Travel Time</span>
            </a>
        </li>
        <!-- End -->

    </ul>

</aside>
