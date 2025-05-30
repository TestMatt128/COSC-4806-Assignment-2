<?php

require_once('user.php');

$user = new user();
$user_List = $user->create_user($username, $password);

?>

<DOCTYPE html>
<html>
    <head>
        <!-- The first thing we need to do is to implement the login. --> 
        <title>Login</title>
    </head>
    <body>
        <h1>New Account</h1>
        <form action="saveAccount.php" method="post">
        <label for=username>Username</label>
        <br>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
    </body>
    <footer>
</html>
        