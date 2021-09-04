<?php
require_once("partials/header.php");
?>

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center mt-4">
            <div class="col-8">
                <div class="card w-100">
                    <h5 class="card-header">Register</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-end">
                                <p class="form-label mt-3">Email Adress</p>
                                <p class="form-label mt-4">Password</p>
                            </div>
                            <div class="col-8 pe-5">
                                <form method="post" action="./app/functions.php">
                                    <input type="email" name="email" class="form-control mb-3">
                                    <input type="text" name="password" class="form-control mb-3">
                                    <input type="submit" class="btn btn-primary" value="Login" name="login"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
require_once("partials/footer.php");
?>
