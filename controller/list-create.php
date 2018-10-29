<?php
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

  include '../view/list-createView.php';
