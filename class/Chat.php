<?php
    Class Chat{
        private $userID = "";
        private $forumID = "";
        private $chatID = "";
        private $chatText = "";
        private $chatImageName = "";
        private $chatDatetime = "";

        public function addChat($userID,$forumID,$chatText,$chatDatetime,$db){
            $this->userID = $userID;
            $this->forumID = $forumID;
            $this->chatText = $chatText;
            $this->chatImagesName = "";
            $this->chatDatetime = $chatDatetime;

            $query = "INSERT INTO chat(`ForumID`,`CustomerID`,`ChatText`,`ChatDatetime`) 
                VALUES($this->forumID,$this->userID,'$this->chatText','$this->chatDatetime')";
            $db->query($query);
        }
    }
?>