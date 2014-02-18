<?php
class FuncionarioDAO
{
	public $funcionarios;
	public $bd;

	public function __construct($a_bd, $a_funcionarios=array())
	{
		$this->bd = $a_bd;
		$this->funcionarios = $a_pessoas;
	}

	public function insert_funcionario($funcionario)
	{
		$id				= $funcionario->getfunId();
		$numero 		= $funcionario->getfunNumero();
		$username		= $funcionario->getfunUsername();
		$password		= $funcionario->getfunPassword();
		$permissoes		= $funcionario->getfunPermissoes();
		$datainsercao	= $funcionario->getfunDataInsercao();
		$pessoa			= $funcionario->getfunPessoa();
		$ativo			= $funcionario->getfunAtivo();
		
			
		$bd = $this->bd;
			
		$dao_pessoa = new DAOPessoa($bd);
			
		$dao_pessoa->insert_pessoa($pessoa);
			
		$mor_id = $pessoa->getMorId();
			
		$sql = "INSERT INTO FUNCIONARIO (FUN_ID,
										FUN_NUMERO,
										FUN_USERNAME,
										FUN_PASSWORD,
										FUN_PERMISSOES,
										FUN_ATIVO,
										FUN_PESSOA,
										FUN_DATA_INSERCAO)
					VALUES (".$id.",'".$numero."',".$username.",".$password.",'".$permissoes."','".$ativo."','".$pessoa."','".$datainsercao."');";

		$result = $this->bd->query($sql);
	}

	public function get_funcionario($id)
	{
		$bd = $this->bd;

		$dao_pessoa = new DAOPessoa($bd);
			
		$sql = "SELECT	FUN_ID,
						FUN_NUMERO,
						FUN_USERNAME,
						FUN_PASSWORD,
						FUN_PERMISSOES,
						FUN_ATIVO,
						FUN_PESSOA,
						FUN_DATA_INSERCAO
					FROM FUNCIONARIO
					WHERE FUN_ID = ".$id.";";

		$result = $this->bd->query($sql);
			
		if($result->getNumRows() == 0) return 0;

		$row = $result->getNext();
			
		$pessoa = $dao_pessoa->get_pessoa($row[5]);
			
		$fun = new Funcionario($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$pessoa);

		return $fun;
	}

	public function get_all_funcionarios()
	{
		$bd = $this->bd;
			
		$dao_pessoa = new DAOPessoa($bd);
			
		$sql = "SELECT 	FUN_ID,
						FUN_NUMERO,
						FUN_USERNAME,
						FUN_PASSWORD,
						FUN_PERMISSOES,
						FUN_ATIVO,
						FUN_PESSOA,
						FUN_DATA_INSERCAO
					FROM FUNCIONARIO;";

		$result = $this->bd->query($sql);
			
		if($result->getNumRows() == 0) return 0;

		while($row = $result->getNext())
		{
			$pessoa = $dao_pessoa->get_pessoa($row[5]);

			$this->funcionarios[] = new Funcionario($row[0],$row[1],$row[2],$row[3],$row[4],$row[6],$row[7],$pessoa);
		}
			
		return $this->funcionarios;
	}

	public function get_last_id()
	{
		$sql = "SELECT MAX(FUN_ID)
					FROM FUNCIONARIO;";

		$result = $this->bd->query($sql);

		if($result->getNumRows() == 0) return 0;

		$row = $result->getNext();

		$id = $row[0];

		return $id;
	}

	public function update_funcionario($pessoa)
	{
		$id			= $funcionario->getfunId();
		$numero 		= $funcionario->getfunNumero();
		$username		= $funcionario->getfunUsername();
		$password		= $funcionario->getfunPassword();
		$permissoes	= $funcionario->getfunPermissoes();
		$datainsercao		= $funcionario->getfunDataInsercao();
		$pessoa	= $funcionario->getfunPessoa();
		$ativo	= $funcionario->getfunAtivo();
		
			
		$bd = $this->bd;
			
		$dao_pessoa = new DAOPessoa($bd);
			
		$dao_pessoa->update_pessoa($morada);

		$sql = "UPDATE PESSOA
					SET FUN_NUMERO='".$numero."',
						FUN_USERNAME=".$username.",
						FUN_PASSWORD=".$password.",
						FUN_PERMISSOES='".$permissoes."',
						FUN_ATIVO='".$ativo."',
						FUN_DATA_INSERCAO='".$datainsercao."'
					WHERE FUN_ID = ".$id.";";

		$result = $this->bd->query($sql);
	}

	public function search_funcionario($word,$type,$state)
	{
		$sql = "SELECT 	FUN_ID,
						FUN_NUMERO,
						FUN_USERNAME,
						FUN_PASSWORD,
						FUN_PERMISSOES,
						FUN_ATIVO,
						FUN_PESSOA,
						FUN_DATA_INSERCAO
					FROM FUNCIONARIO
					WHERE FUN_USERNAME LIKE '%".$word."%';";
		
		switch ($type)
		{
			case 1: $sql .= "WHERE FUN_NUMERO = ".$word;
					break;
			case 2: $sql .= "WHERE FUN_NOME LIKE '%".$word."%'";
					break;
			case 3: $sql .= "WHERE FUN_PERMISSÕES = ".$word;
					break;
		}
		
		if($state==1)
		{
			$sql .= "AND FUN_ATIVO = 1";
		}
		else
		{
			$sql .= "AND FUN_ATIVO = 0";
		}
			
		$result = $this->bd->query($sql);

		if($result->getNumRows() == 0) return 0;
			
		while($row = $result->getNext())
		{
			$pessoa = $dao_pessoa->get_pessoa($row[5]);
				
			$this->funcionarios[] = new Funcionario($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$pessoa);
		}

		return $this->funcionarios;
	}
}