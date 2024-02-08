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
<a href="/views/user/user.create.view.php" class="btn btn-primary mt-2">Add Project</a>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $index => $user) : ?>
      <tr>
        <th scope="row"><?= $index+1 ?></th>
        <td><?= $user['email'] ?></td>
        <td><?= $user['phone'] ?></td>
        <td>
          <a href="">edit</a> |
          <a href="">delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?php require "views/partials/footer.php" ?>