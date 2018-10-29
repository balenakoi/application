<?php
  // File for Header
  include 'template/header.php';

?>

<!-- navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="project.php?project_id=<?php echo $_GET['project_id'] ?>">View project</a></li>
    <li class="breadcrumb-item active" aria-current="page">View task</li>
  </ol>
</nav>


<div class="container">
  <div class="card text-center mt-5">
    <div class="card-header h1"><?php echo $list['name']; ?></div>
      <div class="card-block">
        <div class="d-flex justify-content-center">
          <!-- Button Add Task -->
          <a href="../controller/task-create.php?list_id=<?php echo $_GET['list_id']; ?>&project_id=<?php echo $_GET['project_id'] ?>">
            <strong class="btn btn-primary mt-3">Add task</strong>
          </a>
        </div>
      </div>

  <div class="container px-5 mb-5">
    <!-- Boucle task -->
    <?php
      $donnee = getListTasks($_GET['list_id']);
    if (is_array($donnee)) {
      foreach ($donnee as $key => $value) {
    ?>
      <div class=" lists card mt-5">
        <div class="card-header">
          <div class="row">
            <h3>task: <?php echo $value['name']; ?> </h3> <br>

            <!-- buuton delet task -->
            <form action="" method="post">
              <input type="hidden" name="list_id" value="<?php echo $value['id']; ?>">
              <input type="submit" name="deletetask" value="Delete task" class="btn btn-danger ml-1">
            </form>
          </div>

          <div class="row">
          <h4>Limit date : <?php echo $value['deadline'];?></h4>
        </div>

        <!-- checkeing if it's done or not -->
        <form class="" action="veriftask.php?taskid=<?php echo $value['id']; ?>&project_id=<?php echo $_GET['project_id'] ?>&list_id=<?php echo $_GET['list_id'] ?>" method="post">
          <div class="row">
          <?php if ($value['checked'] == 1) {
            echo '<input type="checkbox" name="checked" checked>';
          } if ($value['checked'] == 0) {
            echo '<input type="checkbox" name="checked">';
          } ?>
        </div>
        <div class="row">
          <button type="submit" name="done">Done</button>
        </div>
      </form>
        </div>
      </div>
    <?php
      }
    }
    ?>
  </div>
</div>
</div>

  <?php
  // Add for Footer
  include 'template/footer.php';
