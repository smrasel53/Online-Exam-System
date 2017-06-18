<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/loginheader.php');
    include_once ($filepath.'/../classess/Admin.php');
    $ad = new Admin();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $adminData = $ad->getAdminData($_POST);
    }
?>
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <form class="sign-up" method="post">
        <h1 class="sign-up-title">Admin Login</h1>
        <input type="text" name="adminUser" class="sign-up-input" placeholder="Username" autofocus>
        <input type="password" name="adminPass" class="sign-up-input" placeholder="Password">
        <input type="submit" value="Login" class="sign-up-button">
        <br/>
          <?php 
          if (isset($adminData)) {
            ?>
            <br/>
            <div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $adminData; ?></div>
            <?php
          }
        ?>
      </form>
    </div>
  </div>
</div>
 <footer class="navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid text-center">
      <h4 style="color: #fff;font-size: 20px;padding: 10px;">Copyright &copy; Online Exam System. All Rights Revered.</h4>
    </div>
 </footer>
</body>
</html>


