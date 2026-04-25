<?php include "./header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
</style>

<title>Dashboard</title>
</head>

<body class="bg-gray-900 text-white pt-20">

<div class="flex">

  <!-- Sidebar FIXED -->
 <aside class="w-64 min-h-screen fixed top-20 left-0 bg-gray-950 border-r border-gray-800 p-6">

  <!-- SPECIAL DASHBOARD TITLE -->
  <div class="mb-10 p-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 shadow-lg">
    <h1 class="text-white text-lg font-bold flex items-center gap-2">
      <i class="fa-solid fa-gauge-high"></i>
      Admin Panel
    </h1>
    <p class="text-xs text-white/80 mt-1">Control your system</p>
  </div>

  <!-- MENU -->
  <ul class="space-y-2 text-gray-300">

    <li class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-900 hover:text-white transition cursor-pointer">
      <i class="fa-solid fa-house-chimney text-blue-400 w-5"></i>
      Home
    </li>

    <li class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-900 hover:text-white transition cursor-pointer">
      <i class="fa-solid fa-chart-simple text-green-400 w-5"></i>
      Analytics
    </li>

    <li class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-900 hover:text-white transition cursor-pointer">
      <i class="fa-solid fa-user-group text-yellow-400 w-5"></i>
      Users
    </li>

    <li class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-900 hover:text-white transition cursor-pointer">
      <i class="fa-solid fa-gear text-purple-400 w-5"></i>
      Settings
    </li>

  </ul>

  <!-- LOGOUT -->
  <div class="mt-10 pt-6 border-t border-gray-800">
    <button class="w-full flex items-center justify-center gap-3 p-3 rounded-lg bg-red-600/10 hover:bg-red-600 text-red-400 hover:text-white transition">
      <i class="fa-solid fa-right-from-bracket"></i>
      Logout
    </button>
  </div>

</aside>

  <!-- Main Content -->
  <main class="ml-64 flex-1 p-8">

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
          font: { size: 14 }
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