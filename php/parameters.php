<?php
    function sayCustomHello($name)
    {
    echo "Hello, $name!";
    };
     
    sayCustomHello("Aisle Nevertell"); // Prints: Hello, Aisle Nevertell!
     
    sayCustomHello("Codecademy learner"); // Prints: Hello, Codecademy Learner!

    function increaseEnthusiasm($str) {
        return $str . "!";
      }
      echo increaseEnthusiasm("hey, you"); //prints : hey, you!
    
    function repeatThreeTimes($tri){
        return $tri . $tri . $tri;
      }
      echo repeatThreeTimes("baby "); //prints: baby baby baby

/* Use echo to print the result of invoking your 
increaseEnthusiasm() with the result of invoking 
repeatThreeTimes() as the argument passed into 
increaseEnthusiasm(). You can choose any string you 
like for the argument to repeatThreeTimes() */

echo increaseEnthusiasm(repeatThreeTimes("baby")); //prints: oi oi oi !