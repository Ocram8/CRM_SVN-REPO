<?php
session_start();

require '../lang/pt_pt.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Página de autenticação">

<title>CRM | Autenticação</title>

<!-- Bootstrap core CSS -->
<link href="../css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="container">
		<form class="form-signin" action="login.php" method="post">
			<h2 class="form-signin-heading">Autenticação</h2>
			
			<input class="form-control" type="text" name="email" placeholder="Correio eletrónico" title="Introduza o seu endereço de correio eletrónico" autofocus>
			<input class="form-control" type="password" name="password" placeholder="Palavra-passe" title="Introduza a sua palavra-passe de autenticação">
			
			<!--  
			<label class="checkbox"><input type="checkbox" value="remember-me">Lembra-te de mim</label> 
			<label><a>Esqueceu-se da palavra-passe?</a></label>
			-->
			
			<button class="btn btn-lg btn-primary btn-block" type="submit" title="Pressione para concluir a autenticação">Entrar</button>
		</form>
		
		<div class=form-signin>
			<h4>contas a testar:</h4>
			<p>admin admin</p>
			<p>worker worker</p>
		</div>
		
	</div>
	<!-- /container -->
</body>
</html>
<?php 
	if(isset($_POST['email']) && isset($_POST['password'])){
		if($_POST['email'] == 'admin' && $_POST['password'] == 'admin'){
			$_SESSION['login'] = true;
			$_SESSION['user'] = 'admin';
		}
		
		if($_POST['email'] == 'worker' && $_POST['password'] == 'worker'){
			$_SESSION['login'] = true;
			$_SESSION['user'] = 'worker';
		}
		header ( "Location: ../index.php" );
	}
?>
