<?php
    function returnNothing() 
    {
      echo "I'm running! I'm running!\n";
    }
     
    $result = returnNothing(); // Prints: I'm running! I'm running!
     
    echo $result; // Nothing is printed

//Any function without a 'return' returns a special value 'NULL'