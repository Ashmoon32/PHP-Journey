<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing & Practice | PHP</title>
    <link rel="shortcut icon" href="./mylove.jpg" type="image/x-icon">
    <style>
        body {
            background: url("mylove.jpg");
            font-size: 1.5rem;
            color: red;
        }
    </style>
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
        
        $x = 3;
        $y = $x--;
        echo "<br>".$x."<br>";
        echo "<br>".$y."<br>";

        $x = 3;
        $y = --$x;
        echo "<br>".$x."<br>";
        echo "<br>".$y."<br>";

        echo 5 == "5";
        echo 5 != "6";
        echo 5 === "5";

        echo 5 <> 6;

        echo "<br>---<br>";

        echo 5 <=> 4;
        echo "<br>---<br>";
        echo 5 <=> 5;
        echo "<br>---<br>";
        echo 5 <=> 6;
        echo "<br>---<br>";
        echo 5 !== 6;

        echo "<br>-----------------------------<br>";


        $x = 3;
        $y = 5;

        echo $x === $y || $x === 3;
        echo $x === $y or $x === 3;

        echo $x !== $y && $x === 3;
        echo $x !== $y and $x === 3;

        echo !($x === $y or $x === 3);
        echo !($x === $y and $x === 3);

        echo "<br>---------------------------------<br>";
        // xor
        echo $x < $y or $x === 3;
        echo $x < $y xor $x === 3;

        echo "<div>------------------------------</div>";

        $name = "";
        echo $name ? $name : "Unknown";

        echo "<div>------------------------------</div>";

        $name = "Alice";
        echo $name ? $name : "Unknown";

        # short hand

        echo "<div>------------------------------</div>";

        $name = "";
        echo $name ?: "Unknown";

        echo "<div>------------------------------</div>";

        $name = "Alice";
        echo $name ?: "Unknown";

        echo "<div>------------------------------</div>";

?>
<?php
        $name = "";
        echo isset($name) ? $name : "Unknown";

        echo "<div>------------------------------</div>";

        echo $name ?? "Unknown";

        echo "<div>------------------------------</div>";

        $result = "Alice";
        $name = "Ashmoon";
        $result ??= $name;
        echo $name;
        echo $result;
    ?>

</p>

