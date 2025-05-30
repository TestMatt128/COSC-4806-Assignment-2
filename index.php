<?php

require_once('user.php');

// Create a new user object and get the list of users currently in the table.
$user = new user();
$user_List = $user->get_all_users();

// Print the list of users to the screen.
echo "<pre>";
print_r($user_List);

?>