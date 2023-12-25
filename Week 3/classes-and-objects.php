<?php
    class ParentClass{
        protected $name;

        //constructor
        public function __construct($name)
        {
            echo "Creating instance of parent class<br>";
            $this->name = $name;
        }

        //class behavior
        public function sayMyName(){
            echo "My name is ". $this->name. "<br>";
        }

        //destructor
        public function __destruct()
        {
            "Destroying instance of parent class<br>";
        }
    }

    class ChildClass extends ParentClass{
        protected $game;

        //overriding parent constructor
        public function __construct($name, $game)
        {
            parent::__construct($name);
            echo "Creating instance of child class!<br>";
            $this->game=$game;
        }

        //overriding parent method
        public function sayMyName()
        {
            parent::sayMyName();
            echo "I play ". $this->game . "<br>";
        }

        //overriding parent destructor
        public function __destruct()
        {
            echo "Destroying instance of child class!<br>";
            parent::__destruct();
        }
    }

    $object = new ChildClass("Slymee", "Dota 2");
    $object->sayMyName();

    //check class and method existance 
    echo method_exists($object, 'sayName') ."...<br>";
    echo method_exists($object, 'sayMyName') ."<br>";
?>