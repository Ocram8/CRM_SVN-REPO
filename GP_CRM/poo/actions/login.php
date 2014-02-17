<?php
session_start ();
/*
//invocar ficheiros .php pretendidos
include("GP_CRM/db/edb.class.php");
include("poo/objects/administrador.class.php");
include("poo/objects/funcionario.class.php");
include("poo/objects/super_administrador.class.php");
include("poo/dao/dao_funcionario.class.php");
include("poo/dao/dao_administrador.class.php");
include("poo/dao/dao_super_administrador.class.php");
$db=new edb();
*/
require '../../lang/pt_pt.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Página de autenticação">

<title>CRM | Autenticação</title>

<!-- Bootstrap core CSS -->
<link href="../../css/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/signin.css" rel="stylesheet">

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

			<input class="form-control" type="text" name="email"
				placeholder="Correio eletrónico"
				title="Introduza o seu endereço de correio eletrónico" autofocus>
			<input class="form-control" type="password" name="password"
				placeholder="Palavra-passe"
				title="Introduza a sua palavra-passe de autenticação">

			<!--  
			<label class="checkbox"><input type="checkbox" value="remember-me">Lembra-te de mim</label> 
			<label><a>Esqueceu-se da palavra-passe?</a></label>
			-->

			<button class="btn btn-lg btn-primary btn-block" type="submit"
				title="Pressione para concluir a autenticação">Entrar</button>
		</form>

		<div class=form-signin>
			<h4>contas a testar:</h4>
			<p>admin admin</p>
			<p>worker worker</p>
		</div>

	</div>
	<!-- /container -->

<?php
//para teste
if(isset($_POST['email']) && isset($_POST['password'])){
	if($_POST['email'] == 'admin' && $_POST['password'] == 'admin'){
		$_SESSION['login'] = true;
		$_SESSION['user'] = 'admin';
	}

	if($_POST['email'] == 'worker' && $_POST['password'] == 'worker'){
		$_SESSION['login'] = true;
		$_SESSION['user'] = 'worker';
	}
	header ( "Location: ../../web_pages/index.php" );
}
//fecha para teste


//para funcionario
if(!empty($_POST['email']) && !empty($_POST['password'])){
	$funcionario = new Funcionario($db);
	session_start();
	$array_ut = $funcionario->check_login($_POST['email'], md5($_POST['password']));

	if(count($array_ut)>0){

		$_SESSION['idutilizador'] = $array_ut[0]['FUN_ID'];
		$_SESSION['pessoa'] = $array_ut[0]['FUN_PESSOA'];
		$_SESSION['username'] = $array_ut[0]['FUN_USERNAME'];
		$_SESSION['password'] = $array_ut[0]['FUN_PASSWORD'];
		$_SESSION['email'] = $array_ut[0]['FUN_PERMISSOES'];//...e mais
		
		$_SESSION['login'] = true;
		$_SESSION['user'] = 'worker';

		header ( "Location: ../web_pages/index.php" );
	}	

}elseif(!empty($_POST['email']) && !empty($_POST['password'])){
	$administrador = new Administrador($db);
	session_start();
	$array_ut = $administrador->check_login($_POST['email'], md5($_POST['password']));

	if(count($array_ut)>0){

		$_SESSION['idutilizador'] = $array_ut[0]['ADM_ID'];
		$_SESSION['pessoa'] = $array_ut[0]['ADM_PESSOA'];
		$_SESSION['empresa'] = $array_ut[0]['ADM_EMPRESA'];
		$_SESSION['username'] = $array_ut[0]['ADM_USERNAME'];
		$_SESSION['password'] = $array_ut[0]['UT_PASSWORD'];
		
		$_SESSION['login'] = true;
		$_SESSION['user'] = 'admin';

		header ( "Location: ../web_pages/index.php" );
	}
	
	}elseif(!empty($_POST['email']) && !empty($_POST['password'])){
	$super_administrador = new SuperAdministrador($db);
	session_start();
	$array_ut = $funcionario->check_login($_POST['email'], md5($_POST['password']));

	if(count($array_ut)>0){

		$_SESSION['idutilizador'] = $array_ut[0]['SUP_ID'];
		$_SESSION['pessoa'] = $array_ut[0]['SUP_PESSOA'];
		$_SESSION['username'] = $array_ut[0]['SUP_USERNAME'];
		$_SESSION['password'] = $array_ut[0]['SUP_PASSWORD'];
		
		$_SESSION['login'] = true;
		$_SESSION['user'] = 'super_admin';

		header ( "Location: ../web_pages/index.php" );

	}else{

		print ("<p class='erro'>Login inválido...</p>");
	}

	}else{
	if(!empty($_POST['username']) || !empty($_POST['password']))
		print ("<p class='erro'>Algum campo em falta...</p>");
}

?>

</body>	
</html>