<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Home Page</h1>
   <p>
    Total: <?php echo 1 + 2; ?>
   </p>
   
   <p>
    Total: 
    <?php 
        $num1 = 10;
        $num2 = 20;
        echo $sum = $num1 + $num2;
    ?>
    <br><hr>
    Total: <?= $sum ?>
   </p>

   <?php $hours = date('h') ?>
   <p>
    <?php 
        if( $hours < 6 || $housrs > 18 ) {
            echo "<b> Night Time! </b>";
        } else {
            echo "<b> Day Time! </b>";
        }
    
    ?>
   </p>
   <br><hr>

   <h1>Home Page</h1>
   <?php $hour = date('h'); ?>
   <p>
    <?php if( $hour < 6 || $hour > 18 ) { ?>
        <h1> Night Time! </h1>
    <?php } else { ?> 
    <h1> Day Time! </h1>
     <?php } ?> 
   </p>

   <hr>

   <p>
    <?php if( $hour > 6 || $hour < 18 ) : ?>
        <h2> Night Time! </h2>
    <?php else : ?>
        <h2> Day Time! </h2>
    <?php endif ?>
   </p>


   <?php
    $var;
    var_dump($var);

    $var = 123;
    var_dump($var);

    $var = "abc";
    var_dump($var);
   ?>


<?php 
define("AGE", 20);
 $name = "Ash";

 function Name() {
    global $name;
    echo "$name and ",AGE;
 }

Name();
echo isset($name);
?>

<br><br>
<hr>

<h3>
<?php 

$studentName = "Ashmoon";
$rollNo = 1;
$age = 20;
$passion = "Backend Development";
$schoolName = "Government Technical Institute";
$country = "Myanmar(Burma)";
$height = 6;

echo "$studentName is a student from $schoolName. $studentName is $age years old IT student from $country. He is roll-$rollNo in class and passionate in <i>$passion</i>. OHH!! Umnn yes and he is <h1>$height\"</h1> tall!😶";

?>
<br><hr>
<?php
echo '$studentName is a student from $schoolName. $studentName is $age years old IT student from $country. He is roll-$rollNo in class and passionate in <i>$passion</i>. OHH!! Umnn yes and he is <h1>$height\"</h1> tall!😶';

echo strlen($passion);

?>

</h3>

<p>
    <?php 
        $str = "Welcome to Adult World!";
        echo substr($str, 0, 7);
        echo "<div>----------------------------</div>";
        echo str_replace("Adult", "Teenage", $str);
    
    ?>
</p>

<br>
<hr>
<br>

<p>
    <?php 
        $user = array("Alice", "Bang");

        $fruit = ["Appale","Orange","Banana"];

        echo $user;

        print_r($fruit);

        var_dump($fruit);

        echo "<div>------------------------------------------------------------</div>";

        $users = ["Name" => "Ashmoon", "Age" => 20, "Gender" => "Male"];

        print_r($users);
    
    ?>
    </p>

    <br><hr><br>

<p>
    <?php 
                $users1 =[ 
                    ["Name" => "Ashmoon", "Age" => 20, "Gender" => "Male"],
                    ["Name" => "Ash", "Age" => 21, "Gender" => "Female"],
                    ["Name" => "Moon", "Age" => 22, "Gender" => "Male"],
                ];

                print_r($users1);

                print_r($users1[0]);

                echo $users1[0]['Name'];
                echo $users1[0]['Age'];
                echo "<div>-------------------------------------------</div>";
                echo $users1[0]['Gender'];
                echo $users1[2]['Gender'];

                echo "<div>-----------------------------------------------</div>";

                $users1[0]["School"] = "GTI";
                print_r($users1[0]);
                $users1[0][] = "Unknown";
                print_r($users1[0]);

                echo "<div>--------------------------------------</div>";

                $blabla = ["haha", "hehe", "huhu"];
                print_r($blabla);
                $blabla[] = "bubu";
                $blabla[10] = "humhum";
                $blabla[] = "eheh";
                print_r($blabla);

    
    ?>
</p>

 <br><hr><br>

<p>
      <?php 
        $student = ["Ashmoon", 20];
         [$name, $age] = $student;
         echo $name;
      ?>

      <br><hr>

      <?php 
            $abcd = ["name" => "blabla", "age" => 20];
            ["name" => $name, "age" => $age] = $abcd;
            echo $name;
      
      ?>
</p>
</body>
</html>