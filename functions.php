<?php

function calculate_age($dob) {
  // $birth_date = explode('/', $string);
  // $age = date_diff(date_create($string), date_create(date("m-d-Y")));
  // echo "Current age is ".$age->format("%y");
  $interval = @date_diff(date_create($dob), date_create('today'));
  return $interval->format('Age: %y');
}

// a function for calculating how many years, months, and days ago the person was born 
function calculate_time_alive($dob) {
  $interval = @date_diff(date_create($dob), date_create('today'));
  return $interval->format('You\'ve been alive: %y years, %m months, %d days old.');
}

$time_alive = calculate_time_alive('18-7-2001');
// echo $result.'<br/>';

$age = calculate_age('18-7-2001');
// echo $result;
?>
