<?php

include 'connDataB.php';  

$firstName = $_REQUEST['first_name']; 
$email = $_REQUEST['email_id'];
$pass = $_REQUEST['pass_id'];


$duplicate=mysqli_query($conn,"SELECT * from stdentDb where  email='$email'");
if (mysqli_num_rows($duplicate)>0){
    echo 'Email already exits. Please try another';
} else {
    $sql = "INSERT INTO stdentDb (st_name,email,pass) 
    VALUES('$firstName','$email',$pass)";   
    if ($conn->query($sql) === TRUE) {
              echo 1;
            } else {
              echo 0;
            }
}

$conn->close();

?>