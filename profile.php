<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	Session::checkSession();
	$userId = Session::get("userId");
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Profile</span><hr style="margin-top:1px;">
				<?php 
			 		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			 			$updateUser = $user->updateUserData($userId, $_POST);
			 			if (isset($updateUser)) {
			 				echo $updateUser;
			 			}
			 		}

			 		$getData = $user->getUserData($userId);
			 		if ($getData) {
			 			$result = $getData->fetch_assoc();
			 	 ?>
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-user" aria-hidden="true"></i> Profile</div>
				<div class="panel-body">
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="name" class="col-sm-2 col-sm-offset-1 control-label">Full Name: </label>
							<div class="col-sm-8">
								<input type="text" name="name" id="name" class="form-control" value="<?php echo $result['name']; ?>">
							 </div>
						</div>
						<div class="form-group">
							<label for="username" class="col-sm-2 col-sm-offset-1 control-label">Username: </label>
							<div class="col-sm-8">
								<input type="text" name="username" id="username" class="form-control" value="<?php echo $result['username']; ?>">
							 </div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Email: </label>
							<div class="col-sm-8">
								<input type="email" name="email" id="email" class="form-control" value="<?php echo $result['email']; ?>">
							 </div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label"></label>
							<div class="col-sm-8">
								<button type="submit" class="btn btn-success">Save Changes</button>
							 </div>
						</div>
					</form>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
 <?php include 'inc/footer.php'; ?>