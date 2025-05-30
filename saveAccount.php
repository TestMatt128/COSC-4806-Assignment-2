<?php

require_once('login.php');
// This file will be used to save the account information to the database.
// A combination of password hashing and salting will be used to store the password. Also, it must be legit with no missing details.
if (password_verify($password, $password) == true){
  $password = password_hash($password, PASSWORD_DEFAULT);
  $username = hash('sha256', $username)
    }  else  {
      echo "Password is not valid, try again.";
    }
// Insert the username and password into the database.
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
}
?>