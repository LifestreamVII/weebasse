<?php

try {
    
    $db = new \PDO("mysql:host=localhost;dbname=;charset=utf8", "", "", [
      PDO::ATTR_EMULATE_PREPARES => false, 
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]); 

} catch(\PDOException $e){
  echo "Error connecting to mysql: " . $e->getMessage();

}

?>
