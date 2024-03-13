<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<?php

echo "Today is " . date("Y-m-d") . "<br>";

$nameErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['fname'];
    if(empty($_POST['fname'])){
        $nameErr = "Please Enter a name<br>";
    }else{
        echo $name."<br>";
    }

}

?>

<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Name: <input type="text" name="fname">
    <span class="error">* <?php echo $nameErr;?></span>
<br>
    <input type="submit"><br>
</form>



<?php

$nameErr = "";
echo "<pre>";
print_r($_SERVER);
echo "</pre><br>";
echo $_POST['fname']."<br>";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_REQUEST['fname'];
    if(empty($_POST['fname'])){
        $nameErr = "Please Enter a name<br>";
    }else{
        echo $name."<br>";
    }

}

echo "**********************Variables**********************<br>";

    $name = "HP Probook";
    $model = 450;
    echo "<h1>" .$name.$model. "</h1>";  //Variables    

    define("test",50);  //Constant Variables
    echo test."<br>";

    define("cars",["Alfa Romeo", "BMW","Toyota"]);
    echo cars[1]."<br>";

    //**************************************************************** */
    echo "**********************Math Operations **********************<br>";
    $a = 5;
    $b = 3;
    $sum = "Sum is " .$a + $b."<br>";    //Math Operations
    $mul = "Mul is ".$a * $b."<br>";
    $sub = "Diff. is ".$a - $b."<br>";
    $per = "Div. is ".$a % $b."<br>";
    $expo = "Expo. is ".$a ** $b."<br>";
    echo $sum, $mul, $sub, $per, $expo;
    echo(sqrt(64)."<br>");
    echo(max(0, 150, 30, 20, -8, -200)."<br>");
    echo(abs(-6.7)."<br>");
    echo(round(0.60)."<br>");
    echo(rand()."<br>");
    echo(rand(10, 100)."<br>");

        //****************************************************************** */
        echo "**********************If Else Statement **********************<br>";
    if($a < $b){                // If Else Statement
        echo "2nd Variable is greater";
    } else if ($a == $b){
        echo "Both Variables are Equal";
    } else {
        echo "First Variable is greater"."<br>";
    };
    
    $result = 70;               // Switch Statement

    switch($result){
        
        case "$result < 85":
        echo "A+";
        break;
        case "$result < 70";
        echo "A";
        break;
        case "$result < 60";
        echo "B";
        break;

        default:
            echo "Failed!<br>";
    }

    //******************************************************* */
    echo "**********************Loop **********************<br>";

    for($x=0; $x<=10; $x++){      //for loop
        echo "Number is : $x <br>";
    }


    $colors = array("red", "green", "blue", "yellow");      //Foreach Loop
    foreach ($colors as $value){
        echo "$value <br>";
    }

    //************************************************************ */
    echo "**********************Functions**********************<br>";
    function sum($a, $b){            //functions
        echo $a + $b."<br>" ;
    }
    sum("10", "5");
    
    function add($mth, $eng, $sc){        //Return Value Function
        $s = $mth + $eng + $sc;
            return $s;
    }
    function per($st){
        $per = $st / 3;
        echo $per."%"."<br>";
    }
    $total = add(65,75,78);
    per($total);

    function testing(&$string){                 // Argument By Refernece
        $string .= "By Reference<br>";
    }
    $str = "This is Argument ";
    testing($str);
    echo $str;

    $sayHello = function ($name){             // Variable Functions
        echo "Hello $name"."<br>";
    };
    $sayHello("Variable Functions");
    
    function display($number){                 //Recursive Function
        if($number <= 5){
            echo "$number <br>";
            display($number + 1);
        }
    }
    display(1);

    //****************************************************************** */
    echo "**********************Arrays**********************<br>";

    $cars = array("VOLVO", "BMW", "AUDI", "HONDA", "TOYOTA");
    $arrLen = count($cars);
    for($i=0; $i<$arrLen; $i++){
        echo $cars[$i];
        echo "<br>";
    }

                // Multidimensional Arra
    $company = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("HONDA",25,29),
        array("Land Rover",17,15)
      );

      echo $company[0][0]." : In stock: ".$company[0][1].", sold: ".$company[0][2].".<br>";
      echo $company[1][0]." : In stock: ".$company[1][1].", sold: ".$company[1][2].".<br>";
      echo $company[2][0]." : In stock: ".$company[2][1].", sold: ".$company[2][2].".<br>";
      echo $company[3][0]." : In stock: ".$company[3][1].", sold: ".$company[3][2].".<br>";  

      for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$company[$row][$col]."</li>";
        }
        echo "</ul>";
      }

      echo "**********************Super Globals**********************<br>";

      echo "********'GLOBALS'********<br>";

      $x = 25;
      $y = 45;

      function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
      }
      addition();
      echo $z."<br>";

      echo "********'SERVER'********<br>";

      echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";





?>
</body>
</html>