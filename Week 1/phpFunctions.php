<?php       //this is php tag
    
    //This is PHP line comenting
    
    
    /*This 
    is php multiline
    comment.*/

    //User defiened PHP function
    
    //simple php function
    function sayHello(){
        echo "<h1>Simple Function</h1><br>";
        echo "hello there user!!";
        echo "<br><br>";
    }
    sayHello();


    //php function with argument
    function sayHelloUser($user){
        echo "<h1>Argument Function</h1><br>";
        echo "Hello there: ". $user;
        echo "<br><br>";
    }
    sayHelloUser("Slymee");


    //default argument value function
    function greetUser($name="Slymee"){
        echo "<h1>Default Argument Function</h1><br>";
        echo "Hello there: ". $name;
        echo "<br><br>";
    }
    greetUser();
    greetUser("MeeMee");


    //returning value function
    function addNumbers($numOne, $numTwo){
        echo "<h1>Returning Value Function</h1><br>";
        return ($numOne+$numTwo);
    }
    echo "Sum of 45 and 67: ".addNumbers(45,67);

?>