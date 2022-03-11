<?php
    function divide($num_one, $num_two)
    {
      return $num_one / $num_two;
    };
    echo divide(12, 3); // Prints: 4
    echo divide(3, 12); // Prints: 0.25

    function expectTwo($first, $second)
    {
    return "whatever";
    }
    echo expectTwo("test"); // Will result in an error

    function calculateArea($height, $weight){
        return $height * $weight;
    }
    echo calculateArea(9, 50); //prints : 450
    
    function calculateVolume($height, $width, $depth){
        return $height * $width * $depth;
    }
    echo calculateVolume(2, 3, 5); //prints : 30