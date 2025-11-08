<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing & Practice | PHP</title>
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

<br><hr><br>

<p>
    <?php
        $user1 = [1,2];
        $user3 = [4, 5, 6];
        $user2 = [...$user1, 3, ...$user3];
        print_r($user2);

        echo "<div>------------------------</div>";

        echo count($user2);

        echo "<div>------------------------</div>";

        echo is_array($user2);

        echo "<div>------------------------</div>";

        echo in_array(5, $user2);

        echo "<div>------------------------</div>";

        echo array_search(3, $user2);

        echo "<div>------------------------</div>";

        array_push($user2, "blablabla");
        print_r($user2);

        echo "<div>------------------------</div>";

        array_pop($user2);
        print_r($user2);

        echo "<div>------------------------</div>";

        array_unshift($user2, "blablabla");
        print_r($user2);

        echo "<div>------------------------</div>";

        array_shift($user2);
        print_r($user2);

        echo "<div>------------------------</div>";

        $a = ["Alice", "Bob", "John"];
        $b = array_splice($a, 1, 1);
        print_r($b);
        print_r($a);

        echo "<div>------------------------</div>";

        $C = ["Name" => "Blablabla", "Age" => 20];

        $key = array_keys($C);
        $value = array_values($C);

        print_r($key);
        echo "<div>------------------------</div>";
        print_r($value);

        echo "<div>------------------------</div>";


        $Group = ["tom" => 23, "alice" => 25, "job" => 24];
        sort($Group);
        print_r($Group);
        echo "<div>------------------------</div>";


        $Group = ["tom" => 23, "alice" => 25, "job" => 24];
        rsort($Group);
        print_r($Group);
        echo "<div>------------------------</div>";


        $Group = ["tom" => 23, "alice" => 25, "job" => 24];
        ksort($Group);
        print_r($Group);
        echo "<div>------------------------</div>";


        $Group = ["tom" => 23, "alice" => 25, "job" => 24];
        krsort($Group);
        print_r($Group);
        echo "<div>------------------------</div>";

        $greetingStr = "Hello! I am Ashmoon...";
        $arr = explode(" ", $greetingStr);
        print_r($arr);

        echo "<div>------------------------</div>";

        $str = implode(" ",$arr);
        print_r($str);
        
        echo "<div>------------------------</div>";
        

 echo "<div>------------------------</div>";


        $data = ["Apple", "Orange"];
        $NAME = "Ashmoon";
        $greet = "Welcome";

        echo "Hello Worldddd";
        echo $NAME ." ". $greet;

        echo $data[0] . " and " . $data[1];

        echo $data[0], " and " , $data[1];

        echo "<div>-------------------------------</div>";

        echo 5 % 3;
        echo 5 ** 3;

        // Hello this is a comment
        /* Hello
        this is also
        a comment but with
        multiple lines
        */
        
        # This is another way for single line comment

        $num = 5;
        echo "<br>".$num."<br>";
        
        $num += 5; # 10
        echo "<br>".$num."<br>";

        $num -= 5; # 5
        echo "<br>".$num."<br>";

        $num *= 5; # 25
        echo "<br>".$num."<br>";

        $num /= 5; # 5
        echo "<br>".$num."<br>";

        $num %= 5; # 0
        echo "<br>".$num."<br>";

        $num = 5;
        $num **= 5;
        echo "<br>".$num."<br>";

        $greet = "Hello";
        $name = "Ashmoon";
        $blabla = "bla bla!";
        $space = " ";

        $greet .= $space;
        $greet .= $name;
        $greet .= $space;
        $greet .= $blabla;

        echo "<br>".$greet."<br>";

        $x = 3;
        $y = $x++;
        echo "<br>".$x."<br>";
        echo "<br>".$y."<br>";

        $x = 3;
        $y = ++$x;
        echo "<br>".$x."<br>";
        echo "<br>".$y."<br>";
        

    ?>
</p>
</body>
</html>