<!-- Creating Variables in PHP -->
<?php
$name = "my name is \"Zora\""; // using escape character \"example\"
$biography = "\n24 y.o" . "i live in indonesia";
$favorite_food = "\n" . "tur" . "duck" . "en";
?>
<!-- second course -->
 <?php
$name = "zora";
  $language = "indonesia";
  echo "my name is" . $name;
  echo "\nmy native language is" . $language;
  ?>
<!-- third course -->
<?php
// Fill in the blanks in the code below:
  $noun = "song";
  $adjective = "beautiful";
  $verb = "singing";

  echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";


//use {} to parse variable inside string

 echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";
?>
 <!-- fourth course reassigment variable -->

<?php
  $movie = "Fast 9";
// Add your code here:
$movie = "Fast 8";
$old_favorite = $movie;
$movie = "fast 6";

  echo "I'm a fickle person, my favorite movie used to be $movie.";
  
// Add a statement here:
  $movie = "fast 7";
  
  echo "\nBut now my favorite is $movie.";
  
// Add a statement below:
  echo "\n the unforgettable movie was $old_favorite";
  ?>
<!-- fifth course  concatenate variable assigment-->
 <?php
  echo "I'm going on a picnic!";

  $sentence = "\nI'm going on a picnic, and I'm taking apples";

  echo $sentence;

// Write your code below:
 $sentence .= ", beach";
 echo $sentence;

$sentence .= ", california";
echo $sentence;

?>
<!-- sixth course assign variable by reference -->
 <?php
/* Imagine a lot of code here */  
  $very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order =& $very_bad_unclear_name;
$order .= ", 2 big coke";
$order .= ", and one big bag takeaway";




    
  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";


    ?>