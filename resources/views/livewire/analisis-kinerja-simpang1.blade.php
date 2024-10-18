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


    <!-- Card Analisis Form SA I -->
    <div class="titleAnalisisKinerjaSimpang">
        <h1>Analisis Form SA I</h1>
    </div>
    <!-- End Card Analisis Form SA I-->


    <!-- Kondisi Lapangan -->
    <div class="row">
        <div class="col-8 col-md-8">
            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                <table class="table table-bordered p-2 border-dark">
                    <tr>
                        <td colspan="9">
                            <span style="font-size: 15px; font-weight: 900">Sketsa Fase APILL</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="7">
                            <img src="{{ asset('assets/img/Fase/Fase 1.png') }}" style="width:100%; margin-top: 50px" alt="Thumbnail 2">
                        </td>
                        <td colspan="2" rowspan="7">
                            <img src="{{ asset('assets/img/Fase/Fase 2.png') }}" style="width:100%; margin-top: 50px" alt="Thumbnail 2">
                        </td>
                        <td colspan="2" rowspan="7">
                            <img src="{{ asset('assets/img/Fase/Fase 3.png') }}" style="width:100%; margin-top: 50px" alt="Thumbnail 2">
                        </td>
                        <td colspan="2" rowspan="7">
                            <img src="{{ asset('assets/img/Fase/Fase 4.png') }}" style="width:100%; margin-top: 50px" alt="Thumbnail 2">
                        </td>
                    </tr>
                    <tr>
                        <td width="120" class="bg-secondary"></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 10px"><center>Waktu Siklus</center></b></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 10px"><center>S = ... Detik</center></b></td>
                    </tr>
                    <tr>
                        <td width="120" class="bg-secondary"></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 10px"><center>Waktu Hilang Hijau</center></b></td>
                    </tr>
                    <tr>
                        <td><b style="font-size: 10px"><center>WHH = 3WAH = detik</center></b></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td width="120" class="bg-secondary"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 10px">WH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WH = Waktu Hijau</td>
                    </tr>
                    <tr>
                        <td style="font-size: 10px">WAH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WAH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WAH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WAH=</td>
                        <td style="font-size: 10px"></td>
                        <td style="font-size: 10px">WAH = Waktu Antar Hijau</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-4">
            <img src="{{ asset('assets/img/Fase/Jalan.png') }}" width="280" alt="Jalan">
        </div>

        <div class="col-12 col-md-12">
            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                <table class="table table-bordered p-2 border-dark">
                    <tr>
                        <td colspan="11"><b style="font-size: 10px">Kondisi Lapangan</b></td>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Kode Pendekat</b><br><br>
                                <span style="font-size: 8px">U.S.T.B</span>
                            </center>
                        </td>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Tipe Lingkungan Jalan</b><br><br>
                                <span style="font-size: 8px">KIM, KOM, AT</span>
                            </center>
                        </td>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Kelas Hambatan Samping</b><br><br>
                                <span style="font-size: 8px">T (Tinggi), R (Rendah)</span>
                            </center>
                        </td>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Median</b><br><br>
                                <span style="font-size: 8px">Y (ada) atau T (tidak)</span>
                            </center>
                        </td>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Kelandaian Pendekat + (nanjak) atau - (turun)</b><br><br>
                                <span style="font-size: 8px">%</span>
                            </center>
                        </td>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Bkijt</b><br><br>
                                <span style="font-size: 8px">Y (ada) atau T (tidak)</span>
                            </center>
                        </td>
                        <td rowspan="2">
                            <center>
                                <b style="font-size: 8px">Jarak Ke Kendaraan Parkir Pertama</b><br><br>
                                <span style="font-size: 8px">m</span>
                            </center>
                        </td>
                        <td colspan="4">
                            <center>
                                <b style="font-size: 8px">Lebar Pendekat (m)</b>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                <b style="font-size: 8px">Pada Awal Lajur</b><br>
                                <b><span style="font-size: 8px">L</span></b><br>
                                <span style="font-size: 8px">m</span>
                            </center>
                        </td>
                        <td>
                            <center>
                                <b style="font-size: 8px">Pada Garis Henti</b><br>
                                <b><span style="font-size: 8px">Lm</span></b><br>
                                <span style="font-size: 8px">m</span>
                            </center>
                        </td>
                        <td>
                            <center>
                                <b style="font-size: 8px">Pada Lajur Belok Kiri</b><br>
                                <b><span style="font-size: 8px">Lbkjt</span></b><br>
                                <span style="font-size: 8px">m</span>
                            </center>
                        </td>
                        <td>
                            <center>
                                <b style="font-size: 8px">Pada Lajur Keluar</b><br>
                                <b><span style="font-size: 8px">Lk</span></b><br>
                                <span style="font-size: 8px">m</span>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <a href="{{ route('analisis-kinerja-simpang2') }}" class="btn btn-primary">Detail</a>
    </div>
    <!-- End Kondisi Lapangan -->

</main>
