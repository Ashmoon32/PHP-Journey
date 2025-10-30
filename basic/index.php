<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo strlen("Hello World"); // 11
?> 
<br> 
<?php
    echo strlen("ကခအ"); // will not get correct output
?> 
<br>
<?php
    $str = "A quick brown fox.";
    echo substr($str, 0, 7); // output - A quick
?> 
<br>
<?php 
    $str = "Come here, quick, quick.";
    echo str_replace("quick", "hurry", $str); // search and replace
?>
<br>
 <?php 
    $users = array("Alice","bob");

    $fruits = ["Apple","Orange"];

    echo $users;
    ?>
    <br>
    <?php

    print_r($fruits);

    var_dump($fruits);


 ?>
 <br>
 <?php 
    $users = [
        ["name" => "Win Kyi", "age" => 20],
        ["name" => "Ashmoon", "age" => 20],
        ["name" => "Nyein Maung", "age" => 20],
    ];

    print_r($users);
    echo "<br>Break<br>";
    var_dump($users);
    echo "<br>-----------------------------------------------------<br>";
    print_r($users[0]);
    echo "<br>-----------------------------------------------------<br>";
    echo $users[0]['name'];
     echo "<br>-----------------------------------------------------<br>";
     $Fruits = ['Apple','Orange'];
     $Fruits[4] = 'Banana';

     print_r($Fruits);
     ?>
     <br>
     <?php 
     $user = ["Alice", 20];

     list($name, $age) = $user;

     echo $name;

      echo "<br>-----------------------------------------------------<br>";

      // In modern 

      $user1 = ["Kyaw", 22];
      [$name, $age] = $user1;
      echo $name;
      echo $age;

       echo "<br>-----------------------------------------------------<br>";

       // for associative array

       $user = ["name" => "Alice", "age" => 22];
       ["name" => $name, "age" => $age] = $user;
       echo $name;

        echo "<br>-----------------------------------------------------<br>";

        // array spread 

        $nums1 = [1, 2];
        $nums2 = [...$nums1, 3];

        print_r($nums2);
         echo "<br>-----------------------------------------------------<br>";
 ?>
 <br>
 <?php 
 
    // Array Function

    $nums = [1, 2, 3, 4];
    echo count($nums); // 4

    echo"<br>-----------------------------------------------------<br>";

    $users = ["alice", "bob"];
    echo is_array($users); // check it is array or not ,if array return '1', if not empty

     echo "<br>-----------------------------------------------------<br>";

     echo in_array('bob', $users); // check 'bob' is exist in users array ,if exist retrun 1

      echo "<br>-----------------------------------------------------<br>";

      $users1 = ["tom", "bob", "alice"];

      echo array_search("alice", $users1); // not only check the value exist or not , if exit return index of that value .
      
        echo "<br>-----------------------------------------------------<br>";

      $users = ["alice", "bob"];

      array_push($users, "tom");

      print_r($users);

        echo "<br>-----------------------------------------------------<br>";

    array_pop($users);

    print_r($users);
    
      echo "<br>-----------------------------------------------------<br>";

      array_shift($users);

      print_r($users);

        echo "<br>-----------------------------------------------------<br>";

    array_unshift($users, "Han");

    print_r($users);
 ?>


</body>
</html>