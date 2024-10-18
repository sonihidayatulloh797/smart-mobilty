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

            <center><h1>Detail Jumlah Kendaraan Yang Malintas Arah Utara</h1></center>

            <!-- Interval 15 Menit -->
            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="17" class="text-center">
                                <span style="font-size: 1.5rem">Interval 15 Menit</span> <br>
                                UTARA (kend/15 menit)
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="2" style="background-color: rgb(187, 185, 185)">Periode</th>
                            <th rowspan="2" style="background-color: rgb(187, 185, 185)">Waktu</th>
                            <th colspan="5" style="background-color: rgb(187, 185, 185)" class="text-center">Arah : Kiri</th>
                            <th colspan="5" style="background-color: rgb(187, 185, 185)" class="text-center">Arah : Lurus</th>
                            <th colspan="5" style="background-color: rgb(187, 185, 185)" class="text-center">Arah : Kanan</th>
                        </tr>
                        <tr>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3" class="rotate-90">Pagi</td>
                            <td>06:00 - 06:15</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>13</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>15</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>06:15 - 06:30</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td>10</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>06:30 - 06:45</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                            <td>19</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>20</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="rotate-90">Siang</td>
                            <td>11:45 - 12:00</td>
                            <td>9</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>13</td>
                            <td>45</td>
                            <td>6</td>
                            <td>0</td>
                            <td>0</td>
                            <td>51</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>12:00 - 12:15</td>
                            <td>18</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>23</td>
                            <td>35</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>36</td>
                            <td>11</td>
                            <td>8</td>
                            <td>0</td>
                            <td>0</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>12:15 - 12:30</td>
                            <td>4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>7</td>
                            <td>31</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>32</td>
                            <td>8</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="rotate-90">Sore</td>
                            <td>17:00 - 17:15</td>
                            <td>4</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>8</td>
                            <td>18</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>19</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>17:15 - 17:30</td>
                            <td>8</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                            <td>33</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>36</td>
                            <td>19</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>17:30 - 17:45</td>
                            <td>8</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>10</td>
                            <td>15</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>17</td>
                            <td>11</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>12</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End -->

            <!-- Interval 1 Jam -->
            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="17" class="text-center">
                                <span style="font-size: 1.5rem">Interval 1 Jam</span> <br>
                                UTARA (kend/menit)
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: rgb(187, 185, 185)" rowspan="2">Periode</th>
                            <th style="background-color: rgb(187, 185, 185)" rowspan="2">Waktu</th>
                            <th style="background-color: rgb(187, 185, 185)" colspan="5">Arah : Kiri</th>
                            <th style="background-color: rgb(187, 185, 185)" colspan="5">Arah : Lurus</th>
                            <th style="background-color: rgb(187, 185, 185)" colspan="5">Arah : Kanan</th>
                        </tr>
                        <tr>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td rowspan="3" class="rotate-90">Pagi</td>
                            <td>06:00 - 06:15</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>13</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>15</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>06:15 - 06:30</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td>10</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>06:30 - 06:45</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                            <td>19</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>20</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="rotate-90">Siang</td>
                            <td>11:45 - 12:00</td>
                            <td>9</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>13</td>
                            <td>45</td>
                            <td>6</td>
                            <td>0</td>
                            <td>0</td>
                            <td>51</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>12:00 - 12:15</td>
                            <td>18</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>23</td>
                            <td>35</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>36</td>
                            <td>11</td>
                            <td>8</td>
                            <td>0</td>
                            <td>0</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>12:15 - 12:30</td>
                            <td>4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>7</td>
                            <td>31</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>32</td>
                            <td>8</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="rotate-90">Sore</td>
                            <td>17:00 - 17:15</td>
                            <td>4</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>8</td>
                            <td>18</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>19</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>17:15 - 17:30</td>
                            <td>8</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                            <td>33</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>36</td>
                            <td>19</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>17:30 - 17:45</td>
                            <td>8</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>10</td>
                            <td>15</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>17</td>
                            <td>11</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>12</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Interval 1 Jam -->

            <center><h1>Detail Jumlah Kendaraan Dengan Pembobotan (EMP)</h1></center>

            <!-- Interval 1 Jam -->
            <div class="card-table mb-5 rounded-3 d-flex justify-content-between align-items-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="18" class="text-center">
                                <span style="font-size: 1.5rem">UTARA (smp/jam)</span>
                            </th>
                        </tr>
                        <tr>
                            <th style="background-color: rgb(187, 185, 185)" rowspan="2">Periode</th>
                            <th style="background-color: rgb(187, 185, 185)" rowspan="2">Waktu</th>
                            <th style="background-color: rgb(187, 185, 185)" colspan="5">Arah : Kiri</th>
                            <th style="background-color: rgb(187, 185, 185)" colspan="5">Arah : Lurus</th>
                            <th style="background-color: rgb(187, 185, 185)" colspan="5">Arah : Kanan</th>
                            <th style="background-color: rgb(187, 185, 185)" rowspan="2">Total</th>
                        </tr>
                        <tr>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                            <th style="background-color: rgb(187, 185, 185)">MC</th>
                            <th style="background-color: rgb(187, 185, 185)">LV</th>
                            <th style="background-color: rgb(187, 185, 185)">HV</th>
                            <th style="background-color: rgb(187, 185, 185)">UM</th>
                            <th style="background-color: rgb(187, 185, 185)">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3" class="rotate-90">Pagi</td>
                            <td>06:00 - 06:15</td>
                            <td>1</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>13</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>15</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>06:15 - 06:30</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td>10</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>06:30 - 06:45</td>
                            <td>4</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>5</td>
                            <td>19</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>20</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="rotate-90">Siang</td>
                            <td>11:45 - 12:00</td>
                            <td>9</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>13</td>
                            <td>45</td>
                            <td>6</td>
                            <td>0</td>
                            <td>0</td>
                            <td>51</td>
                            <td>9</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12:00 - 12:15</td>
                            <td>18</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>23</td>
                            <td>35</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>36</td>
                            <td>11</td>
                            <td>8</td>
                            <td>0</td>
                            <td>0</td>
                            <td>19</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12:15 - 12:30</td>
                            <td>4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>7</td>
                            <td>31</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>32</td>
                            <td>8</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="rotate-90">Sore</td>
                            <td>17:00 - 17:15</td>
                            <td>4</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>8</td>
                            <td>18</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>19</td>
                            <td>3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>4</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>17:15 - 17:30</td>
                            <td>8</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>9</td>
                            <td>33</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>36</td>
                            <td>19</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>21</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>17:30 - 17:45</td>
                            <td>8</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>10</td>
                            <td>15</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>17</td>
                            <td>11</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>12</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
    <!-- End Kondisi Lapangan -->

    <a href="{{ route('analisis-kinerja-simpang3') }}" class="btn btn-primary">Detail</a>
</main>
