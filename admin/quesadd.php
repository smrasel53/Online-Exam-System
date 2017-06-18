<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classess/Exam.php');
	$exam = new Exam();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$addQues = $exam->addQuestion($_POST);
	}

	// Get Total Question No
	$total = $exam->getTotalRows();
	$next  = $total + 1;
?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Add Question</span><hr style="margin-top:1px;">
			<?php 
				if (isset($addQues)) {
					?><div class='alert alert-success alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $addQues;?></div><?php
				}
			 ?>
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Add Question</div>
				<div class="panel-body">
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="quesno" class="col-sm-2 col-sm-offset-1 control-label">Question No: </label>
							<div class="col-sm-8">
								<input type="number" name="quesNo" id="quesno" class="form-control" value="<?php if ($next) { echo $next; } ?>">
							 </div>
						</div>
						<div class="form-group">
							<label for="ques" class="col-sm-2 col-sm-offset-1 control-label">Question: </label>
							<div class="col-sm-8">
								<input type="text" name="ques" id="ques" class="form-control" placeholder="Please enter question query" required>
							 </div>
						</div>
							<label for="ans" class="col-sm-2 col-sm-offset-1 control-label"></label>
							<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<input type="text" name="ans1" class="form-control" placeholder="Choice #1" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<input type="text" name="ans2" class="form-control" placeholder="Choice #2" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<input type="text" name="ans3" class="form-control" placeholder="Choice #3" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<input type="text" name="ans4" class="form-control" placeholder="Choice #4" required>
								</div>
							</div>
						</div>
						</div>
						<div class="form-group">
							<label for="rightAns" class="col-sm-2 col-sm-offset-1 control-label">Correct Ans: </label>
							<div class="col-sm-8">
								<input type="number" name="rightAns" id="rightAns" class="form-control" placeholder="Please enter correct ans number" required>
							 </div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-offset-1 control-label"></label>
							<div class="col-sm-8">
								<button type="submit" class="btn btn-success">Save</button>
							 </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?> 