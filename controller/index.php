<?php
  // File for function
  require '../model/data.php';

  // condition delete all project
  if (isset($_POST['sendProject']) AND isset($_POST['project_id']))
  {

    if (!empty($_POST['project_id']) AND !empty($_POST['sendProject']))
     {

      $deleteProject = deleteProject($_POST['project_id']);
    }
  }
  $donnee = allProjects();

  include '../view/indexView.php';
