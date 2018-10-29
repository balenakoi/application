  <?php
    // File for Header
    include 'template/header.php';
  ?>

<!-- navbar -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">View project</li>
    </ol>
  </nav>

  <!-- show projects -->
    <div class="container">
      <div class="card text-center mt-5">
          <p>Name :</p>
          <div class="card-header h1"><?php echo $donneesProject['name']; ?></div>
          <div class="card-block">
            <p>Description:</p>
            <h4 class="card-title"><?php echo $donneesProject['description']; ?></h4>
          </div>
          <div class="card-block">
            <p>Limit date :</p>
            <p class="card-text"><?php echo $donneesProject['deadline']; ?></p>
            <div class="d-flex justify-content-center">

              <!-- Button Add Project -->
              <a href="../controller/list-create.php?project_id=<?php echo $_GET['project_id']; ?>">
                <strong class="btn btn-primary mt-3">Add List</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container px-5 mb-5">

        <!-- Boucle list -->
        <?php
          foreach ($donnee as $donnees) {
        ?>
          <div class="card mt-5">
            <div class="card-header">
              <div class="row">
                <h3>List: <?php echo $donnees['name']; ?> </h3>

                <!-- button delete lists -->
                <form action="" method="post">
                  <input type="hidden" name="list_id" value="<?php echo $donnees['id']; ?>">
                  <input type="submit" name="deletlist" value="Delete List" class="btn btn-danger ml-1">
                </form>
              </div>
            </div>
            <div class="card-block">
                <div class="row m-1">
                  <div class="card m-1 mx-auto" style="width: 20rem;">
                  <?php
                  
                    // Boucle task
                    $donneestask = getListTasks($donnees['id']);
                    foreach ($donneestask as $key => $value) { ?>
                        <div class="card-block">
                            <div class="row">
                            <?php if ($value['checked'] == 1) {
                              echo $value['name'];
                              echo '<p>: task done</p>';
                            }
                            if ($value['checked'] == 0) {
                              echo $value['name'];
                              echo '<p>: task not realize</p>';
                            }
                            ?>
                        </div>
                      </div>
                  <?php
                    }
                  ?>
                  <a class="btn btn-primary" href="../controller/list.php?list_id=<?php echo $donnees['id'] ?>&project_id=<?php echo $_GET['project_id'] ?>">See More</a>
                </div>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>

  <?php
    // Add for Footer
    include 'template/footer.php';
