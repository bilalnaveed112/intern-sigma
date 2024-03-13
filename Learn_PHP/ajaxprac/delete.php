<?php


$conn = mysqli_connect("localhost","root","","mytest") or die("connnection Failed!");

$id = $_REQUEST['ID'];
$sql = "DELETE FROM users WHERE ID ='$id' ";

if (mysqli_query($conn, $sql)) {
    echo 1;
  } else {
    echo 0;
  }

  $conn->close();

?>