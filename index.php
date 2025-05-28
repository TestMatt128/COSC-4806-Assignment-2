<?php

require_once('user.php');

$user = new user();
$user_List = $user->get_all_users();

echo "<pre>";
print_r($user_List);

?>