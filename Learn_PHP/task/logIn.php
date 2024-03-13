<?php

session_start();


include 'connDataB.php'; 

$email = $_REQUEST['email_id'];
$pass = $_REQUEST['pass_id'];


$duplicate=mysqli_query($conn,"SELECT * from stdentDb where  email='$email' AND pass='$pass'");
if (mysqli_num_rows($duplicate)==TRUE){

    while($row = $duplicate->fetch_assoc()){
        $_SESSION['name'] = $row['st_name'];
        $_SESSION['email_id'] = $email;
       echo 1;
    }
} else {
    echo 0;
}


$conn->close();
?>