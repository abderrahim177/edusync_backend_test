<?php

require_once('./functions.php');
require_once('./database.php');

session_start();


//REGISTER

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    if(empty($name) || empty($lastname) || empty($email) || empty($password) || empty($passwordRepeat)){
        header('Location: register.php?error=empty');
        exit();
    }

    if(!isvalid($email)){
        header('Location: register.php?error=invalid');
        exit();
    }

    if($password !== $passwordRepeat){
        header('Location: register.php?error=password');
        exit();
    }

    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    $stm = $conn->prepare("INSERT INTO users (name,lastname,email,password) VALUES (?,?,?,?)");
    $stm->execute([$name,$lastname,$email,$passwordHashed]);

    header('Location: login.php?success=1');
    exit();
}


//LOGIN

if(isset($_POST["login"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stm = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stm->execute([$email]);

    $user = $stm->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user["password"])){

        session_start();

        $_SESSION['user'] = [
            'name' => $user['name'],
            'role' => $user['role']
        ];

        header("Location: dashboard.php");
        exit();

    } else {
        header("Location: login.php?error=wrong");
        exit();
    }
}