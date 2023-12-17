<?php
    //php array
    $simpleArray = array("just", "some", "string");
    $secondArray = ['second', 'array', 'example'];

    echo $simpleArray[0] .",". $simpleArray[1] .",". $simpleArray[2];
    echo "<br>";
    
    for($i = 0; $i < count($secondArray); ++$i) {
        echo "Value= " . $secondArray[$i];
        echo "<br>";
    }

    //associative array
    $associativeArray = [
        "Slymee" => "Dota 2",
        "En3x" => "CSGO",
        "St4rY" => "Valorant",
        "Slayer" => "PUBG",
    ];

    foreach ($array as $key => $value){
        echo "keys: ". $key ."Value: ". $value;
        echo "<br>";
    }


    //multi-dimension array
    $twoDArray = [
        ['two', 'dimension', 'array'],
        ['example', 'hello', 'there']
    ];


    for($i = 0; $i < count($twoDArray); ++$i) {
        for($j = 0; $j < count($twoDArray[$i]); ++$j) {
            echo "Value= " . $twoDArray[$i][$j];
            echo "<br>";
        }
    }
?>