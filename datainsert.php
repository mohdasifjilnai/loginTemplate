<?php
include_once("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=($_POST['password']);
$hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO login VALUES (DEFAULT, '$name', '$email', '$mobile','$password')";
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>