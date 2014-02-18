<?php
	// includes
	include("../../bd/simple_db.php");
	include("../objects/funcionario.class.php");
	include("../objects/pessoa.class.php");
	include("../objects/morada.class.php");
	include("../dao/dao_funcionario.class.php");
	include("../dao/dao_pessoa.class.php");
	include("../dao/dao_morada.class.php");

	// Validaчуo dos dados
	$id		= $_POST["id"];
	$nome 	= $_POST["name"];
	$email	= $_POST["email"];
	$foto	= $_POST["inputfile"];
	$permissoes = "00";

	// Escrita na base de dados
	$db = new SimpleDBIConnection();
	$dao_funcionario = new FuncionarioDAO(db);
	$dao_morada = new DAOMorada($db);
	$dao_pessoa = new PessoaDAO($db);
	
	$mor_id = $dao_morada->get_last_id() + 1;
	$morada = new Morada($mor_id, "", "", "");

	$pes_id = $dao_pessoa->get_last_id() + 1;
	$pes = new Pessoa($pes_id, $nome, 0, 0, "", "", "", "", "", $email, "", $foto, "", $morada);
	
	$num = $id + 1;
	$password = md5("teste");
	$data	= date();
	$func = new Funcionario($id	, $num, $email, $password, $permissoes, true, $data, $pes);
	
	$dao_funcionario->insert_funcionario($func);
	
?>