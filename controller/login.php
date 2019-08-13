<?php
    include 'connectDb.php';
    include '../function/validateUserInput.php';
    include '../class/User.php';

    $username = validateUserInput(@$_POST['username']);
    $password = validateUserInput(@$_POST['password']);

    if($username=="" || $password==""){
        $error = "Input your username and password !";
        header("Location: ../loginform.php?error=$error");
        die();

    }else{
        session_start();
        session_regenerate_id();
        $user = new User();
        if($user->verifyLogin($username,$password,$db)){
            header("Location: ../courses.php");
            die();
        }
        else{
            $error = "Invalid username or password !";
            header("Location: ../loginform.php?error=$error");
            die();
        }
    }
?>