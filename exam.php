<?php 
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/inc/header.php');
  Session::checkSession();
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Start Exam</span><hr style="margin-top:1px;">
			<div class="text-center">
        <h4>Thank you for attend the exam. You can start exam just press the exam button.</h4>
				<a href="starttest.php"><img src="img/start_exam.jpg" height="200" width="200"></a>
			</div>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
