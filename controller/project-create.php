<?php
  // verifactions for the name
  include '../model/data.php';
  if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $deadline = $_POST['deadline'];
      if (isset($name) and isset($description) and isset($deadline) and !empty($name) and !empty($description) and !empty($deadline))
      {
          $success = insertProject($name, $description, $deadline);
          if ($success) {
            header('Location: index.php');
          } else {
            setFlashError('parametre mauvais');
          }
      }
  } 
  include '../view/project-createView.php';
