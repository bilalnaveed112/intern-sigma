<?php

$search_bar = $_REQUEST["search"];

$conn = mysqli_connect("localhost","root","","mytest") or die("connnection Failed!");

$sql = "SELECT * FROM users WHERE firstname LIKE '%{$search_bar}%' OR lastname LIKE '%{$search_bar}%' OR email LIKE '%{$search_bar}%'  ";
$result = mysqli_query($conn, $sql) or die ("SQL Query Failed!");

$output = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
                ';
                while($row = mysqli_fetch_assoc($result)){
                    $output .= "<tr><td>{$row["ID"]}</td><td>{$row["firstname"]}</td><td>{$row["lastname"]}
                    </td><td>{$row["email"]}</td><td>{$row["pass"]}</td><td><button class='edit-btn' data-eid='{$row["ID"]}'>EDIT</button></td><td><button class='delete-btn' data-id='{$row["ID"]}'>Delete</button></td></tr>";            
                }
                $output .= "</table>";
                mysqli_close($conn);
                echo $output;
} else {
        echo "<h1>No Record Found</h2>";
}



?>