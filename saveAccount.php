<?php

require_once('login.php');
// This file will be used to save the account information to the database.
// A combination of password hashing and salting will be used to store the password.

$password = password_hash($password, PASSWORD_DEFAULT);
$username = hash('sha256', $username)

// Insert the username and password into the database.

}
?>