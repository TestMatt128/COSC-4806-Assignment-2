<?php

require_once('config.php')

function db_connect(){
  try {
    $DBH = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_DATABASE, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $DBH;
  }
}

?>