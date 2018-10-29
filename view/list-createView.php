<?php
  // File for Header
  include 'template/header.php';
?>
 
 <!-- navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="project.php?project_id=<?php echo $_GET['project_id'] ?>">Project View</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create list</li>
  </ol>
</nav>

<!-- creating lists -->
  <div class="container py-3">
    <div class="row d-flex justify-content-center">
      <div class="card card-outline-secondary bg-faded mt-5">
        <div class="card-header">
          <h3 class="mb-0">Create List</h3>
        </div>
        <div class="card-block">
          <form class="form" method="post" action="">
            <input type="hidden" name="project_id" value="<?php echo $_GET['project_id'] ?>" required>
            <div class="form-group">
              <label>Title of list</label>
              <input type="text" class="form-control" name="name" required autofocus>
            </div>
            <button type="submit" name="send" class="btn btn-success btn-lg float-right">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  // Add for Footer
  include 'template/footer.php';
