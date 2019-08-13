<?php
// This is OOP + barbaric style to generate DB 
//=====================================================================
$server = "localhost";
$username = "root";
$password = "";
$dbname = "SecurityForGeeks";

// Create connection to connect to DB on phpmyadmin
$connect = new mysqli($server, $username, $password);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
echo "<center>Connected to server</center><br>";

// Create empty database
$sql = "CREATE DATABASE if not exists SecurityForGeeks";
if ($connect->query($sql) === TRUE) {
    echo "<center>Database created successfully</center><br>";
} else {
    echo "Error creating database: " . $connect->error;
}

//===================================================================
//Generate tables
// Create connection to the server (This is for DML and DDL operations)
$connects = new mysqli($server, $username, $password, $dbname);

//Check connection 
if ($connects->connect_error) {
    die("Connection failed: " . $connects->connect_error);
} 

//Query to generate table Customer
$customer = "CREATE TABLE customer(
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerEmail VARCHAR(135) NOT NULL,
    CustomerUsername VARCHAR(135) NOT NULL,
    CustomerPassword VARCHAR(30) NOT NULL,
    CustomerFullname VARCHAR(135) NOT NULL,
    CustomerMembership VARCHAR(100) NOT NULL, 
    CustomerAchievement VARCHAR(1000) NOT NULL,
    CustomerScore VARCHAR(5) NOT NULL
)";

//Query to generate table Course
$course = "CREATE TABLE course(
    CourseID INT AUTO_INCREMENT PRIMARY KEY,
    CourseName VARCHAR(100) NOT NULL,
    CourseDifficulty VARCHAR(20) NOT NULL,
    CoursePoint VARCHAR(5) NOT NULL,
    CourseCategory VARCHAR(100) NOT NULL,
    CourseTrainer VARCHAR(135) NOT NULL,
    CourseFlag VARCHAR(350) NOT NULL
)";

//Query to generate table Forum
$forum = "CREATE TABLE forum(
    ForumID INT AUTO_INCREMENT PRIMARY KEY,
    ForumTitle VARCHAR(1000) NOT NULL,
    ForumDatetime datetime,
    CustomerID INT,
    FOREIGN KEY (CustomerID) REFERENCES customer(CustomerID)
)";

//Query to generate table payment
$payment = "CREATE TABLE payment(
    PaymentID INT AUTO_INCREMENT PRIMARY KEY, 
    PaymentDatetime datetime,
    PaymentPacket VARCHAR(100) NOT NULL,
    CustomerID INT,
    CardNumber VARCHAR(15) NOT NULL,
    CardExpiration VARCHAR(10) NOT NULL,
    CardCVV VARCHAR(5) NOT NULL,
    CardOwner VARCHAR(200) NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES customer(CustomerID)
)";

//Query to generate table Learning history
$learnhistory  = "CREATE TABLE learnhistory(
    HistoryID INT AUTO_INCREMENT PRIMARY KEY,
    CourseStatus VARCHAR(100) NOT NULL,
    CourseID INT,
    CustomerID INT,

    FOREIGN KEY (CustomerID) REFERENCES customer(CustomerID),
    FOREIGN KEY (CourseID) REFERENCES course(CourseID)
)";

//Query to generate table Chat
$chat = "CREATE TABLE chat(
    ChatID INT AUTO_INCREMENT PRIMARY KEY,
    ChatText VARCHAR(10000) NOT NULL,
    ChatImage VARCHAR(100) NOT NULL,
    ChatDatetime datetime,
    ForumID INT,
    CustomerID INT,

    FOREIGN KEY (ForumID) REFERENCES forum(ForumID), 
    FOREIGN KEY (CustomerID) REFERENCES customer(CustomerID)
)";

//Execute all query 

