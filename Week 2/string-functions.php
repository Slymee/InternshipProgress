<?php
    $firstString = " String Example ";
    $secondString = "Fruit Basket";



    //display string length
    echo strlen($firstString);
    echo "<br>";

    //first character uppercase
    echo ucfirst($firstString);
    echo "<br>";

    //first character lowercase
    echo lcfirst($firstString);
    echo "<br>";
    
    //convert to all uppercase
    echo strtoupper($firstString);
    echo "<br>";

    //convert to all lowercase
    echo strtolower($firstString);
    echo "<br>";

    //reversing string
    echo strrev($firstString);
    echo "<br>";

    //removing whitespaces from begining and end of string
    echo trim($firstString);
    echo "<br>";

    //left trim
    echo ltrim($firstString);
    echo "<br>";

    //right trim
    echo rtrim($firstString);
    echo "<br>";

    //splitting string
    echo str_split($secondString);
    echo "<br>";

    //remove html tags from string
    echo strip_tags("<strong>This is not bold<strong>");
    echo "<br>";

    //comparing two string returns 0 if equal, positive if first string greater, negative is second string greater
    echo strcmp($firstString, $secondString);
    echo "<br>";

    //comparing string but case insensitive
    echo strcasecmp($secondString, $firstString);
    echo "<br>";

    //natural order comparision
    echo strnatcmp($secondString,$firstString);

    //finding substring in a string
    echo strstr($firstString, "Example");
    echo "<br>";

    //finding string case insensitive
    echo stristr($secondString, "basket");


?>