<?php
    $time = date("h");

    if( $time > 6 && $time < 18) echo "Day Time!";

    else echo "Night Time!";

    echo "<div>--------------------------------</div>";

    $day = date('D');

    if($day === "Sun") {
        echo "Today is Sunday.";
    } else if($day === "Sat") {
        echo "Today is Saturday.";
    } else {
        echo "Today is weekend.";
    }

    echo "<div>--------------------------------</div>";

    $day = date('D');

    switch($day) {
        case 'Sun':
        case 'Sat':
            echo "Weekend!";
            break;

        case 'Fri':
            echo "TGIF";
            break;
        
        default :
            echo "Weekday";
    }

    echo "<div>--------------------------------</div>";

    $day = date('D');

    $result = match($day) {
        "Sat","Sun" => "Weekend",
        "Fri" => "TGIF",
         default => "Weekday",
    };

    echo $result;

    echo "<div>--------------------------------</div>";

    $num = [ 12, 42, -2, 8, 621];

    $i = 0;
    $result = 0;

    while ($i < count($num) ) {
        $result += $num[$i];
        $i++;
    }

    $result1 = array_sum($num);
    echo $result1;
    echo $result;

    echo "<div>--------------------------------</div>";

    $num = [12, 42, -2, 8, 621];

    $i = 0;
    $result = 0;

    while($i < count($num) ) {
        if($num[$i] < 0){
            $i++;
            break;
        }

        $result += $num[$i];
        $i++;
    }

    echo $result;

    echo "<div>--------------------------------</div>";

    $num = [12, 42, -2, 8, 621];

    $i = 0;
    $result = 0;

    do {
        $result += $num[$i];
        $i++;
    } while( $i > count($num));

    echo $result;

    echo "<div>--------------------------------</div>";

    $num = [1, 2, 3, 4, 5, -6];
    $result = 0;

    for($i = 0; $i < count($num); $i++) {
        $result += $num[$i];
    }

    echo $result;

    echo "<div>--------------------------------</div>";

    $nums = [1, 2, 3, 4, 5, -6];
    $result = 0;

    foreach($nums as $num) {
        $result += $num;
    }

    echo $result;

    echo "<div>--------------------------------</div>";

    $user = [ "Alice" => 20, "Bob" => 21];
    $result = [];
    $result1 = array_keys($user);

    foreach($user as $name => $point) {
        $result[] = $name;
    }

    print_r($result);
    print_r($result1);

    echo "<div>--------------------------------</div>";

    // function add($a, $b) {
    //     echo $a + $b;
    // }

    // add(1, 2);

    echo "<div>--------------------------------</div>";

    function add1($a,   ...$b) {
        print_r($b);
    }

    add1(1, 2, 3, 4, 5);

    echo "<div>--------------------------------</div>";

    # old way 

    function add2( ){
        $args = func_get_args();
        print_r($args);
    }

    add2(1, 2, 3, 4, 5);

    echo "<div>--------------------------------</div>";

    function add3(Array $nums): float {
        return array_sum($nums);
    }

    echo add3([1, 2]);

    echo "<div>--------------------------------</div>";

    function price( int | float $n) {
        return "Price is \$$n";
    }

    echo price(3.1);
    echo price(2);

    echo "<div>--------------------------------</div>";

    // Pass by Value
    $name = "Alice";
    function greet($n) {
        $n = "Bob";
        echo "Hello $n";
    }

    greet($name);
    echo "<div>--------------------------------</div>";
    echo $name;
    echo "<div>--------------------------------</div>";

    // Pass by Reference

    $name = "Alice";
    function greet1(&$n) {
        $n = "Bob";
        echo "Hello $n";
    }


        greet1($name);
        echo "<div>--------------------------------</div>";
        echo $name;
        echo "<div>--------------------------------</div>";

    function one(){
        function two() {
            echo "Hello World";
        }
        echo "Hello World....";
    }

    one();
    echo "<div>--------------------------------</div>";
    two();
    echo "<div>--------------------------------</div>";

    $name = "Alice";

    function hello() {
        global $name;
        $name = "Bob";
        echo $name;
    }

    hello();
    echo $name;

    echo "<div>--------------------------------</div>";

    // function ‌abcdefg($a, $b) {
    //     echo $a + $b;
    // }

    // $name12 = "abcdefg";
    // $name12(2 ,2);

    function addd($a, $b) {
    echo $a + $b;
    }
    $name = "addd";
    $name(1, 2);

    echo "<div>--------------------------------</div>";
    echo "<div>--------------------------------</div>";
    echo "<div>--------------------------------</div>";

    $num3 = [ 1, 2, 3, 4, 5];

    // function Two($n) {
    //     return $n * 2;
    // }

    // $result3 = array_map("Two", $num3);

    // print_r($result3);

    echo "<div>--------------------------------</div>";

    echo "hello world!";
