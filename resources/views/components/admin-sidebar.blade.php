<div class="sidebar collapsed" id="sidebar">
    <div class="d-flex flex-column align-items-stretch">
        <button class="btn" id="toggleSidebar">
            <span class="sidebar-heading">Smart <span
                    style="color: #DB0000; font-weight: bold;">Mobility</span></span>
            <i class="bi bi-caret-right-fill"></i>
        </button>
        <div class="nav">
            <a href="#" class="nav-link">
                <img src="{{ asset('adminassets/img/icon/Vector.png') }}" alt="Smart Mobility">
                <span>Home Page</span>
            </a>
            <a href="{{ route('admin-dashboard') }}" class="nav-link {{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">
                <img src="{{ asset('adminassets/img/icon/Dashboard.png') }}" alt="Smart Mobility">
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin-kamera') }}" class="nav-link {{ request()->routeIs('admin-kamera') ? 'active' : '' }}">
                <img src="{{ asset('adminassets/img/icon/Kamera.png') }}" alt="Smart Mobility">
                <span>Kamera Page</span>
            </a>
            <a href="{{ route('admin-traffic-flow') }}" class="nav-link {{ request()->routeIs('admin-traffic-flow') ? 'active' : '' }}">
                <img src="{{ asset('adminassets/img/icon/Traffic Flow.png') }}" alt="Smart Mobility">
                <span>Traffic Flow</span>
            </a>
            <a href="#" class="nav-link">
                <img src="{{ asset('adminassets/img/icon/Congestion.png') }}" alt="Smart Mobility">
                <span>Congestion</span>
            </a>
            <a href="{{ route('admin-intersection') }}" class="nav-link {{ request()->routeIs('admin-intersection') ? 'active' : '' }}">
                <img src="{{ asset('adminassets/img/icon/Intersection.png') }}" alt="Smart Mobility">
                <span>Intersection</span>
            </a>
            <a href="#" class="nav-link">
                <img src="{{ asset('adminassets/img/icon/travel Time.png') }}" alt="Smart Mobility">
                <span>Travel Time</span>
            </a>
        </div>
    </div>
</div>
