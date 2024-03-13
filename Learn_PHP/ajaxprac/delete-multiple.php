
<?php

$conn = mysqli_connect("localhost","root","","mytest") or die("connnection Failed!");

$id = $_REQUEST['main_id'];
$str = implode(',',$id);
$sql = "DELETE FROM users WHERE ID IN ({$str}) ";

if (mysqli_query($conn, $sql)) {
    echo 1;
  } else {
    echo 0;
  }

  $conn->close();

?>