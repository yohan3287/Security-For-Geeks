<?php
    require 'connectDb.php';
    require '../class/Course.php';
    require '../class/User.php';

    session_start();
    session_regenerate_id();

    $userID = $_SESSION['userID'];
    $courseID = @$_GET['courseID'];
    $flag = @$_POST['flag'];

    $course = new Course($courseID,$db);
    $score = $course->verifyFlag($flag);

    if($score > 0){
        $user = new User();
        $user->updateScore($score,$userID,$db);
        header("Location: ../courses.php");
        die();
    }
    else{
        header("Location: ../courses.php");
        die();
    }
?>