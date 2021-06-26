<?php
    echo "<h1>Saka Sheriff Alade Task - Intern ID: SH-IT-56631.</h1>";

    echo "<hr />";
   
    // My name is Saka SHeriff Alade with Intern ID: SH-IT-56631.

    echo "QUESTION 1: Write a range function that takes two arguments, start and end, and returns " .
    "an array containing all the numbers from start up to (and including) end.";
    echo "<br />";
   
    echo "The answer = ";
        foreach(range($start = 1, $end = 10, 1) as $rangeOfNumber){
            
            echo "$rangeOfNumber,";
        }
    echo "<br />";
    
   
    echo "<p>";
    echo "QUESTION 2: write a sum function that takes an array of numbers and returns the sum of these numbers";
    echo "<br>";

    $testArray = array(1, 5, 10, 20, 30);
    $sum = array_sum($testArray);
    //echo $sum;

    echo "<br />";
    echo "The sum of the numbers = ".$sum;
    echo "<br />";

    
        
    
        


?>