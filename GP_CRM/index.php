<?php
session_start();
	
require 'lang/pt_pt.php';

//page selection
	if(isset($_GET['page']))
	{	
		if($_GET['page'] == 'home')
			$header_menu_page = 1;
		
		elseif($_GET['page'] == 'application')
			$header_menu_page = 2;
		
		elseif ($_GET['page'] == 'worker')
			$header_menu_page = 3;
		
		elseif ($_GET['page'] == 'personal')
			$header_menu_page = 4;
		
		elseif ($_GET['page'] == 'new_worker')
			$header_menu_page = 5;
		
		elseif ($_GET['page'] == 'update_worker')
			$header_menu_page = 6;
		
		elseif ($_GET['page'] == 'view_worker')
			$header_menu_page = 7;
		
		else
			$header_menu_page = -1;
	}
	else
		$header_menu_page = 1;
?>
<!DOCTYPE html>
<html lang="<?php echo $lang_type;?>">
<head>
<meta charset="uft-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $lang_main_index_text_1;?>">

<title>
<?php
	if($header_menu_page == 1)
		echo $lang_main_index_text_2;
	if($header_menu_page == 2)
		echo $lang_main_index_text_3;
	if ($header_menu_page == 3)
		echo $lang_main_index_text_4;
	if ($header_menu_page == 4)
		echo $lang_main_index_text_5;
	if ($header_menu_page == 5)
		echo $lang_main_index_text_6;
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
	if($header_menu_page == 1)
	{
		require 'admin/header.php';
		require 'admin/container.php';
	}
	
	elseif($header_menu_page == 2)
	{	
		require 'admin/header.php';			
		require 'admin/application/index.php';
	}
	
	elseif ($header_menu_page == 3)
	{	
		require 'admin/header.php';
		require 'admin/worker/index.php';
	}
	
	elseif ($header_menu_page == 4)
	{
		require 'admin/header.php';
		require 'admin/personal/index.php';
	}
	elseif ($header_menu_page == 5)
	{
		require 'admin/header.php';
		require 'admin/worker/insert.php';
	}
	elseif ($header_menu_page == 6)
	{
		require 'admin/header.php';
		require 'admin/worker/update.php';
	}
	elseif ($header_menu_page == 7)
	{
		require 'admin/header.php';
		require 'admin/worker/view.php';
	}
	else
	{	
		require 'admin/header.php';
		echo "<h4 class='container'>Page not found</h4>";
		require 'admin/container.php';
	}
	require 'admin/footer.php';
?>
	<!-- Bootstrap core JavaScript
   ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="css/bootstrap/assets/js/jquery.js"></script>
	<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="css/offcanvas.js"></script>
</body>
</html>