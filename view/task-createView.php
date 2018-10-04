<?php
  // File for Header
  include 'template/header.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="project.php?project_id=<?php echo $_GET['project_id'] ?>">View project</a></li>
    <li class="breadcrumb-item"><a href="list.php?list_id=<?php echo $_GET['list_id'] ?>&project_id=<?php echo $_GET['project_id'] ?>">View Task</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add task</li>
  </ol>
</nav>
  <div class="container py-3">
    <div class="row d-flex justify-content-center">
      <div class="card card-outline-secondary bg-faded mt-5">
        <div class="card-header">
          <h3 class="mb-0">Create Task</h3>
        </div>
        <div class="card-block">
          <form class="form" method="post" action="">
            <div class="form-group">
              <label>Title of Task</label>
              <input type="text" class="form-control" name="name" required autofocus>
            </div>
            <div class="form-group">
              <label>Deadline</label>
              <input type="date" class="form-control" name="deadline" required>
            </div>
              <input type="hidden" class="form-control" name="list_id" required>
            <button type="submit" name="send" class="btn btn-success btn-lg float-right">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  // Add for Footer
  include 'template/footer.php';
