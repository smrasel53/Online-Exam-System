<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	Session::checkSession();
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Show Score</span><hr style="margin-top:1px;">
			<div class="text-center">
				<h1>You are done !</h1>
				<h3>Congrats ! You have just completed the test.</h3>
				<h4>Final Score: <?php 
					if (isset($_SESSION['score'])) {
						echo $_SESSION['score'];
						unset($_SESSION['score']);
					}
				 ?></h4>
			<a href="viewans.php" class="btn btn-primary">View Answer</a>
			<a href="starttest.php" class="btn btn-info">Start Again</a>
			</div>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
