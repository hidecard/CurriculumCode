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


<!-- Destructor -->
<?php
class Demo
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

$obj = new Demo();
?>


<!-- Inheritance -->
<?php
class ParentClass
{
    public $name = "Parent";

    public function showName()
    {
        return $this->name;
    }
}

class ChildClass extends ParentClass
{
    public function showChild()
    {
        return "Child class method";
    }
}

$obj = new ChildClass();
echo $obj->showName();
echo $obj->showChild();
?>

<!-- Overriding Parent Methods -->
<?php
class ParentCar
{
    public function speed()
    {
        return "Speed: 100 km/h";
    }
}

class ChildCar extends ParentCar
{
    public function speed()
    {
        return "Speed: 200 km/h";
    }
}

$car = new ChildCar();
echo $car->speed();
?>

<!-- Prevent Override Using final -->
<?php
class ParentCar
{
    final public function speed()
    {
        return "Speed: 150 km/h";
    }
}

class ChildCar extends ParentCar
{
    // annot override final method
}
?>

<!-- Encapsulation -->
<?php
class Student
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$s = new Student();
$s->setName("Mg Mg");
echo $s->getName();
?>

<!-- Abstract Class & Abstract Method -->
<?php
abstract class Car
{
    abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car
{
    public function calcNumMilesOnFullTank()
    {
        return 500;
    }
}

$honda = new Honda();
echo $honda->calcNumMilesOnFullTank();
?>

<!-- Interface -->
<?php
interface Animal
{
    public function sound();
}

class Dog implements Animal
{
    public function sound()
    {
        return "Woof!";
    }
}

$dog = new Dog();
echo $dog->sound();
?>

<!-- Multiple Interfaces -->
<?php
interface A
{
    public function aMethod();
}

interface B
{
    public function bMethod();
}

class Test implements A, B
{
    public function aMethod()
    {
        return "A method";
    }

    public function bMethod()
    {
        return "B method";
    }
}

$obj = new Test();
echo $obj->aMethod();
echo $obj->bMethod();
?>