// without 
<?php
    $first_player_rank = "Beginner"; 
    $second_player_rank = $first_player_rank; 
    echo $second_player_rank; // Prints: Beginner
     
    $first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
    echo $second_player_rank; // Still Prints: Beginner
?>

// with =&
<?php
    $first_player_rank = "Beginner";
    $second_player_rank =& $first_player_rank; 
    echo $second_player_rank; // Prints: Beginner
     
    $first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
    echo $second_player_rank; // Prints: Intermediate
?>

//example
<?php
    <?php 
      $very_bad_unclear_name = "15 chicken wings";
    
      $order =& $very_bad_unclear_name;
      $order .= "and 15 colas";
        
      echo "\nYour order is: $very_bad_unclear_name."; // Prints : Your order is: 15 chicken wingsand 15 colas.
    