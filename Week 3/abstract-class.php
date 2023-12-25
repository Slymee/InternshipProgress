<?php
    abstract class Shape{
        abstract public function calculateArea();
    }

    //class extending abstract class
    class Circle extends Shape{
        private $radius;
        public function __construct($radius)
        {
            $this->radius=$radius;
        }

        public function calculateArea()
        {
            return pi()*pow($this->radius,2);
        }
    }

    $objectOfCircle = new Circle(7);
    echo "Area of Circle: ". $objectOfCircle->calculateArea();
?>