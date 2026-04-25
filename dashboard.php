<?php include "./header.php"; 
// session_start();

// if (!isset($_SESSION['user'])) {
//     header("Location: login.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing:"border-box"
  }
</style>
<title>Dashboard</title>
</head>

<body class="bg-gray-900 text-white">

<!-- مهم: باش ما يغطيش header -->
<div class="pt-20 flex">

<!-- Sidebar -->
<aside class="w-64 min-h-screen bg-gray-950 p-6">

  <h1 class="text-2xl font-bold mb-10 text-blue-400 flex items-center gap-2">
    <i class="fa-solid fa-chart-line"></i> Dashboard
  </h1>

  <ul class="space-y-6">

    <li class="hover:text-blue-400 cursor-pointer">
      <i class="fa-solid fa-house mr-2"></i> Home
    </li>

    <li class="hover:text-blue-400 cursor-pointer">
      <i class="fa-solid fa-chart-pie mr-2"></i> Analytics
    </li>

    <li class="hover:text-blue-400 cursor-pointer">
      <i class="fa-solid fa-users mr-2"></i> Users
    </li>

    <li class="hover:text-blue-400 cursor-pointer">
      <i class="fa-solid fa-gear mr-2"></i> Settings
    </li>

  </ul>

  <div class="mt-10">
    <button class="w-full bg-red-500 hover:bg-red-600 transition p-2 rounded-lg flex items-center justify-start gap-2">
      <i class="fa-solid fa-right-from-bracket"></i>
      Log Out
    </button>
  </div>

</aside>

<!-- Main Content -->
<main class="flex-1 p-8">

  <div class="max-w-7xl mx-auto">

    <h1 class="text-3xl font-bold mb-8">
      Trading Dashboard
    </h1>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-gray-400">Revenue</h2>
        <p class="text-2xl font-bold text-green-400">$12,450</p>
      </div>

      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-gray-400">Users</h2>
        <p class="text-2xl font-bold text-blue-400">1,245</p>
      </div>

      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-gray-400">Orders</h2>
        <p class="text-2xl font-bold text-yellow-400">532</p>
      </div>

      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <h2 class="text-gray-400">Profit</h2>
        <p class="text-2xl font-bold text-purple-400">$4,820</p>
      </div>

    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <canvas id="chart1"></canvas>
      </div>

      <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
        <canvas id="chart2"></canvas>
      </div>

    </div>

  </div>

</main>

</div>

<!-- Charts Script -->
<script>
new Chart(document.getElementById("chart1"), {
  type: "doughnut",
  data: {
    labels: ["Bitcoin","Ethereum","Solana"],
    datasets: [{
      data: [40,35,25],
      backgroundColor: ["#3b82f6","#10b981","#f59e0b"]
    }]
  }
});

const ctx = document.getElementById("chart2").getContext("2d");

/* gradient background */
const gradient = ctx.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, "rgba(34,197,94,0.4)");
gradient.addColorStop(1, "rgba(34,197,94,0)");

new Chart(ctx, {
  type: "line",
  data: {
    labels: ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
    datasets: [{
      label: "BTC Market",
      data: [120,135,128,150,145,170,160],

      borderColor: "#22c55e",
      backgroundColor: gradient,

      borderWidth: 3,
      tension: 0.45,
      fill: true,

      pointBackgroundColor: "#22c55e",
      pointBorderColor: "#fff",
      pointBorderWidth: 2,
      pointRadius: 5,
      pointHoverRadius: 7
    }]
  },

  options: {
    responsive: true,
    maintainAspectRatio: false,

    plugins: {
      legend: {
        labels: {
          color: "#fff",
          font: {
            size: 14
          }
        }
      },

      tooltip: {
        backgroundColor: "#111827",
        borderColor: "#22c55e",
        borderWidth: 1,
        titleColor: "#fff",
        bodyColor: "#22c55e"
      }
    },

    scales: {
      x: {
        ticks: {
          color: "#9ca3af",
          font: { size: 12 }
        },
        grid: {
          color: "rgba(255,255,255,0.05)"
        }
      },

      y: {
        ticks: {
          color: "#9ca3af",
          font: { size: 12 }
        },
        grid: {
          color: "rgba(255,255,255,0.05)"
        }
      }
    },

    interaction: {
      mode: "index",
      intersect: false
    }
  }
});
</script>

</body>
</html>