<div class="container mt-4">
    <!-- Card Header Biodata -->
    <div class="col-6 col-md-6">
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

    <div class="row">
        <div class="col-12">
            <div class="card" style="border: 1px solid #B20000">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <!-- Kondisi Lapangan -->
                    <div class="row">
                        <div class="col-8 col-md-8">
                            <div class="titleAnalisisKinerjaSimpang">
                                <h1>Analisis Form SA I</h1>
                            </div>
                            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                                <table class="table table-bordered p-2 border-dark text-center">
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
                                </table>
                            </div>
                        </div>

                        <div class="col-12 col-md-12">
                            <table class="table table-bordered" style="width: 100%">
                                <thead class="text-center align-middle"
                                    style="background: #002F34; color: white; border: 1px solid white">
                                    <tr>
                                        <th rowspan="2">Kode Pendekat<br>U,S,T,B</th>
                                        <th rowspan="2">Tipe Lingkungan jalan<br>KIM, KOM, AT</th>
                                        <th rowspan="2">Kelas Hambatan Samping<br>T (Tinggi) R (Rendah)</th>
                                        <th rowspan="2">Median<br>Y (ada) atau T (tidak)</th>
                                        <th rowspan="2"></th>
                                        <th rowspan="2"></th>
                                        <th rowspan="2">Jarak Ke Kendaraan Parkir Pertama<br>m</th>
                                    </tr>
                                    <tr>
                                        <th>Pada awal lajur<br>L<br>m</th>
                                        <th>Pada garis henti<br>LM<br>m</th>
                                        <th>Pada lajur belok kiri<br>LM/LJT<br>m</th>
                                        <th>Pada lajur keluar<br>Lk<br>m</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>U</td>
                                        <td>KOM</td>
                                        <td>R</td>
                                        <td>Y</td>
                                        <td>0</td>
                                        <td>T</td>
                                        <td>0</td>
                                        <td>11.5</td>
                                        <td>11.5</td>
                                        <td>11.5</td>
                                    </tr>
                                    <tr class="highlight">
                                        <td>S</td>
                                        <td>KM</td>
                                        <td>R</td>
                                        <td>Y</td>
                                        <td>0</td>
                                        <td>T</td>
                                        <td>0</td>
                                        <td>11.0</td>
                                        <td>11.0</td>
                                        <td>10.5</td>
                                    </tr>
                                    <tr>
                                        <td>T</td>
                                        <td>KM</td>
                                        <td>R</td>
                                        <td>Y</td>
                                        <td>0</td>
                                        <td>Y</td>
                                        <td>0</td>
                                        <td>8.5</td>
                                        <td>6.0</td>
                                        <td>25</td>
                                        <td>5.0</td>
                                    </tr>
                                    <tr class="highlight">
                                        <td>B</td>
                                        <td>KM</td>
                                        <td>R</td>
                                        <td>Y</td>
                                        <td>0</td>
                                        <td>T</td>
                                        <td>0</td>
                                        <td>7.0</td>
                                        <td>7.0</td>
                                        <td>5.0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-4 col-md-8">
                            <img src="{{ asset('assets/img/Fase/Jalan.png') }}" width="280" alt="Jalan">
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
                            <img src="{{ asset('adminassets/img/Fase/image 12.png') }}" alt="">
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
                                        <!-- Morning Period -->
                                        <tr>
                                            <th rowspan="5">Morning</th>
                                            <td class="highlight">06.00 - 07.00</td>
                                            <td>30</td>
                                            <td>319</td>
                                            <td>96</td>
                                            <td>428</td>
                                            <td>873</td>
                                        </tr>
                                        <tr>
                                            <td>06.15 - 07.15</td>
                                            <td>27</td>
                                            <td>335</td>
                                            <td>105</td>
                                            <td>402</td>
                                            <td>868</td>
                                        </tr>
                                        <tr>
                                            <td>06.30 - 07.30</td>
                                            <td>36</td>
                                            <td>396</td>
                                            <td>124</td>
                                            <td>412</td>
                                            <td>967</td>
                                        </tr>
                                        <tr>
                                            <td>06.45 - 07.45</td>
                                            <td>34</td>
                                            <td>430</td>
                                            <td>128</td>
                                            <td>393</td>
                                            <td>984</td>
                                        </tr>
                                        <tr>
                                            <td>07.00 - 08.00</td>
                                            <td>36</td>
                                            <td>439</td>
                                            <td>123</td>
                                            <td>396</td>
                                            <td>995</td>
                                        </tr>

                                        <!-- Day Period -->
                                        <tr>
                                            <th rowspan="5">Day</th>
                                            <td>11.00 - 12.00</td>
                                            <td>92</td>
                                            <td>654</td>
                                            <td>124</td>
                                            <td>678</td>
                                            <td>1547</td>
                                        </tr>
                                        <tr>
                                            <td>11.15 - 12.15</td>
                                            <td>98</td>
                                            <td>650</td>
                                            <td>130</td>
                                            <td>634</td>
                                            <td>1512</td>
                                        </tr>
                                        <tr>
                                            <td class="highlight">11.30 - 12.30</td>
                                            <td class="highlight">92</td>
                                            <td class="highlight">630</td>
                                            <td class="highlight">120</td>
                                            <td class="highlight">579</td>
                                            <td class="highlight">1420</td>
                                        </tr>
                                        <tr>
                                            <td>11.45 - 12.45</td>
                                            <td>83</td>
                                            <td>612</td>
                                            <td>123</td>
                                            <td>585</td>
                                            <td>1404</td>
                                        </tr>
                                        <tr>
                                            <td>12.00 - 13.00</td>
                                            <td>77</td>
                                            <td>689</td>
                                            <td>125</td>
                                            <td>639</td>
                                            <td>1530</td>
                                        </tr>

                                        <!-- Evening Period -->
                                        <tr>
                                            <th rowspan="5">Evening</th>
                                            <td>16.00 - 17.00</td>
                                            <td>54</td>
                                            <td>347</td>
                                            <td>60</td>
                                            <td>421</td>
                                            <td>881</td>
                                        </tr>
                                        <tr>
                                            <td>16.15 - 17.15</td>
                                            <td>57</td>
                                            <td>385</td>
                                            <td>78</td>
                                            <td>473</td>
                                            <td>993</td>
                                        </tr>
                                        <tr>
                                            <td>16.30 - 17.30</td>
                                            <td>75</td>
                                            <td>534</td>
                                            <td>108</td>
                                            <td>627</td>
                                            <td>1344</td>
                                        </tr>
                                        <tr>
                                            <td>16.45 - 17.45</td>
                                            <td>67</td>
                                            <td>559</td>
                                            <td>114</td>
                                            <td>605</td>
                                            <td>1345</td>
                                        </tr>
                                        <tr>
                                            <td>17.00 - 18.00</td>
                                            <td>52</td>
                                            <td>512</td>
                                            <td>99</td>
                                            <td>448</td>
                                            <td>1111</td>
                                        </tr>
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
                                        <thead class="text-center align-middle" style="background: #002F34; color: white; border: 1px solid white">
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
                                <img src="{{  asset('adminassets/img/object/Peak Traffic Flow Time.png') }}" class="mt-3" alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Lost Estimation.png') }}" class="mt-3" alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Co Polution.png') }}" class="mt-3" alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Vechile Queued.png') }}" class="mt-3" alt="Smart Mobility">
                                <img src="{{  asset('adminassets/img/object/Intersect.png') }}" class="mt-3" alt="Smart Mobility">
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
