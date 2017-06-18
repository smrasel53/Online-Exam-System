<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	Session::checkLogin();
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">User Login</span><hr style="margin-top:1px;">
			<?php 
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$email    = $_POST['email'];
					$password = $_POST['password'];
					$userlogin  = $user->userLogin($email, $password); 
					if (isset($userlogin)) {
						echo $userlogin;
					}
				}
			?>
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-sign-in" aria-hidden="true"></i> User Login</div>
				<div class="panel-body">
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Email: </label>
							<div class="col-sm-8">
								<input type="email" name="email" id="email" class="form-control" placeholder="Please enter your email address">
							 </div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 col-sm-offset-1 control-label">Password: </label>
							<div class="col-sm-8">
								<input type="password" name="password" id="password" class="form-control" placeholder="Please enter your password">
							 </div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label"></label>
							<div class="col-sm-8">
								<button type="submit" class="btn btn-primary">Login</button>
							 </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php include 'inc/footer.php'; ?>