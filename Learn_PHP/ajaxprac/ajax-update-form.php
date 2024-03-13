<?php

$student_id = $_REQUEST['id'];
$fname = $_REQUEST['first_name'];
$lname = $_REQUEST['last_name'];
$email = $_REQUEST['email_i'];

$conn = mysqli_connect("localhost","root","","mytest") or die("connnection Failed!");
$sql = "UPDATE users SET firstname ='$fname', lastname = '$lname', email = '$email' WHERE ID = '$student_id' ";

if (mysqli_query($conn, $sql)) {
    echo 1;
  } else {
    echo 0;
  }

  $conn->close();

?>