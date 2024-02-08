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
        <form action="../../controllers/user/user.create.controller.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <input type="password" placeholder="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <input type="text" placeholder="phone" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add User</button>
            </div>


        </form>
    </div>
</div>

<?php require "../partials/footer.php" ?>