?>

 <br><hr><br><hr><br><hr>

 <h1>Object Oriented Programming(OOP)</h1>

 <br><hr><br>

 <?php 
        class Animal {
            public $name;
                public function __construct() {
                    echo "Hello there...";
                }    

            static $type = "Mammal";

            static function info(){
                echo "Group:" . static::$type;
            }
        }

        echo Animal::$type;
        Animal::info();

        $dog = new Animal;

        // var_dump($dog);

        // $dog->name = "Boob";
        // $dog->run();


        class Animal2 {
            private $name;
                public function  __construct($name) {
                    $this->name = $name;
                }

                public function run() {
                    echo "$this->name is running...";
                }
        }

        $dog = new Animal2("Bob");

        $dog->run();

        class Animal3 {
            public function __construct(private $name) {

            }

            public function run() {
                echo "$this->name is running";
            }
        }

        $cat = new Animal3("Kel Kel");
        $cat->run();
 ?>

 <br><hr><br>

 <!-- OOP - Inheritance -->

    <?php 
            class Animal4 {
                private $name;
                
                public function __construct($name) {
                    $this->name = $name;
                }

                public function run() {
                    echo "$this->name is running...";
                }
            }

            class Dog2 extends Animal4 {
                public function bark() {
                    echo "Woof.. Woof...";
                }
            }

            $bob = new Dog2("Bobby");
            $bob->run();
            $bob->bark();
    
    ?>

    <br><hr><br>

    <?php
    
            class Animal6 {
                protected $name;

                public function __construct($name) {
                    $this->name = $name;
                }

                public function run() {
                    echo "$this->name is running..";
                }

            }

            class Dog extends Animal6 {

                public function bark() {
                    echo "$this->name is barking...";
                }
            }

            $dog = new Dog("Aung Net");
            $dog->run();
            $dog->bark();
    
    ?>


    <br><hr><br>

    <!-- PHP doesn't allow multiple inheritance like this 

    class Dog extends Animal, Mammal, Domestic -->

    <?php 
            class Animal5 {
                static function info() {
                    echo "Animal Class";
                }
            }

            class Dogg extends Animal5 {
                //
            }

            class Fox extends Dogg {
                //
            }

        Fox::info();
    ?>

    <br><hr><br>

    <?php 

        class Animal7 {
            protected $name;

            public function __construct($name) {
                $this->name = $name;
            }

            # if final, it doesn't accept to override.
            final public function run() {
                echo "$this->name is running...";
            }
        }

        class Dog3 extends Animal7 {

            private $color;     

            public function __construct($name, $color) {

                parent::__construct($name);
                $this->color = $color;
            }

            
            public function profile() {
                echo "$this->name has $this->color color.";
            }

        /*  public function run() {
                echo "The dog is running...";
            }
        */

        }

        $bobby = new Dog3("Bobby", "Black");
        $bobby->profile();
    
    ?>

   
    <br><hr><br>

     <!-- Abstract class -->
 
     <?php 
        
        // abstract class Animal8 {

        //     public abstract function talk();

        //     public function run() {
        //         echo "Running...";
        //     }
        // }

        // class Dog5 extends Animal8 {
            
        // }

        class Dog10 {
            public function run() {
                echo "The dog is running...";
            }
        }

        class Fish {
            public function swim() {
                echo "The fish is swimming...";
            }
        }

        function app(Dog10 $obj) {
            $obj->run();
        }

        app (new Dog10);
        // app (new Fish);
     
     ?> 

     <br><hr><br>

     <?php 
        interface Animal11 
        {
            public function move();
        }

        class Dog11 implements Animal11
        {
            public function move()
            {
                echo "The dog is running";
            }
        }

        class Fish2 implements Animal11 
        {
            public function move()
            {
                echo "The fish is swimming";
            }
        }

        function app2(Animal11 $obj)
        {
            $obj->move();
        }

        app2(new Dog11);
        app2(new Fish2);
     
     ?>

     <br><hr><br>

     <?php
     
        interface Animal12
        {
            public function move();
        }

        interface Livestock
        {
            public function isFriendly();
        }

        class Cow implements Animal12, Livestock 
        {
            public function move()
            {
                echo "The cow is walking...";
            }

            public function isFriendly()
            {
                return true;
            }
        }
     ?>

     <br><hr><br>

     <?php

        trait Math 
        {
            public function add6($a, $b) 
            {
                echo $a + $b;
            }
        }

        trait Area
        {
            private $PI = 3.142;

            public function circle($r)
            {
                echo $this->PI * $r * $r;
            }
        }

        class Calculator
        {
            use Math, Area;
        }

        $calc = new Calculator;
        $calc->add6( 1, 2);
        echo "<br>";
        $calc->circle(5);
     ?>

     <br><hr><br>

        <!-- Megic Method -->

    <?php
        
        class Maths 
        {

            private $PI = 3.142857;

            public function __toString()
            {
                return "PI = $this->PI";
            }

            public function __get($name)
            {
                echo "Cannot get $name!";
            }

            public function __set($name, $value)
            {
                echo "Cannot set $name with $value!";
            }

            public function __call($name, $args)
            {
                echo "Method $name doesn't exists!";
            }

            static function __callStatic($name, $args)
            {
                echo "Static method $name doesn't exists!";
            }

            public function __invoke()
            {
                echo "This is not a function!";
            }
        }

        $obj = new Maths;
        $obj->add();

        echo "<br><br>";

        Maths::add();

        echo "<br><br>";

        $obj();

        echo "<br><br>";

        $obj->PI;

        echo "<br><br>";

        $obj->PI = 3.142;

        echo "<br><br>";

        echo $obj;

    
    ?>

</body>
</html>