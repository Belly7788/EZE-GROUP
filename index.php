<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improved Tailwind Design with Logo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .bg-orange-custom { background-color: #ff8800; }
        .text-orange-custom { color: #ff8800; }
        .bg-gradient-orange { background: linear-gradient(135deg, #ff8800, #ffaa33); }
        body { font-family: 'Noto Sans Khmer', sans-serif; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); transition: all 0.3s ease; }
        .grid { padding-top: 2rem; }
        .hidden { display: none; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center">
    <!-- Header Section -->
    <header id="header" class="w-full h-[120px] bg-gradient-orange p-4 flex justify-between relative">
        <div class="flex">
            <img src="images/logos/1.1 logo.png" alt="Logo" class="object-fit-cover h-14 w-14">
        </div>
    </header>

    <!-- Profile Section -->
    <div id="profile" class="absolute top-20 left-1/2 transform -translate-x-1/2 w-11/12 bg-white rounded-xl shadow-lg p-4 flex items-center border-l-4 border-orange-custom z-10 max-w-4xl">
        <img src="images/logos/do.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full mr-4 border-2 border-orange-custom">
        <div>
            <h2 class="text-xl font-bold text-gray-800">Keu Lyseuminh</h2>
            <p class="text-sm text-gray-500">Digital Team</p>
        </div>
    </div>

    <!-- Grid Section -->
    <div id="grid" class="w-11/12 grid grid-cols-3 gap-4 mt-6 mb-6">
        <a href="pages/kamhoch.php" class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="kamhoch" data-name="Mistakes">
            <i class="fas fa-tools text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">កំហូច</p>
        </a>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="snoesom" data-name="Request">
            <i class="fas fa-hand-holding-heart text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ស្នើរសុំ</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="hiranyavathu" data-name="Finance">
            <i class="fas fa-money-bill-wave text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ហិរញ្ញវត្ថុ</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="snoerstok" data-name="Request-stock">
            <i class="fa-solid fa-boxes-packing text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ស្នើរស្តុក</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="digital" data-name="ឌីជីថល">
            <i class="fas fa-laptop-code text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ឌីជីថល</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="dokchhnuon" data-name="ដឹកជញ្ជូន">
            <i class="fas fa-truck text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ដឹកជញ្ជូន</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="penhchet" data-name="ពេញចិត្ត">
            <i class="fas fa-star text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ពេញចិត្ត</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="jajek" data-name="ជជែក">
            <i class="fas fa-comments text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ជជែក</p>
        </div>
        <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center card-hover" data-page="jomnuoy" data-name="ជំនួយ">
            <i class="fas fa-question-circle text-3xl text-orange-custom mb-2"></i>
            <p class="text-sm text-gray-700 font-medium">ជំនួយ</p>
        </div>
    </div>

    <div id="working" class="w-11/12 bg-white rounded-xl flex items-center shadow-lg p-3">
        <h3 class="text-lg font-bold text-gray-800 ">ផ្ទាំងការងារ</h3>
    </div>
    <!-- Mistakes Summary Section -->
    <a href="pages/kamhoch.php" id="mistakes-summary" class="w-11/12 bg-white rounded-xl shadow-lg p-6 mt-6 mb-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">សរុបចំនួន: 100</h3>
        <div class="flex items-center justify-between">
            <!-- Progress Circle -->
            <div class="relative flex items-center justify-center">
                <canvas id="progressChart" class="w-20 h-20"></canvas>
                <div class="absolute flex items-center justify-center">
                    <i class="fas fa-tools text-3xl text-orange-500"></i>
                </div>
            </div>
            <!-- Statistics -->
            <div class="flex flex-col space-y-4">
                <div class="flex flex-col">
                    <p class="text-sm text-yellow-500 font-medium">រងចាំ</p>
                    <p id="pending" class="text-sm font-bold text-gray-800">0</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-sm text-green-700 font-medium">បានបញ្ចប់</p>
                    <p id="completed" class="text-sm font-bold text-gray-800">0</p>
                </div>
            </div>
            <div class="flex flex-col space-y-4">   
                <div class="flex flex-col">
                    <p class="text-sm text-blue-700 font-medium">ដំណើរការ</p>
                    <p id="inProgress" class="text-sm font-bold text-gray-800">0</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-sm text-red-700 font-medium">បោះបង់</p>
                    <p id="canceled" class="text-sm font-bold text-gray-800">0</p>
                </div>
            </div>
        </div>
    </a>


<script>
    // Function to initialize the chart
    function initializeChart(canvasId, data) {
        const ctx = document.getElementById(canvasId).getContext('2d');
        return new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        data.pending,
                        data.completed,
                        data.inProgress,
                        data.canceled
                    ],
                    backgroundColor: [
                        '#ff8800', // orange for Pending
                        '#00FF00',  // green for Completed
                        '#0000FF',  // blue for In Progress
                        '#FF0000'   // red for Canceled
                    ],
                    borderWidth: 0,
                    borderRadius: 0,
                    cutout: '70%'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                }
            }
        });
    }
    
    const mainChartData = {
        pending: 100,
        completed: 20,
        inProgress: 30,
        canceled: 40
    };
    document.getElementById('pending').textContent = mainChartData.pending;
    document.getElementById('completed').textContent = mainChartData.completed;
    document.getElementById('inProgress').textContent = mainChartData.inProgress;
    document.getElementById('canceled').textContent = mainChartData.canceled;
    initializeChart('progressChart', mainChartData);
</script>


</body>
</html>