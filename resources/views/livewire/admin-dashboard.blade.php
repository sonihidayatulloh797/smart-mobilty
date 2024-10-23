<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    {{-- @if(!empty($data))
                        <ul>
                            @foreach ($data as $item)
                                <li>
                                    <strong>Uploaded:</strong> {{ $item['uploaded'] }}<br>
                                    <ul>
                                        <li>Bicycle: {{ $item['bicycle'] }}</li>
                                        <li>Car: {{ $item['car'] }}</li>
                                        <li>Motorcycle: {{ $item['motorcycle'] }}</li>
                                        <li>Bus: {{ $item['bus'] }}</li>
                                        <li>Train: {{ $item['train'] }}</li>
                                        <li>Truck: {{ $item['truck'] }}</li>
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Tidak ada data yang tersedia.</p>
                    @endif --}}

                    <!-- Reports -->
                    <div class="col-6">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Traffic Visualization</h5>

                                <!-- Line Chart -->
                                @if (!empty($data))
                                    <canvas id="myLineChart"></canvas>
                                @else
                                    <p>Tidak ada data</p>
                                @endif

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var ctx = document.getElementById('myLineChart').getContext('2d');
                                        var myLineChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: @json($labels),
                                                datasets: [
                                                    {
                                                        label: 'Bicycle',
                                                        data: @json($bicycleData),
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Car',
                                                        data: @json($carData),
                                                        borderColor: 'rgba(255, 99, 132, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Motorcycle',
                                                        data: @json($motorcycleData),
                                                        borderColor: 'rgba(54, 162, 235, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Bus',
                                                        data: @json($busData),
                                                        borderColor: 'rgba(255, 206, 86, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Train',
                                                        data: @json($trainData),
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Truck',
                                                        data: @json($truckData),
                                                        borderColor: 'rgba(153, 102, 255, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    }
                                                ]
                                            },
                                            options: {
                                                responsive: true,
                                                // scales: {
                                                //     y: {
                                                //         beginAtZero: true
                                                //     }
                                                // },
                                                plugins: {
                                                    legend: {
                                                        position: 'bottom'
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>

                                {{-- <canvas id="myChart"></canvas>
                                <script>
                                    const ctx = document.getElementById('myChart').getContext('2d');
                                    const myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Merah', 'Biru', 'Kuning', 'Hijau', 'Ungu', 'Biru Muda'],
                                            datasets: [{
                                                label: '# dari Suara',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script> --}}
                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->

                    <!-- Reports -->
                    <div class="col-6">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Congestion Heatmap</h5>

                                <canvas id="lineChart1"></canvas>

                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->

                    <!-- Reports -->
                    <div class="col-6">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Intersection Performance Metrics</h5>

                                @if (!empty($data))
                                    <canvas id="intersectionChart"></canvas>
                                @else
                                    <p>Tidak ada data</p>
                                @endif

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var ctx = document.getElementById('intersectionChart').getContext('2d');
                                        var myLineChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: @json($labels),
                                                datasets: [
                                                    {
                                                        label: 'Bicycle',
                                                        data: @json($bicycleData),
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Car',
                                                        data: @json($carData),
                                                        borderColor: 'rgba(255, 99, 132, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Motorcycle',
                                                        data: @json($motorcycleData),
                                                        borderColor: 'rgba(54, 162, 235, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Bus',
                                                        data: @json($busData),
                                                        borderColor: 'rgba(255, 206, 86, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Train',
                                                        data: @json($trainData),
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Truck',
                                                        data: @json($truckData),
                                                        borderColor: 'rgba(153, 102, 255, 1)',
                                                        borderWidth: 2,
                                                        fill: false,
                                                    }
                                                ]
                                            },
                                            options: {
                                                responsive: true,
                                                // scales: {
                                                //     y: {
                                                //         beginAtZero: true
                                                //     }
                                                // },
                                                plugins: {
                                                    legend: {
                                                        position: 'bottom'
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->

                    <!-- Reports -->
                    <div class="col-6">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Travel Time Analysis</h5>

                                <canvas id="traveltimeChart"></canvas>
                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->
                </div>
    </section>

</main>

<script>
    // Data dan konfigurasi untuk Bar Chart 1
    const barChart1Ctx = document.getElementById('barChart1').getContext('2d');
    const barChart1 = new Chart(barChart1Ctx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
          label: 'Sales 2024',
          data: [50, 40, 60, 70, 90],
          backgroundColor: 'rgba(54, 162, 235, 0.5)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Data dan konfigurasi untuk Bar Chart 2
    const traveltimeChart2Ctx = document.getElementById('traveltimeChart').getContext('2d');
    const traveltimeChart = new Chart(traveltimeChart2Ctx, {
      type: 'bar',
      data: {
        labels: ['June', 'July', 'August', 'September', 'October'],
        datasets: [{
          label: 'Revenue 2024',
          data: [30, 50, 80, 60, 100],
          backgroundColor: 'rgba(255, 99, 132, 0.5)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Data dan konfigurasi untuk Line Chart 1
    const lineChart1Ctx = document.getElementById('lineChart1').getContext('2d');
    const lineChart1 = new Chart(lineChart1Ctx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
          label: 'Growth 2024',
          data: [20, 30, 50, 40, 60],
          borderColor: 'rgba(75, 192, 192, 1)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          fill: true,
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Data dan konfigurasi untuk Line Chart 2
    const lineChart2Ctx = document.getElementById('lineChart2').getContext('2d');
    const lineChart2 = new Chart(lineChart2Ctx, {
      type: 'line',
      data: {
        labels: ['June', 'July', 'August', 'September', 'October'],
        datasets: [{
          label: 'Engagement 2024',
          data: [70, 60, 80, 90, 100],
          borderColor: 'rgba(153, 102, 255, 1)',
          backgroundColor: 'rgba(153, 102, 255, 0.2)',
          fill: true,
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
