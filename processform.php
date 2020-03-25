<?php

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $track = $_POST['track'];
  $course = $_POST['course'];
  $phonenumber = $_POST['phonenumber'];
  $gender = $_POST['gender'];
  $message = $_POST['message'];

  echo "Successful";

$myfile = fopen("dejiiix.txt", "w") or die("Unable to open file!");
$txt = "$firstname $lastname\n$email\n$password\n$track\n$course\n$phonenumber\n$gender\nMessage: $message\n";
fwrite($myfile, $txt);
fclose($myfile);

?>