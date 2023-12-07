<?php
    class SimpleClass{
        private $user;
        private $game;

        function __construct($user, $game)
        {
            $this->user = $user;
            $this->game = $game;
        }

        function whoPlaysWhat(){
            return $this->user ." plays ". $this->game;
        }
    }

    $stringType = "slymee";
    $integerType = 911;
    $floatType = 6.9;
    $booleanType = false;
    $arrayType = array("Redragon", 999 , "Poco");

    $objectType = new SimpleClass("Slymee", "Dota 2");

    $nullType = null;

    var_dump($stringType);
    var_dump($integerType);
    var_dump($floatType);
    var_dump($booleanType);
    var_dump($arrayType);
    var_dump($objectType);
    var_dump($nullType);
    
?>