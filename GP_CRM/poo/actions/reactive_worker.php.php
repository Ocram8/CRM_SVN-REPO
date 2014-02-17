<?php

//invocar ficheiros .php pretendidos
include("GP_CRM/db/edb.class.php");
$db=new edb();
$estado="true";

	function __construct($db) {
		$this->edb = $db;
	}
	
	function desactive_worker($idfuncionario) {
		$this->edb->update ( "funcionario", array ("fun_ativo" => $estado), 
											array ("fun_id" => $idfuncionario) 
							);
	}

?>