<?php
require("partials/header.php");
?>

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center mt-4">
            <div class="col-8">
                <div class="card w-100">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 text-end">
                                <p class="form-label mt-3">Name</p>
                                <p class="form-label mt-4">Email Adress</p>
                                <p class="form-label mt-4">Password</p>
                                <p class="form-label mt-4">Confirm Password</p>
                            </div>
                            <div class="col-8 pe-5">
                                <form method="post" action="./app/functions.php">
                                    <input type="text" name="name" class="form-control mb-3">
                                    <input type="email" name="email" class="form-control mb-3">
                                    <input type="text" name="password" class="form-control mb-3">
                                    <input type="text" name="confirmPassword" class="form-control mb-3">
                                    <input type="submit" class="btn btn-primary" value="Register" name="register" />
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
require("partials/footer.php");
?>

<!--<form>-->
<!--    <div class="row mb-3">-->
<!--        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="email" class="form-control" id="inputEmail3">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row mb-3">-->
<!--        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="password" class="form-control" id="inputPassword3">-->
<!--        </div>-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary">Sign in</button>-->
<!--</form>-->
