<?php
session_start();
// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>
<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<a href="/views/category/category.create.view.php" class="btn btn-primary mt-2">Add Cagegory</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categories as $index => $category) : ?>
      <tr>
        <th scope="row"><?= $index+1 ?></th>
        <td><?= $category['name'] ?></td>
        <td><?= $category['description'] ?></td>
        <td>
          <a href="../../controllers/category/category.edit.controller.php?id=<?=$category['id']?>">edit</a> |
          <a href="../../controllers/category/category.delete.controller.php?id=<?=$category['id']?>">delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php require "views/partials/footer.php" ?>