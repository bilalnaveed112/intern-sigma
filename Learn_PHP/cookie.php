
<?php
    $cookie_name = "user";
    $cookie_value = "PHP Learning";
    setcookie($cookie_name, $cookie_value, time() + 60, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php

    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie is not set";
    } else {
        echo $_COOKIE[$cookie_name];
        echo "Cookie is set";
    }
    ?>
</body>
</html>  
