<?php
    include '../class/User.php';
    include 'connectDb.php';
    include '../function/validateUserInput.php';

    $username = validateUserInput(@$_POST['username']);
    $password = validateUserInput(@$_POST['password']);
    $confirmpassword = validateUserInput(@$_POST['confirmpassword']);
    $fullname = validateUserInput(@$_POST['fullname']);
    $email = validateUserInput(@$_POST['email']);

    $error = "";

    if($username == ""){
        $error = "Fill the username !";
    }
    else if($fullname == ""){
        $error = "Fill the fullname !";
    }
    else if($email == ""){
        $error = "Fill the email !";
    }
    else if($password == ""){
        $error = "Fill the password !";
    }
    else if($confirmpassword == ""){
        $error = "Confirm your password !";
    }
    else if($password != $confirmpassword){
        $error = "Reconfirm your password !";
    }
    else{
        session_start();
        session_regenerate_id();
        $user = new User();
        $user->registerNewUser($username,$fullname,$email,$password,$db);
    }

    if($error==""){
        header("Location: ../loginform.php");
        die();
    }
    else{
        header("Location: ../register-optional.php?error=$error");
        die();
    }
?>