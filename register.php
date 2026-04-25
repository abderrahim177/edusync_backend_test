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
            <div class="min-h-screen flex items-center justify-center bg-gray-100 ">

        <div class="bg-white p-8 rounded-2xl shadow-lg w-96">

        <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>

       <form method="POST" action="./authoprocess.php">

<div class="mb-4">
<label class="block text-gray-600 mb-2">First Name</label>
<input name="name" type="text" class="w-full border rounded-lg p-2">
</div>

<div class="mb-4">
<label class="block text-gray-600 mb-2">Last Name</label>
<input name="lastname" type="text" class="w-full border rounded-lg p-2">
</div>

<div class="mb-4">
<label class="block text-gray-600 mb-2">Email</label>
<input name="email" type="email" class="w-full border rounded-lg p-2">
</div>

<div class="mb-4">
<label class="block text-gray-600 mb-2">Password</label>
<input name="password" type="password" class="w-full border rounded-lg p-2">
</div>

<div class="mb-4">
<label class="block text-gray-600 mb-2">Confirm Password</label>
<input name="passwordRepeat" type="password" class="w-full border rounded-lg p-2">
</div>

<button name="submit" type="submit"
class="w-full bg-green-600 text-white p-2 rounded-lg hover:bg-green-700 transition">
Create Account
</button>

</form>

        </div>
        </div>
</body>
</html>