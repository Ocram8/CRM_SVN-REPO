<?php
	// includes
	
	// Validaчуo dos dados
	$id		= $_POST[""];
	$nome 	= $_POST["name"];
	$email	= $_POST["email"];
	$foto	= $_POST["inputfile"];

	// Escrita na base de dados
	$db = new SimpleDBIConnection();
	$workers = new FuncionarioDAO(db);
	
	$func = new Funcionario();
	
	$func->setEstado("sss");
	
	
	$workers->insert_funcionario($func);
	
	
?>