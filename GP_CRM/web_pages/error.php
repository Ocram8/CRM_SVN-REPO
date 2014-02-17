<?php
session_start();

require '../lang/pt_pt.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang_type;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $lang_main_index_content;?>">

<title>
	<?php echo $lang_main_index_page_error; ?>
</title>

<link rel="shortcut icon" href="../img/favicon.png">

<!-- Bootstrap core CSS -->
<link href="../css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../css/bootstrap/assets/js/html5shiv.js"></script>
<script src="../css/bootstrap/assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div class='container'>
		<h3>
		<?php 
			if(isset($_SESSION['login']))
				echo $lang_main_index_page_error; 

			if(!isset($_SESSION['login']))
				echo $lang_main_index_page_noaccess;
		?>
		</h3>
		<a href="index.php">Return</a>
	</div>
</body>
</html>