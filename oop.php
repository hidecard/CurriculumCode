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