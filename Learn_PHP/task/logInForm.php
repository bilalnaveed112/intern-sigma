<?php

session_start();

if(isset($_SESSION['email_id'])){
    header('location:welcome.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <link rel="stylesheet" href="task.css">
    <script src="logIn.js"></script>
    <title>Login Form</title>
</head>

<body>
    <table border="1"  cellspacing="0" cellpadding="10px">
        <tr>
            <th>
                <h1>SIGN IN </h1>
            </th>
        </tr>
        <tr>
            <td>
                <form id="logInForm">
                    <br>
                    Email : <input type="email" id="email" class= "inpt" name="email">&nbsp; &nbsp; &nbsp; &nbsp;
                    Password: <input type="password" name="pass" class= "inpt" id="pass"><br><br>
                    <input type="button"  id="logIn" class="btn-cls" value="Login">
            
                </form>
            </td>
        </tr>
    </table>

    <div class="errorMessage"></div>
    <div class="successMessage"></div>

</body>

</html>