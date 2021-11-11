<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day-3: Exrcises 1-4</title>
</head>
<body>
    

<!-- 
Exercise 1
Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop. -->

<table border="1">
    <tr>
        <th colspan="3"  style="background: gray; height: 70px;">EXERCISE 1: <i>Create 50 outputs per loop</i></th>
    </tr>
    <tr style="background: gray; height: 20px;">
        <th>FOR</th>
        <th>WHILE</th>
        <th>DO WHILE</th>
    </tr>
    <tr>
        <!-- FOR LOOP -->
        <td>
            <?php
            for($i = 0; $i < 50; $i++){
                $myName = "John Stewart";
                echo " <b style='color: red;'>". ($i + 1) . ". " . $myName . "</b><br>"; 
            }
            ?>
        </td>
        <!-- WHILE LOOP  -->
        <td>
            <?php
                $i = 1;
                while($i < 51){
                    $myName = "John Stewart";
                    echo " <b style='color: black;'>{$i}. {$myName} </b><br>"; 
                    $i++;
                }
            ?>
        </td>
        <!-- DO WHILE LOOP -->
        <td>
            <?php
            $l = 1;
                do
                {
                    $myName = "John Stewart";
                        echo " <b style='color: blue;'>{$l}. {$myName} </b><br>"; 
                    $l++;
                } while($l < 51);
            ?>
        </td>
    </tr>
    <tr></tr>
</table>
 <br>
 <br>



<!--
Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element. -->
<?php
echo "<div style='border: dashed 5px orange; padding: 10px 20px;'>";

$array = [1 => "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];

foreach ($array as $i => $val){
    echo "<br>{$i}. {$val}<hr>";
};
echo "<br></div>
<br>
<br>
<br>
<br>";
?>

<!--

Exercise 3
Create a function that will have a parameter. The argument given to that parameter should be an array. The function should return the highest value from the array. Try to create an array with at least 10 numbers created randomly. You may want to take a look at the rand() function from PHP. -->
<?php

echo "<br> <div style='background: limegreen; padding: 20px 40px'> <br><br>";
// predefined values
$a = mt_rand(1,100);
$b = mt_rand(1,100);
$c = mt_rand(1,100);
$d = mt_rand(1,100);
$e = mt_rand(1,100);
$f = mt_rand(1,100);
$g = mt_rand(1,100);
$h = mt_rand(1,100);
$i = mt_rand(1,100);
$j = mt_rand(1,100);
$k = mt_rand(1,100);
// my array
$arrayRand = [$a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l];

function findTheMax($param){
    foreach($param as $num => $val){
        echo "Value $num is <b>$val</b><br>";
    };
    // sparator
    echo "<hr>";
    // max of the array
    echo "<h4>The Maximum number in the array is <span style='color:red;'>" . max($param) . "</span></h4> <br><br><br>";
};
findTheMax($arrayRand);
echo "</div>";

?>
<!-- Exercise 4
Create a PHP program that iterates the integers from 1 to 100. For multiples of three print "Back-End" instead of the number and for the multiples of five print "Front-End". For numbers that are multiples of both three and five print "Full-Stack".
 -->

<?php
echo "<p style='background: lightblue; padding: 20px 30px;'> <br>";
for($i = 1; $i < 101; $i++){
    if($i % 15 == 0){
        echo "$i) <span style='color: violet;'>Full-Stack</span> <br>";
    } else if ($i % 5 == 0){
        echo "$i) <span style='color: red;'>Front-End</span> <br>";
    } else if ($i % 3 == 0){
        echo "$i) <span style='color: blue;'>Back-End</span> <br>";
    } else {
        echo "$i) $i<br>";
    }
}
echo "</p>";
?>

</body>
</html>