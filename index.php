<?php
    $is_invalid = "is-invalid";
    $active = "active";
    require("partials/header.php");

    $host = 'localhost';
    $db   = 'message';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $id = $_GET["id"];
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
                  <a href="/Message?id=<?= $row['id']?> " class="list-group-item list-group-item-action"> <?=$row['name']?> </a>
                  <?php endwhile ?>
              </div>
          </div>
          <div class="col-9">
              <div class="card">
                  <p class="card-header">Username</p>
                  <form>
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

<!--                          <div class="">-->
<!--                          <label for="validationTextarea" class="form-label"></label>-->
                          <textarea class="form-control" rows="4"  id="validationTextarea" placeholder="Ecrivez votre message ici" required></textarea>
                          <div class="invalid-feedback">
                              Veuillez entrer un message.
                          </div>
<!--                          </div>-->


                      </div>
                      <div class=" px-3 pb-3 text-end">
                          <button type="submit" class="btn btn-primary mt-0">Envoyer</button>
<!--                          <a href="#" class="btn btn-primary ">Go somewhere</a>-->
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>


<?php
require("partials/footer.php")
?>