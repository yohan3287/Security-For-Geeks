<?php
    include '../class/Chat.php';
    include '../class/User.php';
    include 'connectDb.php';
    include '../function/validateUserInput.php';

    $forumID = @$_GET['forumID'];
    $message = validateUserInput(@$_POST['message']);
    $now = date("Y-m-d H:i:s");

    if($message== ''){
        $error = "Input your chat !";
        header("Location: ../chat.php?error=$error");
        die();
    }
    else{
        session_start();
        session_regenerate_id();
        $chat = new Chat();
        $chat->addChat($_SESSION['userID'],$forumID,$message,$now,$db);
    }

    if($error != ''){ //Jika error tidak kosong, maka redirect ke add-error 
        header("Location: ../chat.php?forumID=$forumID&error=$error"); //tambahkan parameter error untuk pesan error
        die(); //setelah header location, biasakan die aja, biar ga lanjut code nya
    }
    else{
        header("Location: ../chat.php?forumID=$forumID");
        die();
    }
?>
