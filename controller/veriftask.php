<?php
include '../model/db.php';
if (!empty($_POST['checked'])) {
  $verif = $bdd->prepare('UPDATE tasks SET checked = 1 WHERE id = :taskid');
  $verif->execute(array(
  'taskid' => $_GET['taskid']
  ));
  header("location: list.php?list_id=" . $_GET['list_id'] . "&project_id=" . $_GET['project_id'] . "");
} else {
  $verif = $bdd->prepare('UPDATE tasks SET checked = 0 WHERE id = :taskid');
  $verif->execute(array(
  'taskid' => $_GET['taskid']
  ));
  header("location: list.php?list_id=" . $_GET['list_id'] . "&project_id=" . $_GET['project_id'] . "");
}
?>
