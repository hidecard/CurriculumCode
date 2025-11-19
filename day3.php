<?php 

    function hello(){ // define the function
    echo "Welcome to PHP";
    }
    //call the function
hello();

?>

<?php 

function add($num1 , $num2){
    $sum = $num1 + $num2;
    echo "The sun of the number is : $sum";
}
add(30, 20);
?>

<?php 

function hello(){
    return "Hello World";
}
hello();
?>


<?php 

function say($name = "Jhon"){
    echo "Hello $name <br>";
}
say();
say("Mg Mg");
say("Aung Aung")

?>


<?php 

function myfun($para,...$arr){
    echo $para . "<br>";
    echo implode($arr);
}
myfun("Jhon","Mg Mg","Aung Aung")

?>

<?php
$name = "Alice";
function greet(){
    global $name;
    echo "Hello" . $name;
    $age = 20;
    echo $age;
    echo "Hello" . $GLOBALS['name'];
}
greet();
?>

<?php

$string = "Hello, World!";
$substring = "World";
$position = strpos($string, $substring);
if($position !== false){
    echo "Sub String found at position :" . $position;
}else{
    echo "Sub String Not Found";
}

?>

<?php
$string = "Hello, World";
$substring = substr($string, 7, 5);
echo $substring;
?>

<?php
$string = "Hello, World";
$replace = "Universe";
$newString = str_replace("World", $replace, $string);
echo $newString;
?>

<?php
$array = array("Hello", "World");
$delimiter = ", ";
$string = implode($delimiter, $array);
echo $string;
?>

<?php
$array = array("Apple", "Banana", "Orange", "Grape");
$count = count($array);
echo "Number of Element in this array: " . $count;
?>


<?php
$number = array(1, 2, 3);
array_push($number, 4);
print_r($number);
?>

<?php
$fruit = array("Apple", "Mango", "Orange");
$latestFruit = array_pop($fruit);
echo "Latest fruit removed: " . $latestFruit . "\n";
print_r($latestFruit); 
?>


<?php
$array1 = array("apple","banana");
$array2 = array("orange", "grape");
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray)
?>



<?php 
$color = array("Red","Green","Yellow");
echo $color[0];
echo $color[1];
echo $color[2];
?>


<?php
$person = array("name" => "Jhon", "age" => 30, "city" => "Yangon");
echo $person['name'];
echo $person['city'];
echo $person['age'];
?>

<?php
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo $matrix[0][1];
echo $matrix[1][2];
?>


<?php
$fruit = array("Apple", "color" => "red", "Banana", "Orange" => "orange");
echo $fruit[0];
echo $fruit['color']
?>  


