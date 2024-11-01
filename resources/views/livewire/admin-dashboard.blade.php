<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        {{-- <!-- <nav> -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        <!-- </nav> --> --}}
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

                            <div class="card-body">
                                <center><h5 class="card-title">Traffic Visualization</h5></center>

                                <!-- Line Chart -->
                                @if (!empty($data))
                                    <canvas id="myLineChart"></canvas>
                                @else
                                    <p>Tidak ada data</p>
                                @endif

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var formattedLabels = @json($labels).map(label => label.split('T')[0]);
                                        var ctx = document.getElementById('myLineChart').getContext('2d');
                                        var myLineChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: formattedLabels,
                                                datasets: [{
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
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->

                    <!-- Reports -->
                    <div class="col-6">
                        <div class="card">

                            <div class="card-body">
                                <center><h5 class="card-title">Congestion Heatmap</h5></center>

                                <canvas id="heatmapChart"></canvas>

                                <script>
                                    const heatmapCtx = document.getElementById('heatmapChart').getContext('2d');
                                    const heatmapData = [];

                                    // Generate data for 6 rows and 24 columns
                                    for (let y = 0; y < 6; y++) {
                                        for (let x = 0; x < 24; x++) {
                                            const value = Math.floor(Math.random() *
                                            100); // Example random congestion values
                                            heatmapData.push({
                                                x,
                                                y,
                                                v: value
                                            });
                                        }
                                    }

                                    const heatmapChart = new Chart(heatmapCtx, {
                                        type: 'matrix',
                                        data: {
                                            datasets: [{
                                                label: 'Congestion Heatmap',
                                                data: heatmapData,
                                                backgroundColor(ctx) {
                                                    const value = ctx.raw.v;
                                                    const alpha = value / 100;
                                                    return `rgba(255, 0, 0, ${alpha})`;
                                                },
                                                borderColor: 'rgba(255, 255, 255, 0.5)',
                                                borderWidth: 1,
                                                width: ({
                                                    chart
                                                }) => (chart.chartArea || {}).width / 24 - 1,
                                                height: ({
                                                    chart
                                                }) => (chart.chartArea || {}).height / 6 - 1
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            scales: {
                                                x: {
                                                    type: 'linear',
                                                    min: -0.5,
                                                    max: 23.5,
                                                    ticks: {
                                                        stepSize: 1,
                                                        callback: (value) => (value + 1).toString().padStart(2,
                                                            '0')
                                                    }
                                                },
                                                y: {
                                                    type: 'linear',
                                                    min: -0.5,
                                                    max: 5.5,
                                                    ticks: {
                                                        stepSize: 1,
                                                        callback: (value) => (6 - value).toString()
                                                    }
                                                }
                                            }
                                        }
                                    });

                                </script>

                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->

                    <!-- Reports -->
                    <div class="col-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <center><h5 class="card-title">Intersection Performance Metrics</h5></center>

                                <canvas id="lineChartIntersection" width="400" height="200"></canvas>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const ctx = document.getElementById('lineChartIntersection').getContext('2d');
                                        const labels = @json($labels).map(label => label.split('T')[0]);
                                        const bicycleData = @json($bicycleData);
                                        const carData = @json($carData);
                                        const motorcycleData = @json($motorcycleData);
                                        const busData = @json($busData);
                                        const trainData = @json($trainData);
                                        const truckData = @json($truckData);

                                        // Cek jika ada data yang valid
                                        if (labels.length === 0 ||
                                            (bicycleData.length === 0 && carData.length === 0 &&
                                            motorcycleData.length === 0 && busData.length === 0 &&
                                            trainData.length === 0 && truckData.length === 0)) {
                                            console.error('No data available for chart');
                                            return; // Keluar jika tidak ada data
                                        }

                                        const myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: labels,
                                                datasets: [
                                                    {
                                                        label: 'Bicycle',
                                                        data: bicycleData,
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Car',
                                                        data: carData,
                                                        borderColor: 'rgba(255, 99, 132, 1)',
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Motorcycle',
                                                        data: motorcycleData,
                                                        borderColor: 'rgba(255, 206, 86, 1)',
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Bus',
                                                        data: busData,
                                                        borderColor: 'rgba(54, 162, 235, 1)',
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Train',
                                                        data: trainData,
                                                        borderColor: 'rgba(153, 102, 255, 1)',
                                                        fill: false,
                                                    },
                                                    {
                                                        label: 'Truck',
                                                        data: truckData,
                                                        borderColor: 'rgba(255, 159, 64, 1)',
                                                        fill: false,
                                                    },
                                                ],
                                            },
                                            options: {
                                                responsive: true,
                                                maintainAspectRatio: true,
                                                scales: {
                                                    y: {
                                                        beginAtZero: true,
                                                        suggestedMin: 0,
                                                        suggestedMax: Math.max(
                                                            ...bicycleData,
                                                            ...carData,
                                                            ...motorcycleData,
                                                            ...busData,
                                                            ...trainData,
                                                            ...truckData
                                                        ) + 10 // Menentukan batas maksimum
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
                    <div class="col-6 mt-3">
                        <div class="card">

                            <div class="card-body">
                                <center><h5 class="card-title">Travel Time Analysis</h5></center>

                                <canvas id="lineChartTimeTravel"></canvas>
                                <script>
                                    const lineChartTimeTravelCtx = document.getElementById('lineChartTimeTravel').getContext('2d');
                                    const lineChartTimeTravel = new Chart(lineChartTimeTravelCtx, {
                                        type: 'line',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May'], // Label bulan
                                            datasets: [
                                                {
                                                    label: 'Bicycle',
                                                    data: [20, 30, 40, 50, 60], // Data untuk Bicycle
                                                    borderColor: 'rgba(75, 192, 192, 1)',
                                                    borderWidth: 2,
                                                    fill: false,
                                                },
                                                {
                                                    label: 'Car',
                                                    data: [50, 40, 60, 70, 90], // Data untuk Car
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    borderWidth: 2,
                                                    fill: false,
                                                },
                                                {
                                                    label: 'Motorcycle',
                                                    data: [60, 70, 80, 90, 100], // Data untuk Motorcycle
                                                    borderColor: 'rgba(54, 162, 235, 1)',
                                                    borderWidth: 2,
                                                    fill: false,
                                                },
                                                {
                                                    label: 'Bus',
                                                    data: [30, 20, 10, 40, 50], // Data untuk Bus
                                                    borderColor: 'rgba(255, 206, 86, 1)',
                                                    borderWidth: 2,
                                                    fill: false,
                                                },
                                                {
                                                    label: 'Train',
                                                    data: [40, 60, 50, 70, 80], // Data untuk Train
                                                    borderColor: 'rgba(153, 102, 255, 1)',
                                                    borderWidth: 2,
                                                    fill: false,
                                                },
                                                {
                                                    label: 'Truck',
                                                    data: [70, 50, 60, 40, 30], // Data untuk Truck
                                                    borderColor: 'rgba(201, 203, 207, 1)',
                                                    borderWidth: 2,
                                                    fill: false,
                                                }
                                            ]
                                        },
                                        options: {
                                            responsive: true,
                                            plugins: {
                                                legend: {
                                                    position: 'bottom' // Mengatur posisi legend di bawah chart
                                                }
                                            },
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                    <!-- End Reports -->
                </div>
    </section>

</main>

<script>
    // Data dan konfigurasi untuk Bar Chart 2
    const barChart2Ctx = document.getElementById('barChart2').getContext('2d');
    const barChart2 = new Chart(barChart2Ctx, {
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
