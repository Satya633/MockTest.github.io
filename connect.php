<?php

$host="localhost";
$user="root";
$pass="";
$db="test";
$conn=new mysqli($host,$user,$pass);
if($conn->connect_error){
echo "Failed to connect DB".$conn->connect_error;
}

$sql = "SHOW DATABASES LIKE '$db'"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $conn->select_db($db);

$table1_sql = "
CREATE TABLE IF NOT EXISTS data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    UID INT NOT NULL,
    ques1 INT NOT NULL,ques2 INT NOT NULL,
ques3 INT NOT NULL,ques4 INT NOT NULL,
ques5 INT NOT NULL,ques6 INT NOT NULL,
ques7 INT NOT NULL,ques8 INT NOT NULL,
    ques9 INT NOT NULL,ques0 INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$table2_sql = "
CREATE TABLE IF NOT EXISTS registration (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20),
    Email VARCHAR(30) NOT NULL,
    password VARCHAR(15) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($table1_sql) === TRUE) {
    echo "";
} else {
    echo "Error creating 'data' table: " . $conn->error . "<br>";
}

if ($conn->query($table2_sql) === TRUE) {
    echo "";
} else {
    echo "Error creating 'registration' table: " . $conn->error . "<br>";
}

} else {
    $sql = "CREATE DATABASE $db";
    if ($conn->query($sql) === TRUE) {
        echo "Database '$db' created successfully.";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}


?>


