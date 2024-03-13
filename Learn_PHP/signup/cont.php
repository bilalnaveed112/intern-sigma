<html>
<body>
    
<?php

$firstName = $_POST["firstName"];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$conn = new mysqli('localhost', 'root', '', 'signup');
if($conn->connect_error){
    die("connection Failed : " .$conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO signup(firstName,lastname,email,pass)
        values (?,?,?,?)");
        $stmt->bind_param("ssss", $firstName,$lastname, $email,$pass);
        $stmt->execute();
        echo "Registered Successfully";
        $stmt->close();
        $conn->close();
    }
    
?>


</body>
    </html>