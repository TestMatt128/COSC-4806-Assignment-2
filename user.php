<?php

require_once('database.php');

Class user {
  
  public function get_all_users() {
    $db = db_connect();
    $statement = $db->prepare("select * from Users;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  // We'll implement this in conjunction with the login page.
  public function create_user($username, $password) {
    $db = db_connect();
    $statement = $db->prepare("Insert into Users... ");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  
}

?>