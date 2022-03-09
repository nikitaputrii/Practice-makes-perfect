<?php
    function announceRunning()
    {
      echo "The first function is running!\n";
      return "This is the return value of the first function.";
    }
     
    $first_result = announceRunning();
    echo $first_result;
/* Prints : 
The first function is running!
This is the return value of the first function. */


    function announceRunning2()
    {
    return "This is the return value of the second function.";
    echo "P.S., I love you";
    }
    
    $second_result = announceRunning2();
    echo $second_result;
/* Prints :
This is the return value of the second function. */


    function notFound()
    {
    return 404;
    echo "ERROR: Page not found!\n";
    }

    function greetLearner()
    {
    return "<3";
    echo "Hello, Learner!\n";
    echo "I hope you're (still) enjoying PHP!\n";
    echo "Love, Codecademy\n";
    }

    $error = notFound(); 
    $heart = greetLearner();

    echo "I received a $error, but it's ok because I also received $heart.";
/* Prints :
I received a 404, but it's ok because I also received <3. */


    function notFound()
    {
    echo "ERROR: Page not found!\n";
    return 404;
    }

    function greetLearner()
    {
    echo "Hello, Learner!\n";
    echo "I hope you're (still) enjoying PHP!\n";
    echo "Love, Codecademy\n";
    return "<3";
    }

    // Don't change the code below:

    $error = notFound(); 
    $heart = greetLearner();

    echo "I received a $error, but it's ok because I also received $heart.";
/* Prints :
ERROR: Page not found!
Hello, Learner!
I hope you're (still) enjoying PHP!
Love, Codecademy
I received a 404, but it's ok because I also received <3. */