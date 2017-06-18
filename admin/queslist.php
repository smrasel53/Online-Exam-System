<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/header.php');
    include_once ($filepath.'/../classess/Exam.php');
    $exam = new Exam();

    if (isset($_GET['delques'])) {
    $quesNo = (int)$_GET['delques'];
    $delQus = $exam->delQuestion($quesNo);
  }
?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Manage Question</span><hr style="margin-top:1px;">
      <?php 
          if (isset($delQus)) {
            ?><div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $delQus;?></div><?php
          }
      ?>
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-cog" aria-hidden="true"></i> Manage Question</div>
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Sl</th>
								<th>Question</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
            <?php 
                $getData = $exam->getQuesByOrder();
                if ($getData) {
                  $i = 0;
                  while ($result = $getData->fetch_assoc()) {
                    $i++;
               ?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $result['ques']; ?></td>
								<td>
                  <a onclick="return confirm('Are you sure to remove?');" href="?delques=<?php echo $result['quesNo']; ?>" class="btn btn-danger btn-sm">Remove</a>
								</td>
							</tr>
              <?php } } else { ?>
                 <tr><td colspan="3" style="text-align:center"><?php echo "<b>Question Not Available !</b>"; ?></td></tr>
               <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php include 'inc/footer.php'; ?> 