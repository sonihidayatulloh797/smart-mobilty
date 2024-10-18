{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Square Layout with Nested Sections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .main-section {
            aspect-ratio: 1 / 1;
            border: 2px solid #333;
            padding: 1%;
            display: flex;
            flex-direction: column;
        }
        .nested-row {
            flex: 1;
            display: flex;
        }
        .nested-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
            overflow: hidden;
            color: #333;
            position: relative;
            font-size: 0.8vw;
        }
        #nested-section1 {
            border-right: 1px solid #333;
            border-bottom: 1px solid #333;
        }
        #nested-section3 {
            border-left: 1px solid #333;
            border-bottom: 1px solid #333;
        }
        #nested-section7 {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }
        #nested-section9 {
            border-left: 1px solid #333;
            border-top: 1px solid #333;
        }
        .table {
            color: #333;
            margin-bottom: 0;
            font-size: 0.7vw;
            width: 100%;
            height: 100%;
        }
        .table th, .table td {
            border-color: rgba(51, 51, 51, 0.3);
            padding: 1px !important;
        }
        .vertical-header {
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(180deg);
            white-space: nowrap;
        }
        .right-header {
            writing-mode: vertical-rl;
            text-orientation: mixed;
            transform: rotate(0deg);
        }

        /* Arrow styles for nested-section5 */
        #nested-section5::before,
        #nested-section5::after,
        #nested-section5 .arrow-top,
        #nested-section5 .arrow-bottom {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border: 0.8vw solid transparent;
        }

        #nested-section5::before { /* Left arrow */
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            border-left-color: #333;
        }

        #nested-section5::after { /* Right arrow */
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            border-right-color: #333;
        }

        #nested-section5 .arrow-top {
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            border-top-color: #333;
        }

        #nested-section5 .arrow-bottom {
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-bottom-color: #333;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div id="main-section1" class="main-section">
                    <div class="nested-row">
                        <div id="nested-section1" class="nested-section">1</div>
                        <div id="nested-section2" class="nested-section">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>1A</td>
                                        <td>1B</td>
                                        <td>1C</td>
                                        <td>1D</td>
                                        <td>1E</td>
                                        <th class="right-header" rowspan="5">H</th>
                                    </tr>
                                    <tr>
                                        <td>2A</td>
                                        <td>2B</td>
                                        <td>2C</td>
                                        <td>2D</td>
                                        <td>2E</td>
                                    </tr>
                                    <tr>
                                        <td>3A</td>
                                        <td>3B</td>
                                        <td>3C</td>
                                        <td>3D</td>
                                        <td>3E</td>
                                    </tr>
                                    <tr>
                                        <td>4A</td>
                                        <td>4B</td>
                                        <td>4C</td>
                                        <td>4D</td>
                                        <td>4E</td>
                                    </tr>
                                    <tr>
                                        <td>5A</td>
                                        <td>5B</td>
                                        <td>5C</td>
                                        <td>5D</td>
                                        <td>5E</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="nested-section3" class="nested-section">3</div>
                    </div>
                    <div class="nested-row">
                        <div id="nested-section4" class="nested-section">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="5">Header</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>A1</td><td>B1</td><td>C1</td><td>D1</td><td>E1</td></tr>
                                    <tr><td>A2</td><td>B2</td><td>C2</td><td>D2</td><td>E2</td></tr>
                                    <tr><td>A3</td><td>B3</td><td>C3</td><td>D3</td><td>E3</td></tr>
                                    <tr><td>A4</td><td>B4</td><td>C4</td><td>D4</td><td>E4</td></tr>
                                    <tr><td>A5</td><td>B5</td><td>C5</td><td>D5</td><td>E5</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="nested-section5" class="nested-section">
                            <div class="arrow-top"></div>
                            <div class="arrow-bottom"></div>
                            5
                        </div>
                        <div id="nested-section6" class="nested-section">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr><td>X1</td><td>Y1</td><td>Z1</td><td>W1</td><td>V1</td></tr>
                                    <tr><td>X2</td><td>Y2</td><td>Z2</td><td>W2</td><td>V2</td></tr>
                                    <tr><td>X3</td><td>Y3</td><td>Z3</td><td>W3</td><td>V3</td></tr>
                                    <tr><td>X4</td><td>Y4</td><td>Z4</td><td>W4</td><td>V4</td></tr>
                                    <tr><td>X5</td><td>Y5</td><td>Z5</td><td>W5</td><td>V5</td></tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Footer</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="nested-row">
                        <div id="nested-section7" class="nested-section">7</div>
                        <div id="nested-section8" class="nested-section">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="vertical-header" rowspan="5">H</th>
                                        <td>I-A</td>
                                        <td>I-B</td>
                                        <td>I-C</td>
                                        <td>I-D</td>
                                        <td>I-E</td>
                                    </tr>
                                    <tr>
                                        <td>II-A</td>
                                        <td>II-B</td>
                                        <td>II-C</td>
                                        <td>II-D</td>
                                        <td>II-E</td>
                                    </tr>
                                    <tr>
                                        <td>III-A</td>
                                        <td>III-B</td>
                                        <td>III-C</td>
                                        <td>III-D</td>
                                        <td>III-E</td>
                                    </tr>
                                    <tr>
                                        <td>IV-A</td>
                                        <td>IV-B</td>
                                        <td>IV-C</td>
                                        <td>IV-D</td>
                                        <td>IV-E</td>
                                    </tr>
                                    <tr>
                                        <td>V-A</td>
                                        <td>V-B</td>
                                        <td>V-C</td>
                                        <td>V-D</td>
                                        <td>V-E</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="nested-section9" class="nested-section">9</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="main-section2" class="main-section">
                    Main Section 2
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiple Charts Example</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .chart-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }
    .chart-item {
      max-width: 500px;
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center">2 Bar Chart and 2 Line Chart</h2>
    <div class="chart-container">
      <!-- Bar Chart 1 -->
      <div class="chart-item">
        <canvas id="barChart1"></canvas>
      </div>

      <!-- Bar Chart 2 -->
      <div class="chart-item">
        <canvas id="barChart2"></canvas>
      </div>

      <!-- Line Chart 1 -->
      <div class="chart-item">
        <canvas id="lineChart1"></canvas>
      </div>

      <!-- Line Chart 2 -->
      <div class="chart-item">
        <canvas id="lineChart2"></canvas>
      </div>
    </div>
  </div>

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
</body>
</html>
