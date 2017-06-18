<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	Session::checkSession();
	$question = $exam->getQueation();
	$total    = $exam->getTotalRows();
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Start Exam</span><hr style="margin-top:1px;">
			<div class="text-center">
				<h1>Let's Start Exam</h1>
				<h3>Number of question: <span style="color:green;font-weight: bold"><?php echo $total; ?></span></h3>
				<p>Question type: Multiple Choice</p>
				<a href="test.php?q=<?php echo $question['quesNo']; ?>"><img src="img/start_button.png" height="120" width="100"></a>
			</div>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
