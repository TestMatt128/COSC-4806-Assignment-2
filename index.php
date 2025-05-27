<?php

require_once('user.php');

$User = new User();
$User_List = $User->get_all_users();

echo "<pre>";
print_r($User_List);

?>