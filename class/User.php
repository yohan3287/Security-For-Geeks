<?php
    Class User{
        private $userID = "";
        private $userName = "";
        private $userPassword = "";
        private $userFullname = "";
        private $userEmail = "";
        private $userScore = "";
        private $userMembership = "";

        public function verifyLogin($username,$password,$db){
            $query = "SELECT * FROM customer 
                WHERE CustomerUsername='$username' AND CustomerPassword='$password'";
            $result = $db->query($query);
            $user = $result->fetch_assoc();
            if($user){
                $this->userID = $user['CustomerID'];
                $this->userName = $username;
                $this->userFullname = $user['CustomerFullname'];
                $this->userEmail = $user['CustomerEmail'];
                $this->userProfilePicture = $user['CustomerProfilePicture'];
                $_SESSION['userID'] = $this->userID;
                $_SESSION['Username'] = $this->userName;
                $_SESSION['Password'] = $this->userPassword;
                $_SESSION['Fullname'] = $this->userFullname;
                $_SESSION['Email'] = $this->userEmail;
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function registerNewUser($username,$fullname,$email,$password,$db){
            $this->userName = $username;
            $this->userFullname = $fullname;
            $this->userEmail = $email;
            $this->userPassword = $password;

            $query = "INSERT INTO `customer`(`CustomerUsername`,`CustomerPassword`,`CustomerFullname`,`CustomerEmail`) 
                VALUES ('$this->userName','$this->userPassword','$this->userFullname','$this->userEmail')";
            $db->query($query);
        }

        public function updateMembership($membership,$userID,$db){
            $this->userMembership = $membership;
            $this->userID = $userID;
            $query = "UPDATE customer SET CustomerMembership = '$this->userMembership' 
                WHERE CustomerID = '$this->userID'";
            $db->query($query);
        }

        public function updateScore($newScore,$userID,$db){
            $this->userID = $userID;
            
            $query = "SELECT * FROM customer WHERE CustomerID = $this->userID";
            $result = $db->query($query);
            $r = $result->fetch_assoc();
            $preScore = $r['CustomerScore'];

            $this->userScore = $preScore + $newScore;

            $query = "UPDATE customer SET CustomerScore = '$this->userScore' 
                WHERE CustomerID = '$this->userID'";
            $db->query($query);
        }

        public function changePassword($password,$userID,$db){
            $this->userPassword = $password;
            $this->userID = $userID;
            $query = "UPDATE customer SET CustomerPassword = '$this->userPassword' 
                WHERE CustomerID = '$this->userID'";
            $db->query($query);
        }
    }
?>