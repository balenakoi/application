<?php
  // File for function
  include '../model/data.php';
  if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $deadline = $_POST['deadline'];
      $list_id = $_GET['list_id'];
      $project_id = $_GET['project_id'];
      if (isset($list_id) and isset($name) and isset($deadline) and !empty($name) and !empty($list_id) and !empty($deadline)) {
          insertTask($list_id, $name, $deadline, $checked, $project_id);
          header("Location: list.php?list_id=" . $list_id . "&project_id=" . $project_id . "");
      }
    }


  // File for HTML and CSS
  include '../view/task-createView.php';
