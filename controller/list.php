<?php
include '../model/data.php';

// verifications  list_id available
$list = getList($_GET['list_id']);

// verification list exists
$tasks = getListTasks($_GET['list_id']);

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
include '../view/listView.php';
