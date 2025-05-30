<?php

require_once('user.php');

$user = new user();
$user_List = $user->create_user($username, $password);

?>

<DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        