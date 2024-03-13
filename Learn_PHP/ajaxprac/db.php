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
// Data Insertion

$firstName = $_REQUEST['first_name']; 
$lastName = $_REQUEST['last_name'];
$email = $_REQUEST['email_id'];
$pass = $_REQUEST['pass_id'];




$duplicate=mysqli_query($conn,"SELECT * from users where  email='$email'");
if (mysqli_num_rows($duplicate)>0){
    echo 'Email already exits. Please try another';
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