if ($connects->query($customer) === TRUE) {
    echo "<center>Table customer created successfully</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($course) === TRUE) {
    echo "<center>Table course created successfully</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($forum) === TRUE) {
    echo "<center>Table forum created successfully</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($payment) === TRUE) {
    echo "<center>Table payment created successfully</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($learnhistory) === TRUE) {
    echo "<center>Table learn history created successfully</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($chat) === TRUE) {
    echo "<center>Table chat created successfully</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}


//=========================================================================
// Fill some dummy data to DB - DML


//insert to table customer
$custTB = "INSERT INTO customer (CustomerEmail, CustomerUsername, CustomerPassword, CustomerFullname, CustomerMembership, CustomerAchievement, CustomerScore)
VALUES
('Tartarus@protonmail.com','Tartarus', 'asdf123', 'Yonathan Wieliem', 'Basic to Expert', 'supreme newbie', '1500'),
('Hildegard@gmail.com','Hildegarde', 'hilda', 'Hildegarde', 'Basic to Intermediate', 'newcomer', '450'),
('Thanatos@protonmail.com','Thanatos', 'akashaa', 'Akasha', 'Basic to Expert', 'supreme newbie', '1000'),
('Akashiya@yokai.edu','Cute Vampire', 'vamp123', 'Akashiya Moka', 'Basic to Intermediate', 'newcomer', '650'),
('ShuzenKahlua@gmail.com','Shuzen', 'Kahlua123', 'Kahlua Shuzen', 'Basic to Expert', 'supreme newbie', '1250'),
('admin@admin.com', 'admin', 'admin', 'admin', 'not enrolled', 'just an admin', '9999')
";

//insert to table course
$courseTB = "INSERT INTO course (CourseName, CourseDifficulty, CoursePoint, CourseCategory, CourseTrainer , CourseFlag)
VALUES
('Basic Forensics', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{This is called Steganography - insertion method}'),
('File Forensic', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{file extensions is a lie}'),
('Crypto Forensics', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{know_more_crypto_in_forensics}'),
('Text Forensics', 'Beginner', '200', 'Forensic', 'Yohan', 'SFG{[gibberish_is_simple_to_analyzed]}'),
('Secure Web Programming', 'Intermediate', '550', 'Web', 'J.Andrew', 'SFG{[gibberish_is_simple_to_analyzed]}'),
('Intro to Cryptography','Beginner', '200', 'Cryptography', 'Yonathan Wieliem','SFG{[gibberish_is_simple_to_analyzed]}')
";

//insert to table forum
$forumTB = "INSERT INTO forum(ForumTitle, ForumDatetime, CustomerID)
VALUES
('What is The difference between cryptography and steganography?', '2019-04-10 14:23:45', '3'),
('How substitution cipher works?', '2019-05-12 20:21:12', '2'),
('What is Binary Exploitation?', '2019-03-12 23:32:43', '1')
";

//insert to table payment
$paymentTB = "INSERT INTO payment(PaymentID,PaymentDatetime,PaymentPacket,CustomerID,CardNumber,CardExpiration,CardCVV,CardOwner)
VALUES
('1','2019-02-10 12:56:42', 'Basic to Intermediate', '4', '1234567890', '12/24', '123', 'Akashiya Moka')
";

//insert to table learnhistory
$historyTB = "INSERT INTO learnhistory(CourseStatus, CourseID, CustomerID)
VALUES
('Active', '1', '5'),
('Active', '2', '5'),
('Active', '3', '5'),
('Active', '4', '5'),
('Active', '5', '5'),
('Active', '1', '3'),
('Active', '2', '3'),
('Active', '3', '3'),
('Active', '4', '3'),
('Active', '5', '3'),
('Active', '1', '1'),
('Active', '2', '1'),
('Active', '3', '1'),
('Active', '4', '1'),
('Active', '5', '1'), 
('Active', '1', '2'),
('Active', '2', '2'),
('Active', '3', '2'),
('Active', '4', '2'),
('Active', '1', '4'),
('Active', '2', '4'),
('Active', '3', '4'),
('Active', '4', '4')
";



//insert to table chat

$chatTB = "INSERT INTO chat(ChatText, ChatImage, ChatDatetime, ForumID, CustomerID ) 
VALUES
('https://techdifferences.com/difference-between-steganography-and-cryptography.html', '-', '2019-04-11 11:24:42', '1', '5'),
('http://practicalcryptography.com/ciphers/caesar-cipher/', '-', '2019-05-14 14:34:23', '2' , '2'),
('https://trailofbits.github.io/ctf/exploits/binary1.html', '-', '2019-03-13 13:23:56', '3', '1')
";



//Execute all query
if ($connects->query($custTB) === TRUE) {
    echo "<center>Insert data to table customer success</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($courseTB) === TRUE) {
    echo "<center>Insert data to table course success</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}

if ($connects->query($forumTB) === TRUE) {
    echo "<center>Insert data to table forum success</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}
if ($connects->query($paymentTB) === TRUE) {
    echo "<center>Insert data to table payment success</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}
if ($connects->query($historyTB) === TRUE) {
    echo "<center>Insert data to table learn history success</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}
if ($connects->query($chatTB) === TRUE) {
    echo "<center>Insert data to table chat success</center><br>";
} else {
    echo "Error creating table: " . $connects->error;
}
?>

