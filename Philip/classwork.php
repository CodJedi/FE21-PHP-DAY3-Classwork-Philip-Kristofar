<?php 
    require "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        # Exercise 1
        // Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop. 
        // echo "<h2 class='text-center'>For Loop</h2>";
        // for( $i=0; $i<50; $i++) {
        //     echo "$i Philip Mahlberg<br />";
        // }

        // $j = 0;
        // echo "<br /><h2 class='text-center'>While Loop</h2>";
        // while ($j < 50) {
        //     echo "$j Philip Mahlberg<br />";
        //     $j++;
        // }

        // $k = 0;
        // echo "<br /><h2 class='text-center'>Do While Loop</h2>";
        // do {
        //     echo "$k Philip Mahlberg<br />";
        //     $k++;
        // } while ($k < 50);

        # Exercise 2
        // Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element.
        // $num_array = [10,2,5,6,9,3,11,19,29,30]; 
        // foreach($num_array as $key => $val) echo $key." => ".$val."<br />";

        # Exercise 3
        // Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP.
        // function GetMaxValue($array) {
        //     $max_value = $array[0]; // 1
        //     foreach($array as $val) if ($val > $max_value) $max_value = $val;
        //     return $max_value;
        // }
        // function CreateRandomNumberArray($n, $min, $max) {        
        //     $array = [];
        //     for ($i = 0; $i<$n; $i++) $array[$i] = rand($min, $max);
        //     return $array;
        // }

        // $array = CreateRandomNumberArray(10, 1, 20);
        // // debug_to_console($array);
        // // print_r($array);
        // // echo formatted_dump($array);
        // echo GetMaxValue($array);

        # Exercise 4
        // Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
        // for ($i = 1; $i <= 100; $i++) {
        //     if ($i%15==0) echo "Full-Stack<br />";
        //     elseif ($i%3==0) echo "Back-End<br />";
        //     elseif ($i%5==0) echo "Front-End<br />";
        //     else echo $i."<br />";
        // }

    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>