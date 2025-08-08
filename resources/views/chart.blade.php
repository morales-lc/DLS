<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    

@include('navbar')

    <h2 class="mb-4 fw-bold">Chart.js Demo (All Chart Types)</h2>
    <div class="row g-4">

        <!-- Bar Chart -->
        <div class="col-md-6">
            <canvas id="barChart"></canvas>
        </div>

        <!-- Line Chart -->
        <div class="col-md-6">
            <canvas id="lineChart"></canvas>
        </div>

        <!-- Pie Chart -->
        <div class="col-md-6">
            <canvas id="pieChart"></canvas>
        </div>

        <!-- Doughnut Chart -->
        <div class="col-md-6">
            <canvas id="doughnutChart"></canvas>
        </div>

        <!-- Radar Chart -->
        <div class="col-md-6">
            <canvas id="radarChart"></canvas>
        </div>

        <!-- Polar Area Chart -->
        <div class="col-md-6">
            <canvas id="polarChart"></canvas>
        </div>

        <!-- Bubble Chart -->
        <div class="col-md-6">
            <canvas id="bubbleChart"></canvas>
        </div>

        <!-- Scatter Chart -->
        <div class="col-md-6">
            <canvas id="scatterChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sample data
    const labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];
    const data = [12, 19, 3, 5, 2, 3];

    // Bar
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels,
            datasets: [{
                label: 'Bar Dataset',
                data,
                backgroundColor: 'rgba(54, 162, 235, 0.7)'
            }]
        }
    });

    // Line
    new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
            labels,
            datasets: [{
                label: 'Line Dataset',
                data,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.4
            }]
        }
    });

    // Pie
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels,
            datasets: [{
                label: 'Pie Dataset',
                data,
                backgroundColor: [
                    'red', 'blue', 'yellow', 'green', 'purple', 'orange'
                ]
            }]
        }
    });

    // Doughnut
    new Chart(document.getElementById('doughnutChart'), {
        type: 'doughnut',
        data: {
            labels,
            datasets: [{
                label: 'Doughnut Dataset',
                data,
                backgroundColor: [
                    'red', 'blue', 'yellow', 'green', 'purple', 'orange'
                ]
            }]
        }
    });

    // Radar
    new Chart(document.getElementById('radarChart'), {
        type: 'radar',
        data: {
            labels,
            datasets: [{
                label: 'Radar Dataset',
                data,
                backgroundColor: 'rgba(255,99,132,0.2)',
                borderColor: 'rgba(255,99,132,1)'
            }]
        }
    });

    // Polar Area
    new Chart(document.getElementById('polarChart'), {
        type: 'polarArea',
        data: {
            labels,
            datasets: [{
                label: 'Polar Area Dataset',
                data,
                backgroundColor: [
                    'red', 'blue', 'yellow', 'green', 'purple', 'orange'
                ]
            }]
        }
    });

    // Bubble
    new Chart(document.getElementById('bubbleChart'), {
        type: 'bubble',
        data: {
            datasets: [{
                label: 'Bubble Dataset',
                data: [
                    { x: 20, y: 30, r: 15 },
                    { x: 40, y: 10, r: 10 },
                    { x: 25, y: 20, r: 12 }
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.5)'
            }]
        }
    });

    // Scatter
    new Chart(document.getElementById('scatterChart'), {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'Scatter Dataset',
                data: [
                    { x: -10, y: 0 },
                    { x: 0, y: 10 },
                    { x: 10, y: 5 }
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.7)'
            }]
        }
    });
</script>
</body>
</html>