<?php

require_once('config.php');

// Connect to the database and gain access to the list of users. If the database is down, return an error.
function db_connect(){
  try {
    $DBH = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_DATABASE, DB_USER, DB_PASS);
    return $DBH;
  } catch (PDOException $e) {
    // The global variable here should be set to know that the DB is down.
  }
}

?>