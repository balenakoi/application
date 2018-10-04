<?php
  // File for Header
  include 'template/header.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create project</li>
  </ol>
</nav>
  <div class="container py-3">
    <div class="row d-flex justify-content-center">
      <div class="card card-outline-secondary bg-faded mt-5">
        <div class="card-header">
          <h3 class="mb-0">Create Project</h3>
        </div>
        <div class="card-block">
          <form class="form" method="post" action="">
            <div class="form-group">
              <label>Title of Project</label>
              <input type="text" class="form-control" name="name" required autofocus>
            </div>
            <div class="form-group">
              <label>description of Project</label>
              <textarea name="description" rows="4" class="form-control"></textarea>
              <!-- <input type="text" class="form-control" name="description" required> -->
            </div>
            <div class="form-group">
              <label>Deadline</label>
              <input type="date" class="form-control" name="deadline" required>
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
