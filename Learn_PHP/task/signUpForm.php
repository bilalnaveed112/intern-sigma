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
    <link rel="stylesheet" href="task.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="singUPjq.js"></script>
    <title>Sign Up Form</title>
</head>

<body>

    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <th>
                <h1>CREATE ACCOUNT</h1>
            </th>
        </tr>
        <tr>
            <td>
                <form id="SignUpForm">
                    <br>
                    Name : <input type="text" class= "inpt" name="firstName" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Email : <input type="email" id="email" class= "inpt" name="email"><br>
                    Password: <input type="password" class= "inpt" name="pass" id="pass"><br><br>
                    <input type="button" id="saveBtn" class = "btn-cls" value="Save"><br><br>
                    Already Member. Click <a href="logInForm.php">Here</a> to Login
                </form>
            </td>
        </tr>
    </table>
    <div class="errorMessage"></div>
    <div class="successMessage"></div>

</body>
</html>
