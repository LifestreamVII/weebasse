<?php
require('config.php');
if (isset($_POST['username'])){
  try{
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $stmt = $db->prepare("SELECT * FROM `users` WHERE username='$username' AND password='".hash('sha256', $password)."'");
  $stmt->execute();
  $count = $stmt->rowCount();
  $row   = $stmt->fetch(PDO::FETCH_ASSOC);
  if($count == 1 && !empty($row)) {
    session_start();
    $_SESSION['username'] = $row['username'];
    echo "Success";
  } else {
    echo "Failed";
  }
} catch (PDOException $e) {
  echo "Error : ".$e->getMessage();
}}
?>