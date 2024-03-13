<?php

session_start();

$userLog = session_unset();
if(isset($userLog)){
    session_destroy();
    header('location:logInForm.php');
} else {
    
    header('location:welcome.php');
}

?>