<?php
  // Insert Project
  function insertProject($name, $description, $deadline)
  {
      include 'db.php';
      $reponse = $bdd->prepare('INSERT INTO projects SET name = :name, description = :description, deadline = :deadline');
      return $reponse->execute(array(
      'name' => $name,
      'description' => $description,
      'deadline' => $deadline
    ));
  }
  // Insert list
  function insertList($project_id, $name)
  {
      include 'db.php';
      $reponse = $bdd->prepare('INSERT INTO lists SET project_id = :project_id, name = :name');
      $reponse->execute(array(
      'project_id' => $project_id,
      'name' => $name
    ));
  }
  // Insert tasks
  function insertTask($list_id, $name, $deadline, $checked, $project_id)
  {
      include 'db.php';
      $reponse = $bdd->prepare('INSERT INTO tasks(list_id, name, deadline, checked, project_id) VALUES (:list_id, :name, :deadline, :checked, :project_id)');
      $reponse->execute(array(
      'list_id' => $list_id,
      'name' => $name,
      'deadline' => $deadline,
      'checked' => 0,
      'project_id' => $project_id
    ));
  }
  // Display Project index.php
  function allProjects()
  {
      include 'db.php';
      $reponse=$bdd->query('SELECT * FROM projects ORDER BY deadline DESC LIMIT 0, 15');
      return $reponse->fetchAll();
  }
  // Display Project Project.php
  function getProject($project_id)
  {
      require 'db.php';
      $reponse = $bdd->prepare('SELECT * FROM projects WHERE projects.id = ?');
      $reponse->execute(array($project_id));
      return $reponse->fetch();
  }
  // Display Step Project.php
  function getProjectLists($project_id)
  {
      require 'db.php';
      $reponse =  $bdd->prepare('SELECT * FROM projects, lists WHERE lists.project_id = ? AND projects.id = lists.project_id');
      $reponse->execute(array($project_id));
      return $reponse->fetchAll();
  }

  function getList($list_id)
  {
      require 'db.php';
      $reponse = $bdd->prepare('SELECT * FROM lists WHERE lists.id = ?');
      $reponse->execute(array($list_id));
      return $reponse->fetch();
  }

  function getTask($list_id)
  {
      require 'db.php';
      $reponse = $bdd->prepare('SELECT * FROM tasks WHERE lists.id = ?');
      $reponse->execute(array($list_id));
      return $reponse->fetch();
  }

  // Display tasks Project.php
  function getListTasks($list_id)
  {
      require 'db.php';
      $reponse =  $bdd->prepare('SELECT * FROM lists, tasks WHERE tasks.list_id = ? AND lists.id = tasks.list_id');
      $reponse->execute(array($list_id));
      return $reponse->fetchAll();
  }
  // Delete tasks
  function deleteTask($task_id) {
    require 'db.php';
    $reponse =  $bdd->prepare('DELETE FROM tasks WHERE id = ?');
    $reponse->execute(array($task_id));
  }
  // Delete List ans Task
  function deleteList($list_id) {
    require 'db.php';
    $reponse =  $bdd->prepare('DELETE lists, tasks FROM lists LEFT JOIN tasks ON lists.id = tasks.list_id WHERE lists.id = ?');
    $reponse->execute(array($list_id));
  }
  // Delete all of project
  function deleteProject($project_id) {
    require 'db.php';
    $reponse =  $bdd->prepare('DELETE projects, lists, tasks FROM projects LEFT JOIN lists ON projects.id = lists.project_id  LEFT JOIN tasks ON lists.id = tasks.list_id WHERE projects.id = ?');
    $reponse->execute(array($project_id));
  }
