<?php

$userID = $_POST["userID"];
$password = $_POST["password"];

if($userID == "JoaquinLopez" && $password == "123"){
  echo "<h1>Welcome</h1>";
} else {
  echo "Incorrect Log In";
}

?>