<?php

$student_id = $_REQUEST['id'];


$conn = mysqli_connect("localhost","root","","mytest") or die("connnection Failed!");

$sql = "SELECT * FROM users WHERE ID ='$student_id' ";
$result = mysqli_query($conn, $sql) or die ("SQL Query Failed!");
$output = "";
if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
    <td>First Name</td>
    <td><input type='text' id='edit_fname' value = '{$row["firstname"]}'></td>
    <td><input type='text' id='edit_id' hidden value = '{$row["ID"]}'></td>
</tr>
<tr>
    <td>Last Name</td>
    <td><input type='text' id='edit_lname' value = '{$row["lastname"]}'></td>
</tr>
<tr>
    <td>Email</td>
    <td><input type='email' id='edit_email' value = '{$row["email"]}'></td>
</tr>
<tr>
    <td><input type='submit' id='edit_submit' value='Save'></td>
</tr>";
}
mysqli_close($conn);
echo $output;
} else {
    echo "<h2>No Record Found</h2>";
}


?>