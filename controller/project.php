<?php
  include '../model/data.php';
  // condition delete all project
  if (isset($_POST['deleteproject'])) {
    if (!empty($_POST['project_id'])) {
      $deleteProject = deleteProject($_POST['project_id']);
      Header('Location: index.php');
    }
  }
  // condition delete tasks
  if (isset($_POST['list_id'])) {
    if (!empty($_POST['list_id'])) {
      $deleteSubStep = deletetask($_POST['list_id']);
    }
  }
  // condition delete lists
  if (isset($_POST['list_id'])) {
    if (!empty($_POST['list_id'])) {
      $deletelist = deletelist($_POST['list_id']);
    }
  }
  $donneesProject = getProject($_GET['project_id']);
  $donnee = getProjectLists($_GET['project_id']);

  include '../view/projectView.php';
