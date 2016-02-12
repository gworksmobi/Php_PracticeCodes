<?php
class Car {
    function Car() {
        $this->model = "Audi";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>