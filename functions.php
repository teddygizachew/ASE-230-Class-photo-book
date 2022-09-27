<?php

// function for calculating the age of an individual
// returns a string of formatted output
function calculate_age($dob) {
  // $birth_date = explode('/', $string);
  // $age = date_diff(date_create($string), date_create(date("m-d-Y")));
  // echo "Current age is ".$age->format("%y");
  $interval = @date_diff(date_create($dob), date_create('today'));
  return $interval->format('Age: %y');
}

// function for calculating how many years, months, and days ago the person was born 
// returns a string of formatted output
function calculate_time_alive($dob) {
  $interval = @date_diff(date_create($dob), date_create('today'));
  return $interval->format('You\'ve been alive: %y years, %m months, %d days old.');
}

?>
