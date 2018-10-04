<?php
  // File for function
  include '../model/data.php';
  if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $project_id = $_POST['project_id'];
      if (isset($project_id) and isset($name)) {
          insertList($project_id, $name);
          header('Location: project.php?project_id='.$project_id);
      } else {
          # code...
      }
  } else {
      # code...
  }
  // File for HTML and CSS
  include '../view/list-createView.php';
