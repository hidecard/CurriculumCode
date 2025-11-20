<?php
class phone
{
    public $brandname;
    public $color = "Black";
    public function call()
    {
        return "Hello";
    }
}
?>


<?php

class Customer
{
    public $name;
    public function getName()
    {
        return $this->name;
    }
}
$newCustomer = new Customer();
$newCustomer->name = "YHA";
echo $newCustomer->getName();
?>

<?php
class Car
{
    public $model;
}

?>




<?php
class Car
{
    private $model;
    public function getmodel()
    {
        return "The car is model : " . $this->model;
    }
}
$mercedes = new Car();
$mercedes->model = "Mercedes";
//echo $mercedies->getmodel();
?>

<?php
class Myclass
{
    private $property;
    public function __construct($initialValue)
    {
        $this->property = $initialValue;
        echo "Construct called with initialValue : $initialValue\n";
    }
    public function getproperty()
    {
        return $this->property;
    }
}
$obj = new Myclass("Hello World");
echo $obj->getproperty();
?>

<?php
class Car
{
    private $model = "";
    public function __construct($model = null)
    {
        if ($model) {
            $this->model = $model;
        }
    }
    public function getcarModel()
    {
        return "This car model is : " . $this->model;
    }
}
$car1 = new Car();
echo $car1->getcarModel()
    ?>

<?php
class Myclass
{
    public function __construct()
    {
        echo "Constructor called<br>";
    }

    public function __destruct()
    {
        echo "Destructor called";
    }
}

$obj = new Myclass();
?>


