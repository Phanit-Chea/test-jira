<?php
session_start();
// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>
<?php require "../partials/head.php" ?>
<?php require "../../utils/url.php" ?>
<?php require "../partials/nav.php" ?>

<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/category/category.create.controller.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="description"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Category</button>
            </div>


        </form>
    </div>
</div>

<?php require "../partials/footer.php" ?>