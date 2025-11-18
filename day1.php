<?php
echo "Hello","","World";
print "Hello World";

?>

<?php

$result = print "Hello";
echo $result;

?>

<?php
    function myfunction(){
    $var = "This is Local";
    echo $var;
    }
?>


<?php
function counter()
{
    static $count = 0;
    $count++;
    echo $count;
}
counter();
counter()
?>

<?php
function add($a,$b)
{
    echo $a + $b;
}
add(2, 5);

?>

<?php
$var = "This is Global";
function myfun()
{
    global $var;
    echo $var;
}
myfun();

?>

<?php

define("GREETING", "Welcome PHP");
echo GREETING;

?>


<?php

define("fruit", ["Apple", "Mango", "Kiwi"]);
echo fruit[0];

?>

<?php
$arr = array(10, 20, 30);
echo "First Element : $arr[0]";
echo "Second Element : $arr[1]";
echo "Third Element : $arr[2]";
?>
