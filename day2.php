<?php
$temp = 30;
if($temp>=30){
    echo "I want be stay at home";
}
?>

<?php
$mark = 40;
if(($mark % 2)==0){
    echo "Event";
}else{
    echo "Odd";
}
echo "<br>";
$wd = 20;
$salary = 200000;
$bonus = 20000;
$F = 500;
if($wd >= 30){
    echo "Your salary is : " . $salary . "<br>";
    echo "Your bonus is : " . $bonus . "<br>";
    echo "Your amount is : " . $salary + $bonus . "";
}else{
    echo "Your absent day is : " . 30 - $wd . "<br>";
    echo ($salary - ((30 - $wd) * ($salary / 30))) - ((30 - $wd) * $F);
}
?>

<?php
$mark = 80;
if($mark  == 100){
    echo "Your mark is " . $mark . "<br>";
    echo "Your the best student";
}else if($mark == 80){
    echo "Your mark is " . $mark . "<br>";
    echo "Your grade is A";
} else if ($mark == 60) {
    echo "Your mark is " . $mark . "<br>";
    echo "Your grade is B";
} else if ($mark == 40) {
    echo "Your mark is " . $mark . "<br>";
    echo "Your grade is C";
} else {
    echo "Your mark is " . $mark . "<br>";
    echo "You are fail";
}
?>


<?php
$mark = 80;

switch ($mark) {
    case 100:
        echo "Your mark is " . $mark . "<br>";
        echo "You are the best student";
        break;

    case 80:
        echo "Your mark is " . $mark . "<br>";
        echo "Your grade is A";
        break;

    case 60:
        echo "Your mark is " . $mark . "<br>";
        echo "Your grade is B";
        break;

    case 40:
        echo "Your mark is " . $mark . "<br>";
        echo "Your grade is C";
        break;

    default:
        echo "Your mark is " . $mark . "<br>";
        echo "You are fail";
        break;
}
?>

<h1>While Loop</h1>
<?php
echo 1;
echo "<br>";
echo 2;
echo "<br>";
echo 3;
echo "<br>";
echo 4;
echo "<br>";
echo 5;
echo "<br>";//Without looping
$num = 1;
while ($num <= 5) {
    echo $num . "<br>";
    $num++;
}
echo "<br>";
$num = 0;
while ($num <= 10) {
    echo "$num x 2 = " . ($num * 2) . "<br>";
    $num++;
}//With Looping
?>


<h1>For Loop</h1>
<?php
$x = 10;
for ($a = 1; $a < 10; $a++) {
    $y = $x * $a;
    echo "The value of number = $x x $a = $y <br>";
}
echo "<br>";
$arr = array("Apple", "Orange", "Grape");
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo "<br>";
}
?>