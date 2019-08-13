<?php
    Class Course{
        private $courseID = "";
        private $courseName = "";
        private $courseDifficulty = "";
        private $courseCategory = "";
        private $trainerName = "";
        private $courseFlag = "";
        private $coursePoint = 0;

        public function __construct($courseID,$db) {
            $this->courseID = $courseID;

            $query = "SELECT * FROM Course 
                WHERE CourseID = '$this->courseID'";
            $result = $db->query($query);
                
            if($result == TRUE){
                $course = $result->fetch_assoc();
                
                $this->courseName = $course['CourseName'];
                $this->courseDifficulty = $course['CourseDifficulty'];
                $this->courseCategory = $course['CourseCategory'];
                $this->trainerName = $course['CourseTrainer'];
                $this->coursePoint = $course['CoursePoint'];
                $this->courseFlag = $course['CourseFlag'];
            }
        }

        public function verifyFlag($input){
            if($input === $this->courseFlag){
                return $this->coursePoint;
            }
            else{
                return 0;
            }
        }
    }
?>