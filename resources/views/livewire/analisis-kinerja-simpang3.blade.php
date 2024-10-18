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

    <!-- Card Header Biodata -->
    <div class="col-12 col-md-12">
        <div class="card-header mb-5 rounded-3 d-flex justify-content-between align-items-center">
            <table class="table table-bordered p-2 border-dark">
                <tr>
                    <td>Tanggal: 24 Januari 2012</td>
                    <td>Ditangani Oleh</td>
                </tr>
                <tr>
                    <td colspan="2">Kota: Jakarta</td>
                </tr>
                <tr>
                    <td colspan="2">Simpang: Jalan Iskandarsyah - Jalan Wijaya</td>
                </tr>
                <tr>
                    <td colspan="2">Ukuran Kota:</td>
                </tr>
                <tr>
                    <td colspan="2">Perihal: Pengaturan simpang empat fase hijau awal</td>
                </tr>
                <tr>
                    <td colspan="2">Periode: Jam puncak sore hari kerja</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- End Card Header Biodata -->

    <!-- Kondisi Lapangan -->
    <div class="row">
        <div class="col-10 col-md-10 justify-center">

            <h1>Analisis Form SA III</h1>

            <!-- Interval 15 Menit -->
            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th rowspan="2" class="text-center align-middle" style="background-color: rgb(187, 185, 185)">Kode Pendekat</th>
                            <th rowspan="2" class="text-center align-middle" style="background-color: rgb(187, 185, 185)">Jarak (m)</th>
                            <th colspan="3" class="text-center align-middle" style="background-color: rgb(187, 185, 185)">Kecepatan (m/detik)</th>
                            <th rowspan="2" class="text-center align-middle" style="background-color: rgb(187, 185, 185)">Waktu Tempuh (detik)</th>
                            <th rowspan="2" class="text-center align-middle" style="background-color: rgb(187, 185, 185)">W<sub>MS</sub> (detik)</th>
                        </tr>
                        <tr>
                            <th class="text-center" style="background-color: rgb(187, 185, 185)">Berangkat V<sub>KBR</sub></th>
                            <th class="text-center" style="background-color: rgb(187, 185, 185)">Datang V<sub>KDT</sub></th>
                            <th class="text-center" style="background-color: rgb(187, 185, 185)">Pejalan Kaki V<sub>PK</sub></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2" class="text-center align-middle">S</td>
                            <td>Jarak berangkat, L<sub>KBR</sub> + P<sub>KBR</sub> = 20,5</td>
                            <td class="text-center">10</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center">2,05</td>
                            <td class="text-center">0,45</td>
                        </tr>
                        <tr>
                            <td>Jarak datang, L<sub>KDT</sub> = 16</td>
                            <td class="text-center">-</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center">1,6</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="text-center align-middle">U</td>
                            <td>Jarak berangkat, L<sub>KBR</sub> + P<sub>KBR</sub> = 21,2</td>
                            <td class="text-center">10</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center">2,12</td>
                            <td class="text-center">0,57</td>
                        </tr>
                        <tr>
                            <td>Jarak datang, L<sub>KDT</sub> = 15,5</td>
                            <td class="text-center">-</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center">1,55</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="text-center align-middle">B</td>
                            <td>Jarak berangkat, L<sub>KBR</sub> + P<sub>KBR</sub> = 31,8</td>
                            <td class="text-center">10</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center">3,18</td>
                            <td class="text-center">2,06</td>
                        </tr>
                        <tr>
                            <td>Jarak datang, L<sub>KDT</sub> = 11,2</td>
                            <td class="text-center">-</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center">1,12</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">T (dan B)</td>
                            <td>Jarak berangkat, L<sub>KBR</sub> + P<sub>KBR</sub></td>
                            <td class="text-center">10</td>
                            <td class="text-center">10</td>
                            <td class="text-center">-</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                    <!-- Catatan -->
                    {{-- <tfoot>
                        <tr>
                            <td colspan="2">
                                <h5>Catatan:</h5>
                                <ul>
                                  <li>Dari fase 3 ke 4 tidak memerlukan W<sub>MS</sub> karena arus dari barat tetap berjalan.</li>
                                  <li>Penentuan W<sub>MS</sub>:</li>
                                  <ul>
                                    <li>Fase 1 ➡ Fase 2: 1 detik</li>
                                    <li>Fase 2 ➡ Fase 3: 3 detik</li>
                                    <li>Fase 3 ➡ Fase 4: 1 detik</li>
                                  </ul>
                                  <li>W<sub>K</sub> (Waktu Kritis) semua fase (3 detik per fase): 9 detik</li>
                                  <li>W<sub>H</sub> (Waktu Hijau) = Σ(W<sub>MS</sub> + W<sub>K</sub>) semua fase: 14 detik/siklus</li>
                                </ul>
                            </td>
                        </tr>
                    </tfoot> --}}
                    <!-- End Catatan -->
                </table>
            </div>
            <!-- End -->

        </div>
    </div>
    <!-- End Kondisi Lapangan -->

    <a href="{{ route('analisis-kinerja-simpang4') }}" class="btn btn-primary">Detail</a>
</main>
