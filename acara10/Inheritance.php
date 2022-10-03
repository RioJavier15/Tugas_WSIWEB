<?php
//the parents class
class Car {
    // private property inside the class
    protected $model;
    // public setter method
    public function setModel ($model)
    {
        $this -> model = $model;
    }

    public function hello ()
    {
        return "beep! I am a <i>" . $this-> model . "</i><br />";
    }
}

class SportsCar extends Car {
//no code in the child class
}

//create an instance from the child class
$sportsCar1 = new SportsCar ();

//set the value of the class' property.
//for this aim, we use a method that we created in the parent
$sportsCar1 -> setModel('Mercedes Benz');

//use another method that the child class inherited from the parent class
echo $sportsCar1 -> hello();
?>