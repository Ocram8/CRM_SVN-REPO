<?php
session_start();

if (!isset($_SESSION ['login']))
	header ( "Location: actions/login.php" );
	
if (!$_SESSION ['login'])
	header ( "Location: actions/login.php" );

require 'lang/pt_pt.php';
require 'container.php';

$page_version = "alfa v0.2";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang_type;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $lang_main_index_content;?>">

<title>
<?php
	echo $container["tabtitle"];
?>
</title>

<link rel="shortcut icon" href="../img/favicon.png">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="css/bootstrap/assets/js/html5shiv.js"></script>
<script src="css/bootstrap/assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php
	require 'header.php';
	require $container['page'];
	require 'footer.php';
?>
	<!-- Bootstrap core JavaScript
   ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="css/bootstrap/assets/js/jquery.js"></script>
	<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/offcanvas.js"></script>
</body>
</html>