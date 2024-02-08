<?php
session_start();
// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>
<?php require "../../views/partials/head.php" ?>
<?php require "../../utils/url.php" ?>
<?php require "../../views/partials/nav.php" ?>

<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/category/category.update.controller.php" method="post">
            <input type="hidden" value="<?= $category['id'] ?>" name="id">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" name="name" value="<?= $category['name'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="description"><?= $category['description'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Update Category</button>
            </div>
        </form>
    </div>
</div>

<?php require "../../views/partials/footer.php" ?>