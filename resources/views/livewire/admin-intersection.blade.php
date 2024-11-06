<div class="container mt-4">
    <div class="pagetitle">
        <h1>Intersection</h1>
    </div>

    <!-- Card Header Biodata -->
    <div class="col-6 col-md-6 mt-5">
        <div class="card-header mb-5 rounded-3 d-flex justify-content-between align-items-center">
            <form wire:submit.prevent="submit">
                <table class="table table-bordered p-2 border-dark">
                    <tr>
                        <td>
                            <input type="date" class="form-control" wire:model="tanggal" placeholder="Tanggal" required>
                        </td>
                        <td>
                            <input type="text" class="form-control" wire:model="ditanganiOleh" placeholder="Ditangani Oleh" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" class="form-control" wire:model="kota" placeholder="Kota" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" class="form-control" wire:model="simpang" placeholder="Simpang" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" class="form-control" wire:model="ukuranKota" placeholder="Ukuran Kota">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" class="form-control" wire:model="perihal" placeholder="Perihal" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" class="form-control" wire:model="periode" placeholder="Periode" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- Tabel Data Entries -->
        <div class="mt-5">
            <table class="table table-bordered p-2 border-dark">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Ditangani Oleh</th>
                        <th>Kota</th>
                        <th>Simpang</th>
                        <th>Ukuran Kota</th>
                        <th>Perihal</th>
                        <th>Periode</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataEntries as $entry)
                        <tr>
                            <td>{{ $entry['tanggal'] }}</td>
                            <td>{{ $entry['ditanganiOleh'] }}</td>
                            <td>{{ $entry['kota'] }}</td>
                            <td>{{ $entry['simpang'] }}</td>
                            <td>{{ $entry['ukuranKota'] }}</td>
                            <td>{{ $entry['perihal'] }}</td>
                            <td>{{ $entry['periode'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Card Header Biodata -->


    <div class="row">
        <div class="col-12">
            <div class="card mt-5" style="border: 1px solid #B20000">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA I</h1>
                            </div>
                            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                                <table class="table table-bordered w-100">
                                    <tr>
                                        <td colspan="2" rowspan="7" width="117">
                                            <img src="{{ asset('adminassets/img/Fase/Fase 1.png') }}" alt="smart mobility" width="120" style="margin-top: 50%">
                                        </td>
                                        <td colspan="2" rowspan="7" width="107">
                                            <img src="{{ asset('adminassets/img/Fase/Fase 2.png') }}" alt="smart mobility" width="120" style="margin-top: 50%">
                                        </td>
                                        <td colspan="2" rowspan="7" width="103">
                                            <img src="{{ asset('adminassets/img/Fase/Fase 3.png') }}" alt="smart mobility" width="120" style="margin-top: 50%">
                                        </td>
                                        <td colspan="2" rowspan="7" width="112">
                                            <img src="{{ asset('adminassets/img/Fase/Fase 4.png') }}" alt="smart mobility" width="120" style="margin-top: 50%">
                                        </td>
                                        <td colspan="3" width="156" style="background-color: #002F34">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" width="156">
                                            <center><p><strong>Waktu Habis</strong></p></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" width="104">
                                            <p>s =</p>
                                        </td>
                                        <td width="52">
                                            <p>detik</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" width="156" style="background-color: #002F34">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" width="156">
                                            <center><p><strong>Waktu hilang hijau total</strong></p></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" width="104">
                                            <p>W<sub>HH</sub> = SW<sub>AH</sub> =</p>
                                        </td>
                                        <td width="52">
                                            <p>detik</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" width="156">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="59">
                                            <p>W<sub>H</sub>=</p>
                                        </td>
                                        <td width="59">
                                        </td>
                                        <td width="57">
                                            <p>W<sub>H</sub>=</p>
                                        </td>
                                        <td width="50">
                                        </td>
                                        <td width="59">
                                            <p>W<sub>H</sub>=</p>
                                        </td>
                                        <td width="45">
                                        </td>
                                        <td width="57">
                                            <p>W<sub>H</sub>=</p>
                                        </td>
                                        <td width="55">
                                        </td>
                                        <td colspan="3" rowspan="2" width="156">
                                            <p>W<sub>H</sub>= waktu hijau</p>
                                            <p>W<sub>AH</sub>= waktu antar hijau</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="59">
                                            <p>W<sub>AH</sub>=</p>
                                        </td>
                                        <td width="59">
                                        </td>
                                        <td width="57">
                                            <p>W<sub>AH</sub>=</p>
                                        </td>
                                        <td width="50">
                                        </td>
                                        <td width="59">
                                            <p>W<sub>AH</sub>=</p>
                                        </td>
                                        <td width="45">
                                        </td>
                                        <td width="57">
                                            <p>W<sub>AH</sub>=</p>
                                        </td>
                                        <td width="55">
                                        </td>
                                    </tr>
                                </table>


                                {{-- <table class="table table-bordered p-2 border-dark text-center">
                                    <thead>
                                        <tr style="background: #002F34; color: white; border: 1px solid white">
                                            <th colspan="4" class="text-center align-middle">Fase</th>
                                            <th rowspan="2" class="text-center align-middle">Perhitungan Waktu</th>
                                        </tr>
                                        <tr style="background: #002F34; color: white; border: 1px solid white">
                                            <th class="text-center align-middle">Fase 1</th>
                                            <th class="text-center align-middle">Fase 2</th>
                                            <th class="text-center align-middle">Fase 3</th>
                                            <th class="text-center align-middle">Fase 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Images or Icons for Each Phase -->
                                            <td><img src="{{ asset('assets/img/Fase/Fase 1.png') }}" alt="Fase 1"
                                                    style="width: 60px;"></td>
                                            <td><img src="{{ asset('assets/img/Fase/Fase 2.png') }}" alt="Fase 2"
                                                    style="width: 60px;"></td>
                                            <td><img src="{{ asset('assets/img/Fase/Fase 3.png') }}" alt="Fase 3"
                                                    style="width: 60px;"></td>
                                            <td><img src="{{ asset('assets/img/Fase/Fase 4.png') }}"
                                                    style="width: 60px;"></td>
                                            <td rowspan="3" class="align-middle">
                                                <strong>Waktu Habis</strong><br>
                                                s = ................... detik<br><br>
                                                <strong>Waktu Hilang Hijau Total</strong><br>
                                                WH = EWAH = ................... detik<br><br>
                                                WH = waktu hijau<br>
                                                WAH = waktu antar hijau
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- WH for Each Phase -->
                                            <td>WH =</td>
                                            <td>WH =</td>
                                            <td>WH =</td>
                                            <td>WH =</td>
                                        </tr>
                                        <tr>
                                            <!-- WAH for Each Phase -->
                                            <td>WAH =</td>
                                            <td>WAH =</td>
                                            <td>WAH =</td>
                                            <td>WAH =</td>
                                        </tr>
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>

                        <div class="col-8 col-md-8">
                            <div class="table-responsive">
                                <table class="table table-bordered w-100">
                                    <tbody>
                                        <tr>
                                            <td colspan="11" width="595">
                                                <p><strong>Kondisi Lapangan</strong></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" width="59" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>Kode</strong> <strong>pendekat</strong></p>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p>U, S, T, B</p>
                                            </td>
                                            <td rowspan="2" width="59" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>Tipe</strong> <strong>lingkungan</strong> <strong>jalan</strong></p>
                                                <p>&nbsp;</p>
                                                <p>KIM, KOM, AT</p>
                                            </td>
                                            <td rowspan="2" width="57" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>Kelas</strong> <strong>Hambatan</strong> <strong>samping</strong></p>
                                                <p>&nbsp;</p>
                                                <p>T (tinggi), R (rendah)</p>
                                            </td>
                                            <td rowspan="2" width="50" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>Median</strong></p>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p>Y (ada) atau</p>
                                                <p>T (tidak)</p>
                                            </td>
                                            <td rowspan="2" width="59" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>Kelandaian</strong> <strong>pendekat</strong></p>
                                                <p>+ (nanjak) atau - (turun)</p>
                                                <p>&nbsp;</p>
                                                <p>%</p>
                                            </td>
                                            <td rowspan="2" width="45" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>B</strong><strong>KiJT</strong></p>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p>Y (ada) atau</p>
                                                <p>T (tidak)</p>
                                            </td>
                                            <td rowspan="2" width="57" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p><strong>Jarak ke kendaraan parkir pertama</strong></p>
                                                <p>m</p>
                                            </td>
                                            <td colspan="4" width="211">
                                                <center><p><strong>Lebar pendekat (m)</strong></p></center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="55" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p>pada awal lajur</p>
                                                <p><strong>L</strong></p>
                                                <p>m</p>
                                            </td>
                                            <td width="53" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p>pada garis henti</p>
                                                <p><strong>L<sub>M</sub></strong></p>
                                                <p>m</p>
                                            </td>
                                            <td width="51" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p>pada lajur belok kiri</p>
                                                <p><strong>L</strong><strong>BKiJT</strong></p>
                                                <p>m</p>
                                            </td>
                                            <td width="52" style="background-color: #003c3c; color: white; text-align: center;">
                                                <p>pada lajur keluar</p>
                                                <p><strong>L<sub>K</sub></strong></p>
                                                <p>m</p>
                                            </td>
                                        </tr>
                                        @foreach ($dataKondisiLapangan as $kondisi)
                                        <tr>
                                            <td width="59"><p>{{ $kondisi->kode_pendekat }}</p></td>
                                            <td width="59"><p>{{ $kondisi->tipe_lingkungan }}</p></td>
                                            <td width="57"><p>{{ $kondisi->kelas_hambatan }}</p></td>
                                            <td width="50"><p>{{ $kondisi->median }}</p></td>
                                            <td width="59"><p>{{ $kondisi->kelandaian_pendekat }}</p></td>
                                            <td width="45"><p>{{ $kondisi->b_kij }}</p></td>
                                            <td width="57"><p>{{ $kondisi->jarak_kendaraan_parkir }}</p></td>
                                            <td width="55"><p>{{ $kondisi->lebar_pendekat_awal_lajur }}</p></td>
                                            <td width="53"><p>{{ $kondisi->lebar_pendekat_garis_henti }}</p></td>
                                            <td width="51"><p>{{ $kondisi->lebar_pendekat_lajur_belok_kiri }}</p></td>
                                            <td width="52"><p>{{ $kondisi->lebar_pendekat_lajur_keluar }}</p></td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="11" width="595">
                                                <p>&nbsp;</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="col-4 col-md-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('adminassets/img/Fase/jalan1.png') }}" alt="smart mobility street" style="width: 100%;">
                        </div>

                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA II</h1>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div id="main-section1" class="main-section">
                                <div class="nested-row">
                                    <div id="nested-section1" class="nested-section"></div>
                                    <div id="nested-section2" class="nested-section">
                                        <table class="table-street table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>UM</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>HV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>LV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>MC</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>Total</b></center>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="nested-section3" class="nested-section"></div>
                                </div>
                                <div class="nested-row">
                                    <div id="nested-section4" class="nested-section">
                                        <table class="table-street table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>UM</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>HV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>LV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>MC</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>Total</b></center>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="nested-section5" class="nested-section">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                    </div>
                                    <div id="nested-section6" class="nested-section">
                                        <table class="table-street table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>UM</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>HV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>LV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>MC</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>Total</b></center>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="nested-row">
                                    <div id="nested-section7" class="nested-section"></div>
                                    <div id="nested-section8" class="nested-section">
                                        <table class="table-street table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>UM</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>HV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>LV</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>MC</b></center>
                                                    </td>
                                                    <td style="background-color: rgb(187, 185, 185)">
                                                        <center><b>Total</b></center>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center>123</center>
                                                    </td>
                                                    <td>
                                                        <center>435</center>
                                                    </td>
                                                    <td>
                                                        <center>143</center>
                                                    </td>
                                                    <td>
                                                        <center>345</center>
                                                    </td>
                                                    <td style="background-color: yellow">
                                                        <center>345</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="nested-section9" class="nested-section"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                                <table class="table table-bordered text-center align-middle">
                                    <thead style="background-color: #003c3c; color: white" class="align-middle">
                                        <tr>
                                            <th rowspan="2">Periode</th>
                                            <th rowspan="2">Waktu</th>
                                            <th colspan="5">Rekapitulasi (smp/jam)</th>
                                        </tr>
                                        <tr>
                                            <th>North</th>
                                            <th>East</th>
                                            <th>South</th>
                                            <th>West</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataSAIIRecapitulation as $recapitulation)
                                            <tr>
                                                <td>{{ $recapitulation->periode }}</td>
                                                <td>{{ $recapitulation->waktu }}</td>
                                                <td>{{ $recapitulation->north }}</td>
                                                <td>{{ $recapitulation->east }}</td>
                                                <td>{{ $recapitulation->south }}</td>
                                                <td>{{ $recapitulation->west }}</td>
                                                <td>{{ $recapitulation->total }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA III</h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #002F34; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA IV</h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #002F34; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #002F34; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA IV</h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #002F34; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #002F34; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA V</h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #05abc1; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-table mb-5 rounded-3">
                                <table class="table table-bordered table-striped w-100">
                                    <thead style="background: #05abc1; color: white; border: 1px solid white">
                                        <tr>
                                            <th height="50"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rows -->
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <!-- Add additional rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Konklusi</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="card-table mb-5 rounded-3">
                                    <table class="table table-bordered table-striped w-100">
                                        <thead class="text-center align-middle"
                                            style="background: #002F34; color: white; border: 1px solid white">
                                            <tr>
                                                <th height="50"></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Rows -->
                                            <tr>
                                                <td height="50"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td height="50"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td height="50"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td height="50"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td height="50"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <!-- Add additional rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{  asset('adminassets/img/object/Peak Traffic Flow Time.png') }}"
                                    class="mt-3" alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Lost Estimation.png') }}" class="mt-3"
                                    alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Co Polution.png') }}" class="mt-3"
                                    alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Vechile Queued.png') }}" class="mt-3"
                                    alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Intersect.png') }}" class="mt-3"
                                    alt="Smart Mobility">
                            </div>
                        </div>
                    </div>
                    <!-- End Kondisi Lapangan -->
                </div>
            </div>
        </div>

        <a href="{{ route('analisis-kinerja-simpang2-detail') }}" class="btn btn-primary mt-3">Detail</a>

    </div>
</div>
