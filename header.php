<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Header</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
</head>



<!-- header.php -->

<header class="fixed top-0 w-full bg-gray-900/90 backdrop-blur-md shadow-lg z-50 border-b border-gray-800">
  <nav class="max-w-7xl mx-auto flex justify-between items-center p-4">

    <!-- Logo -->
    <h1 class="text-2xl font-bold text-white flex items-center gap-2">
      <i class="fa-solid fa-code text-blue-500"></i>
      Project
    </h1>

    <!-- Links -->
    <div class="flex items-center gap-4">

      <a href="#" class="text-gray-300 hover:text-white transition font-medium">
        Home
      </a>

      <a href="./login.php"
         class="px-5 py-2 rounded-lg border border-blue-500 text-blue-400 hover:bg-blue-500 hover:text-white transition">
        Login
      </a>

      <a href="./register.php"
         class="px-5 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition shadow-lg shadow-blue-500/30">
        Sign Up
      </a>

    </div>

  </nav>
</header>

</body>
</html>