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
<?php require "views/partials/banner.php" ?>


  <main>
    <div class="p-3">
      <!-- Replace with your content -->
     <p>Hello Home</p>
      <!-- /End replace -->
    </div>
  </main>
  
<?php require "views/partials/footer.php" ?>
