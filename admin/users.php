<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/header.php');
    include_once ($filepath.'/../classess/User.php');
    $user = new User();

    if (isset($_GET['dis'])) {
      $dblid = (int)$_GET['dis'];
      $dblUser = $user->disableUser($dblid);
    }

    if (isset($_GET['ena'])) {
      $eblid = (int)$_GET['ena'];
      $eblUser = $user->enableUser($eblid);
    }

    if (isset($_GET['del'])) {
      $delid = (int)$_GET['del'];
      $delUser = $user->deleteUser($delid);
    }
?>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<span style="font-size: 20px; font-weight: bold;">Manage User</span><hr style="margin-top:1px;">
      <?php 
        if (isset($dblUser)) {
            ?><div class='alert alert-warning alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $dblUser;?></div><?php
          } elseif(isset($eblUser)) {
            ?><div class='alert alert-success alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $eblUser;?></div><?php
          } elseif(isset($delUser)) {
            ?><div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><?php echo $delUser;?></div><?php
          }
      ?>
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-cog" aria-hidden="true"></i> Manage User</div>
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Sl</th>
								<th>Full Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
            <?php 
                $userData = $user->getAllUser();
                if ($userData) {
                  $i = 0;
                  while ($result = $userData->fetch_assoc()) {
                    $i++;
               ?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php echo $result['name']; ?></td>
								<td><?php echo $result['username']; ?></td>
								<td><?php echo $result['email']; ?></td>
								<td>
                  <?php if ($result['status'] == '0') { ?>
                      <a onclick="return confirm('Are you sure to disable?');" href="?dis=<?php echo $result['userId']; ?>" class="btn btn-warning btn-sm">Disable</a>
                      <?php } else { ?>
                      <a onclick="return confirm('Are you sure to enable?');" href="?ena=<?php echo $result['userId']; ?>" class="btn btn-success btn-sm">Enable</a>
                      <?php } ?>
                      <a onclick="return confirm('Are you sure to remove?');" href="?del=<?php echo $result['userId']; ?>" class="btn btn-danger btn-sm">Remove</a>
								</td>
							</tr>
              <?php } } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php include 'inc/footer.php'; ?> 