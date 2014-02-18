<?php
	include("../../bd/simple_db.class.php");
	include("../dao/dao_funcionario.class.php");
	include("../objects/funcionario.class.php");
	
	$db=new SimpleDBIConnection();
	$estado=false;
	
	$id = $_POST["id"];
	
	$dao = new FuncionarioDAO($db);
	
	$func = $dao->get_funcionario($id);
	
	$func->setfunAtivo($estado);
	
	$dao->update_funcionario($func);
?>