<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myTest";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
} 

// Create Database

$sql = "CREATE DATABASE IF NOT EXISTS myTest";
if($conn->query($sql)== TRUE){
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    } else {
      $sql1 = "CREATE TABLE IF NOT EXISTS Users (ID int(11) AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    pass varchar(10) NOT NULL
    )";
    // $conn->exec($sql1);
    if($conn->query($sql1) === TRUE) {
        echo "Tables are created<br>";
    } else {
        echo "Error" . $conn->error;
    }
    }
}else {
    echo "Error Creating Database".$conn->error."<br>";
}

// Data Insertion

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];


$duplicate=mysqli_query($conn,"SELECT * from users where  email='$email'");
if (mysqli_num_rows($duplicate)>0){
    echo '<script>alert("Email already exits")</script>';
} else {
    $sql = "INSERT INTO Users (firstName,lastName,email,pass) 
    VALUES('$firstName','$lastName','$email',$pass)";
    
    if ($conn->query($sql) === TRUE) {
              echo 1;
            } else {
              echo 0;
            }
}



$conn->close();
?>
