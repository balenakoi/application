<?php
  // File for Header
  include 'template/header.php'; ?>

 <!-- navbar -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    </ol>
  </nav>
  <!-- Button Add Project -->
  <a href="../controller/project-create.php" class="d-flex justify-content-center">
    <strong class="btn btn-primary mt-3">Add Project</strong>
  </a>

  <!-- Boucle Projects -->
<?php
if (is_array($donnee)) {
 foreach ($donnee as $donnees) {
      ?>
    <div class="card text-center m-5">
        <p>Name :</p>
        <div class="card-header h1"><?php echo $donnees['name']; ?></div>
        <div class="card-block">
          <p>Description: </p>
          <h4 class="card-title"><?php echo $donnees['description']; ?></h4>
        </div>
        <div class="card-block">
          <p>Limit date :</p>
          <p class="card-text"><?php echo $donnees['deadline']; ?></p>
          <div class="d-flex justify-content-center">
            <a class="btn btn-primary mr-1" href="project.php?project_id=<?php echo $donnees['id']; ?>">See more</a>
            <!-- Button Delete Project -->
            <form action='' method="post">
              <input type="hidden" name="project_id" value="<?php echo $donnees['id']; ?>">
              <input type="submit" name="sendProject" value="Delete Project!" class="btn btn-danger mt-3 ml-1">
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
  }
  }
  // Add for Footer
  include 'template/footer.php';
?>
