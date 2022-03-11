<?php
/* We want to print "Hello, [name passed in]!" 
if an argument is provided, and "Hello, old chum!" 
only if no argument is passed in */

    function greetFriend($name = "old chum")
    {
      echo "Hello, $name!";
    };
     
    greetFriend("Marvin"); // Prints: Hello, Marvin!
     
    greetFriend(); // Prints: Hello, old chum!

/*
Write a function calculateTip() which takes a number representing
the total cost of a meal as its first argument. 
It should also take a second, optional argument—an integer 
representing the percent tip desired (eg. 25 will indicate a 25% 
tip should be calculated). If no second argument is passed in, 
the function should default to a 20% tip. The function should 
return the new total—the previous total plus the calculated tip.

For example:

calculateTip(100, 25) should return 125
calculateTip(100) should return 120
calculateTip(65, 15) should return 74.75 */

    function calculateTip($price, $tip = 20) {
    return $price * $tip / 100 + $price;
    }
    echo calculateTip(100, 25);
    echo calculateTip(100);