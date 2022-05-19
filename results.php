<?php
  // If Button clicked
  if(isset($_POST['submit'])) {
    
      // Get Max and Min from user
      $minimum = $_POST['minimum']; 
      $maximum = $_POST['maximum'];

      // Initializes Variables
      $number = "";
      $counter = $minimum;

      if ($minimum == $maximum) {
       echo "<h5>Please enter in different numbers for each.</h5>";
    } else if ($minimum <= $maximum) {
        while (($counter >= $minimum) && ($counter <= $maximum)) {
        $number = $counter . "<br>";
        $counter = $counter + 1;
        echo $number;
      }
    } else  {
       echo "<h5>Please enter a minimum number smaller than maximum.</h5>";
    } 
  }
?>