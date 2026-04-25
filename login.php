<?php
include "./header.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-96">

        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <form action="./authoprocess.php" method = "POST">

        <div class="mb-4">
        <label class="block text-gray-600 mb-2">Email</label>
        <div class="flex items-center border rounded-lg px-3">
        <i class="fa-solid fa-envelope text-gray-400"></i>
        <input name="email" type="email" class="w-full p-2 outline-none" placeholder="Enter your email">
        </div>
        </div>

        <div class="mb-4">
        <label class="block text-gray-600 mb-2">Password</label>
        <div class="flex items-center border rounded-lg px-3">
        <i class="fa-solid fa-lock text-gray-400"></i>
        <input name="password" type="password" class="w-full p-2 outline-none" placeholder="Enter your password">
        </div>
        </div>
 
        <button name="login" type="submit" class="w-full bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition">
            Login
        </button>

        <p class="text-center text-sm mt-4">
        Don't have an account? 
        <a href="./register.php" class="text-blue-600 font-semibold">Sign Up</a>
        </p>

        </form>

        </div>
        </div>
</body>
</html>



