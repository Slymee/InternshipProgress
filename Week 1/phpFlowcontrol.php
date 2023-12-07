<?php
// If statement
$marks = 69; 
if($marks != "Abs."):
    if($marks<33):
        echo "Failed!";
    elseif($marks>=33 && $marks<50):
        echo "D grade.";
    elseif($marks>=50 && $marks<65):
        echo "C grade.";
    elseif($marks>=65 && $marks<80):
        echo "B grade";
    elseif($marks>=80 && $marks<90):
        echo "A grade.";
    elseif($marks>=90 && $marks<=100):
        echo "A+ grade.";
    else:
        echo "Invalid Input!!!";
    endif;
endif;


?>