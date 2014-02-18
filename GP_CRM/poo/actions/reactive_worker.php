<?php

//invocar ficheiros .php pretendidos
include("../../bd/simple_db.php");
include("../dao/dao_funcionario.class.php");
include("../objects/funcionario.class.php");

$db=new SimpleDBIConnection();
$estado=true;

$id = $_POST["id"];

$dao = new FuncionarioDAO($db);

$func = $dao->get_funcionario($id);

$func->setfunAtivo($estado);

$dao->update_funcionario($func);
?>