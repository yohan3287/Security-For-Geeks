<?php
    Class Payment{
        private $paymentID = "";
        private $paymentDateTime = "";
        private $paymentPacket = "";
        private $userID = "";
        private $cardNumber = "";
        private $cardExpiration = "";
        private $cardCVV = "";
        private $cardOwner = "";
        private $paymentStatus = "";

        public function submitPayment($userID,$paymentDateTime,$paymentPacket,$cardNumber,$cardExpiration,$cardCVV,$cardOwner,$db){
            $this->userID = $userID;
            $this->paymentDateTime = $paymentDateTime;
            $this->paymentPacket = $paymentPacket;
            $this->cardNumber = $cardNumber;
            $this->cardExpiration = $cardExpiration;
            $this->cardCVV = $cardCVV;
            $this->cardOwner = $cardOwner;
            $query = "INSERT INTO `payment`(`CustomerID`, `PaymentDatetime`, `PaymentPacket`, `CardNumber`, `CardExpiration`, `CardCVV`, `CardOwner`)
                VALUES('$this->userID','$this->paymentDateTime','$this->paymentPacket','$this->cardNumber','$this->cardExpiration','$this->cardCVV','$this->cardOwner')";
            $db->query($query);
        }
    }
?>