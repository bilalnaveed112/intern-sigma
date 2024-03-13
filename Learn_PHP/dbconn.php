<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check Connection
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully<br>";


//Create Database

// $sql = "CREATE DATABASE myDB";
// if($conn->query($sql)== TRUE){
//     echo "Database Created Successfully<br>";
// }else {
//     echo "Error Creating Database".$conn->error;
// }

// $conn->close();



// sql to create table
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
    

// Data Insertion + Multi Data Insertion

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) 
// VALUES ('Jasamin','Sandlas','abc@gmail.com')";
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

$stmnt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
 VALUES (?,?,?)");
 $stmnt->bind_param("sss", $firstname, $lastname, $email);

// Prepare
//  $firstname = "Jasin";
//  $lastname = "Snathin";
//  $email = "jaisin@example.com";
//  $stmnt->execute();


// if ($conn->query($stmnt) === TRUE) {
//           echo "Data recorded successfully";
//         } else {
//           echo "Error " . $stmnt."<br>".$conn->error;
//         }




//Select and Where Statement
$stmnt = "SELECT id, firstname, lastname, email FROM MyGuests ORDER BY id ";
$result = $conn->query($stmnt);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. "   " . $row["lastname"]."      ".$row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Delete Record
$sql = "DELETE FROM MyGuests WHERE id = 13 ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

// Update Record
$sql = "UPDATE MyGuests SET lastname = 'Khan' WHERE id = 2 ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br>";
  } else {
    echo "Error updating record: " . $conn->error;
  }

$conn->close();




?>