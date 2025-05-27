<?php

require_once('database.php');

Class User {
  public function get_all_users(){
    $DB = db_connect();
    $Statement = $DB->prepare("select * from users;");
    $Statement->execute();
    $Rows = $Statement->fetchAll(PDO::FETCH_ASSOC);
    return $Rows;
  }
}

?>