<?php

session_start();

$user_profile = $_SESSION['email_id'];

// If Login Sccessfuly then show email otherwise go to Login Form
if(isset($user_profile)){
    echo "Hi : ".$_SESSION['name']."<br>";  
    echo "Your Email Address is : ".$user_profile;  
    
}else {
    header('location:logInForm.php');  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="task.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Profile</title>
</head>
<body>
    <br>
    <br>
 <a href="logOut.php"><input type="submit" class="btn-cls" value = "LogOut"></a>
 <div class="successMessage"></div>
</body>
<script>
    $(document).ready(function () {

        $(".successMessage").html("Log In Successfully").slideDown(2000);
        $(".successMessage").slideUp(1000);

    });
</script>
</html>

