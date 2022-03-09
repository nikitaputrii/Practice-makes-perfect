<?php
    function countdown() 
    {
      echo "4, 3, 2, 1, ";
      return "blastoff!";
    }

    $return_value = countdown(); // Prints: 4, 3, 2, 1, 
    echo $return_value; // Prints: blastoff!
?>

<?php

    function printStringReturnNumber() {
    echo "take me home";
    return 12;
  }

    $my_num = printStringReturnNumber(); // prints: take me home
    echo $my_num; // prints : 12