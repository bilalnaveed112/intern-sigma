
<?php


$servername = "localhost";
$username = "root";
$password = "";

//Create Connection
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
} 

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS student";
if($conn->query($sql)== TRUE){
    // echo "Database Created Successfully";
    // Table Creation with Database
    $dbname = "student";
        $conn = new mysqli($servername, $username, $password,$dbname);
        if($conn->connect_error){
            die("Connection Failed: " . $conn->connect_error);
        } 
        $sql1 = "CREATE TABLE IF NOT EXISTS stdentDb (ID int(11) AUTO_INCREMENT PRIMARY KEY,
    st_name varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    pass varchar(10) NOT NULL
    )";
    if($conn->query($sql1) === TRUE) {
        echo "Tables are created<br>";
    } else {
        echo "Error" . $conn->error;
    }
}else {
    echo "Error Creating Database".$conn->error."<br>";
}



?>