<?php
include("../../password1/password.php");

  // DataBase
  try {
     $bdd = new PDO ('mysql:host=localhost;dbname=todo;charset=utf8', 'root', $password);
  } catch (Exception $e) {
      die('Error : '.$e->getMessage());
  }
