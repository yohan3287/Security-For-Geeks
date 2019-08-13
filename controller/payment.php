<?php
    require 'connectDb.php';
    require '../class/Payment.php';
    require '../class/User.php';

    session_start();
    session_regenerate_id();
    if(!isset($_SESSION['userID'])){
		die();
    }
    
    $userID = $_SESSION['userID'];
    $cardNumber = $_POST['cardNumber'];
    $cardExpiration = $_POST['cardExpiration'];
    $cardCVV = $_POST['cardCVV'];
    $cardOwner = $_POST['cardOwner'];
    $paymentDateTime = date("Y-m-d H:i:s");
    $paymentPacket = $_GET['packet'];

    $payment = new Payment();
    $payment->submitPayment($userID,$paymentDateTime,$paymentPacket,$cardNumber,$cardExpiration,$cardCVV,$cardOwner,$db);

    $user = new User();
    $user->updateMembership($paymentPacket,$userID,$db);

    header("Location: ../courses.php");
    die();
?>