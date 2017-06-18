<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	Session::checkSession();

	if (isset($_GET['q'])) {
		$number = (int)$_GET['q'];
	} else {
		header("Location:exam.php");
	}
	$total    = $exam->getTotalRows();
	$Question = $exam->getQuestionByNumber($number);
 ?>

<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Exam Continue...</span><hr style="margin-top:1px;">
			<?php 
			 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			 		$process = $pro->processData($_POST);
			 	}
			  ?>
			<div class="text-center">
				<h2>Question <?php echo $Question['quesNo']; ?> of <?php echo $total; ?></h2>
			</div>
			<form method="post">
				<table> 
					<tr>
						<td colspan="2">
						 <h4>Ques <?php echo $Question['quesNo']; ?>: <?php echo $Question['ques']; ?></h4>
						</td>
					</tr>
					<?php 
						$answer = $exam->getAnswer($number);
						if ($answer) {
							while ($result = $answer->fetch_assoc()) {
					 ?>
					<tr>
						<td>
						 <input type="radio" name="ans" value="<?php echo $result['id']; ?>"/> <?php echo $result['ans']; ?>
						</td>
					</tr>
					<?php } } ?>

					<tr>
					  <td>
					  	<br/>
					  	<button type="submit" class="btn btn-success btn-sm">Next &rarr;</button>
						<input type="hidden" name="number" value="<?php echo $number; ?>"/>
					</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
