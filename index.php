<?php

// If the user is not authenticated, redirect them to the login page. We must make sure that the user is authenticated before they can access the tables of users.
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true)
  header("Location: /login.php");

require_once('user.php');

// Create a new user object and get the list of users currently in the table.
$user = new user();
$user_List = $user->get_all_users();

// Print the list of users to the screen.
echo "<pre>";
print_r($user_List);

?>