<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];
print_r($name);
echo "<br>";
print_r($email);
echo "<br>";
print_r($dob);
echo "<br>";
print_r($gender);
echo "<br>";
print_r($country);


$file_open = fopen("userdata.csv", "a");
  $no_rows = count(file("userdata.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'dob' => $dob,
   'gender' => $gender,
   'country' => $country
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for Registering</label>';
  $name = '';
  $email = '';
  $dob = '';
  $gender = '';
  $country = '';
 


 
?>