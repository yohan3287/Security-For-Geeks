<?php
    include '../class/Forum.php';
    include '../class/User.php';
    include 'connectDb.php';
    include '../function/validateUserInput.php';

    $message = validateUserInput(@$_GET['forumtitle']);
    $now = date("Y-m-d H:i:s");

    if($message== ''){
        $error = "Input your forum title !";
        header("Location: ../forum.php?error=$error");
        die();
    }
    else{
        session_start();
        session_regenerate_id();
        $forum = new Forum();
        $forum->addForum($_SESSION['userID'],$message,$now,$db);
    }

    if($error != ''){ //Jika error tidak kosong, maka redirect ke add-error 
        header("Location: ../forum.php?error=$error"); //tambahkan parameter error untuk pesan error
        die(); //setelah header location, biasakan die aja, biar ga lanjut code nya
    }
    else{
        header("Location: ../forum.php");
        die();
    }
?>