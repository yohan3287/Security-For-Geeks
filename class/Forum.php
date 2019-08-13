<?php
    Class Forum{
        private $userID = "";
        private $forumID = "";
        private $forumTitle = "";
        private $forumDatetime = "";

        public function addForum($customerID,$forumTitle,$forumDatetime,$db){
            $this->userID = $customerID;
            $this->forumTitle = $forumTitle;
            $this->forumDatetime = $forumDatetime;

            $query = "INSERT INTO forum (`CustomerID`,`ForumTitle`,`ForumDatetime`) 
                VALUES ('$this->userID','$this->forumTitle','$this->forumDatetime')";
            $db->query($query);
        }
    }
?>