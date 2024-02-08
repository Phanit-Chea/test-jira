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
<?php
require '../../database/database.php';
require '../../models/post.model.php';
$posts = getPosts();
?>
<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/project/project.update.controller.php" method="post">
            <input type="hidden" value="<?= $project['id'] ?>" name="id">
            <div class="form-group">
                <input type="text" placeholder="name" class="form-control" name="name" value="<?= $project['name'] ?>">
            </div>
            <div class="form-group">
                <label for="sel1">Select list:</label>

                <select class="form-control" id="sel1" name="post_id">
                    <option>Chose Post</option>
                    <?php foreach ($posts as $post) : ?>
                        <option value="<?= $post['id'] ?>" <?= ($post['id'] == $project['post_id']) ? 'selected' : '' ?>><?= $post['title'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Update Project</button>
            </div>
        </form>
    </div>
</div>

<?php require "../../views/partials/footer.php" ?>