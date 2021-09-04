<?php
    require("./app/session.php");
    require("partials/header.php");
    require("./app/pdo.php");
    $is_invalid = "is-invalid";
    $active = "active";
    $id_from = $_SESSION["id"];
    $id_to = $_GET["id"];

    # var_dump($_GET["id"]);

    $pdo_class = new pdo_class();
    $pdo = $pdo_class->getPDO();
    $stmt = $pdo->query('SELECT name,id FROM users');
//    while ($row = $stmt->fetch())
//    {
//        echo $row['name'] . "\n";
//    }



    ?>

  <div class="container">
      <div class="row mt-5">
          <div class="col-3">
              <div class="list-group">

                  <?php while ($row = $stmt->fetch()): ?>

                      <?php if ($row['id'] !== $id_from ): ?>
                          <a href="index.php?id=<?= $row['id']?> " class="list-group-item list-group-item-action"> <?=$row['name']?> </a>
                      <?php endif ?>

                  <?php endwhile ?>
              </div>
          </div>
          <div class="col-9">
              <div class="card">
                  <p class="card-header">Username</p>

                      <div class="card-body ">
                          <div class="pb-3">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <hr>
                          <div class="pb-3 text-end">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <hr>

                          <form method="post" action="./app/functions.php">
                              <textarea name="message" class="form-control" rows="4"  id="validationTextarea" placeholder="Ecrivez votre message ici" required></textarea>
                              <div class="invalid-feedback">
                                  Veuillez entrer un message.
                              </div>
                              <div class="text-end">
                                  <input type="submit" class="btn btn-primary mt-2" name="send" value="Envoyer"/>
                              </div>
                          </form>

                      </div>
              </div>
          </div>
      </div>
  </div>


<?php
require("partials/footer.php")
?>