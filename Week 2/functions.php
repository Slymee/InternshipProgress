<?php
    //Return value form functions

    function returningFunction(){
        return "This is returning function ";
    }

    echo returningFunction(). "<br><br>";


    //variable scope
    function variableScope(){
        $variableScope = "local variable";
        echo "Variable 'variableScope' has value: ". $variableScope . "<br><br>";
    }

    echo "Variable 'variableScope' has value: ". $variableScope . "<br><br>";



    //using global keyword to access variable outside functions
    $globalVariable = "Type Global";

    function globalStatementAccess(){
        global $globalVariable;
        echo "variable outside the function can be accessed using 'global' keyword: ". $globalVariable. "<br><br>";
    }


    //pass arguments by values
    function argumentByValue($value){
        echo "Passed to function by value: ". $value ."<br><br>";
    }

    argumentByValue("Passed Value");

    //pass argumenents by reference
    function argumentByReference(&$value){
        echo "Reference: ". $value . "<br><br>";
    }

    $value="abcd";
    argumentByReference($value);


    //check function exists
    echo "variableScope exists: ". function_exists('variableScope'). "<br>";
    echo "variablescope exists: ". function_exists('variablescope'). "<br>";

?>