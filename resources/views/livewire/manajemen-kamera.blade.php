<main id="main" class="main">
    <!-- Card Header -->
    <div class="col-12 col-md-12">
        <div class="card-header mb-5 rounded-3 d-flex justify-content-between align-items-center">
            <img src="{{ asset('assets/img/sccic.png') }}" width="250" alt="Logo">

            <!-- Menu Profile -->
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person-circle"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear-fill"></i>
                            Pengaturan
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-box-arrow-left"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Card Header -->

    <!-- Card Input -->
    <div class="col-12 col-md-12">
        <div class="card-i-manajemen-kamera mb-5 rounded-3 d-flex justify-content-between align-items-center p-4"
            style="background-color:#CA2F3D">
            <!-- Form dengan label dan input di samping -->
            <form class="d-flex align-items-center">
                <div class="d-flex align-items-center me-3 p-2">
                    <label for="input1" class="form-label text-white" style="width:200px">Input Link Baru :</label>
                    <input type="text" id="input1" class="form-control">
                </div>
                <div class="d-flex align-items-center me-3">
                    <label for="input2" class="form-label text-white" style="width:200px">Nama Simpang :</label>
                    <input type="text" id="input2" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Card Input -->

    <!-- Card CCTV -->
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-md-4 col-lg-2 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/Fase/Designer.png') }}" class="card-img-top" alt="Thumbnail 1">
                <div class="card-body">
                    <h5 class="card-title">Sedayu, DIY</h5>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-4 col-lg-2 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/Fase/Designer.png') }}" class="card-img-top" alt="Thumbnail 2">
                <div class="card-body">
                    <h5 class="card-title">Bonbin, BDG</h5>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-4 col-lg-2 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/Fase/Designer.png') }}" class="card-img-top" alt="Thumbnail 3">
                <div class="card-body">
                    <h5 class="card-title">Samirono, DIY</h5>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-12 col-md-4 col-lg-2 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/Fase/Designer.png') }}" class="card-img-top" alt="Thumbnail 4">
                <div class="card-body">
                    <h5 class="card-title">Kopo, BDG</h5>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-12 col-md-4 col-lg-2 mb-4">
            <div class="card">
                <img src="{{ asset('assets/img/Fase/Designer.png') }}" class="card-img-top" alt="Thumbnail 5">
                <div class="card-body">
                    <h5 class="card-title">Kopo, BDG</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card CCTV -->
</main>
