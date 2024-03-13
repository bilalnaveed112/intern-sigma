<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
    <style>
        p {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $_SESSION["favColor"] = "Green";
    $_SESSION["favAnimal"] = "Cat";
    echo "Session Color: ". $_SESSION["favColor"]."<br>";

//*********************************************************************** */

echo "<br><br>********************FILTERS********************<br><br>";

    $var = 45;

    var_dump(filter_var($var, FILTER_VALIDATE_INT));
    $option = array("options"=> array("min_range" => 15, "max_range" => 30));

    if(filter_var($var, FILTER_VALIDATE_INT,$option)){
        echo "<br> $var is integer";
    } else {
        echo "<br> $var is not integer<br>";
    }

    echo "<br><br>********************JSON********************<br><br>";

    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
    
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);
    
    foreach($arr as $key => $value) {
      echo  $key . " => " . $value . "<br>";
    }



    echo "<br><br>********************Exception - Try / Catch********************<br><br>";

    function divide($a , $b){

        if($a == 0 && $a < $b){
            throw new Exception("Divisio by Zero");
        } else {
            return $a / $b;
        }
    }
        try{
            echo divide(50, 25);
        }catch(Exception $ex){
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            // echo "<p>Unable to Divide. Please check again your equation<p>";
            echo "Exception thrown in $file on line $line: [Code $code]$message";
        }finally {
            echo "<h4>Process Completed.<h4>";
        }

        echo "<br><br>********************OOP-Class********************<br><br>";
    
        class fruits {
            public $name;
            public $color;

            function __construct($name, $color){            //Constructor
                $this->name = $name;
                $this->color = $color;
            }
            function getName(){
               return $this->name;
            }

            // function setColor($color){
            // }

            function getColor(){
                return $this->color;
            }
            function __destruct() {                           //Destructor
                echo "The fruit is {$this->name}.";
              }

        }

        $apple = new fruits("Apple","Red"); 
        // $apple->setName('Apple');
        // $apple->setColor('Red');

        // echo "Name is : ".$apple->getName()."<br>";
        echo "Color is : ".$apple->getColor()."<br>";
        var_dump($apple instanceof fruits);
        echo "<br>";

    ?>

</body>
</html>