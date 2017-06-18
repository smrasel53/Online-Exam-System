<?php 
    include_once ("../lib/Session.php");
    Session::checkAdminSession();
    include_once ("../lib/Database.php");
    include_once ("../helpers/Format.php");
    $db  = new Database();
    $fm  = new Format();

    /* For Cache-Control HTTP Headers */
    header("Cache-Control: no-store, no-cache, must-revalidate"); 
    header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
    header("Pragma: no-cache"); 
    header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
      Session::destroy();
      header("Location: login.php");
      exit();    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Exam System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- DataTables CSS -->
    <link href="datatables/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="datatables/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/2639247f0f.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Online Exam System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-modx" aria-hidden="true"></i> Modules <span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="users.php"><i class="fa fa-cog" aria-hidden="true"></i> Manage User</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="queslist.php"><i class="fa fa-cog" aria-hidden="true"></i> Manage Question</a></li>
           <li><a href="quesadd.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Question</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?php echo Session::get("adminUser"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>