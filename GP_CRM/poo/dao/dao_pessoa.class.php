<?php
	class PessoaDAO
	{
		public $pessoas;
		public $bd;
		
		public function __construct($a_bd, $a_pessoas=array())
		{
			$this->bd = $a_bd;
			$this->pessoas = $a_pessoas;
		}
		
		public function insert_pessoa($pessoa)
		{
			$id			= $pessoa->getPesId();
			$nome 		= $pessoa->getPesNome();
			$nic		= $pessoa->getPesNic();
			$nif		= $pessoa->getPesNif();
			$dataNasc	= $pessoa->getPesDataNascimento();
			$sexo		= $pessoa->getPesSexo();
			$estCivil	= $pessoa->getPesEstadoCivil();
			$prof		= $pessoa->getPesProfissao();
			$tel		= $pessoa->getPesTelefone();
			$email		= $pessoa->getPesEmail();
			$titulo		= $pessoa->getPesTitulo();
			$foto		= $pessoa->getPesFotografia();
			$obs		= $pessoa->getPesObservacoes();
			$morada		= $pessoa->getPesMorada();
			
			$bd = $this->bd;
			
			$dao_morada = new DAOMorada($bd);
			
			$dao_morada->insert_morada($morada);
			
			$mor_id = $morada->getMorId();
			
			$sql = "INSERT INTO PESSOA (PES_ID,
										PES_NOME,
										PES_NIC,
										PES_NIF,
										PES_DATA_NASCIMENTO,
										PES_SEXO,
										PES_ESTADO_CIVIL,
										PES_PROFISSAO,
										PES_MORADA,
										PES_TELEFONE,
										PES_EMAIL,
										PES_TITULO,
										PES_FOTOGRAFIA,
										PES_OBSERVACOES)
					VALUES (".$id.",'".$nome."',".$nic.",".$nif.",'".$dataNasc."','".$sexo."','".$estCivil."','".$prof."',".
							$mor_id.",".$tel.",'".$email."','".$titulo."','".$foto."','".$obs."');";
				
			$result = $this->bd->query($sql);
		}
		
		public function get_pessoa($id)
		{
			$bd = $this->bd;
				
			$dao_morada = new DAOMorada($bd);
			
			$sql = "SELECT	PES_ID,
							PES_NOME,
							PES_NIC,
							PES_NIF,
							PES_DATA_NASCIMENTO,
							PES_SEXO,
							PES_ESTADO_CIVIL,
							PES_PROFISSAO,
							PES_MORADA,
							PES_TELEFONE,
							PES_EMAIL,
							PES_TITULO,
							PES_FOTOGRAFIA,
							PES_OBSERVACOES
					FROM PESSOA
					WHERE PES_ID = ".$id.";";
				
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
				
			$row = $result->getNext();
			
			$morada = $dao_morada->get_morada($row[8]);
			
			$pes = new Pessoa($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[9],$row[10],$row[11],$row[12],$row[13],$morada);
				
			return $pes;
		}
		
		public function get_all_pessoas()
		{
			$bd = $this->bd;
			
			$dao_morada = new DAOMorada($bd);
			
			$sql = "SELECT 	PES_ID,
							PES_NOME,
							PES_NIC,
							PES_NIF,
							PES_DATA_NASCIMENTO,
							PES_SEXO,
							PES_ESTADO_CIVIL,
							PES_PROFISSAO,
							PES_MORADA,
							PES_TELEFONE,
							PES_EMAIL,
							PES_TITULO,
							PES_FOTOGRAFIA,
							PES_OBSERVACOES
					FROM PESSOA;";
				
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
				
			while($row = $result->getNext())
			{
				$morada = $dao_morada->get_morada($row[8]);
				
				$this->pessoas[] = new Pessoa($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[9],$row[10],$row[11],$row[12],$row[13],$morada);
			}
			
			return $this->pessoas;
		}
		
		public function get_last_id()
		{
			$sql = "SELECT MAX(PES_ID)
					FROM PESSOA;";
				
			$result = $this->bd->query($sql);
				
			if($result->getNumRows() == 0) return 0;
		
			$row = $result->getNext();
		
			$id = $row[0];
		
			return $id;
		}
		
		public function update_pessoa($pessoa)
		{
			$id			= $pessoa->getPesId();
			$nome 		= $pessoa->getPesNome();
			$nic		= $pessoa->getPesNic();
			$nif		= $pessoa->getPesNif();
			$dataNasc	= $pessoa->getPesDataNascimento();
			$sexo		= $pessoa->getPesSexo();
			$estCivil	= $pessoa->getPesEstadoCivil();
			$prof		= $pessoa->getPesProfissao();
			$tel		= $pessoa->getPesTelefone();
			$email		= $pessoa->getPesEmail();
			$titulo		= $pessoa->getPesTitulo();
			$foto		= $pessoa->getPesFotografia();
			$obs		= $pessoa->getPesObservacoes();
			$morada		= $pessoa->getPesMorada();
			
			$bd = $this->bd;
			
			$dao_morada = new DAOMorada($bd);
			
			$dao_morada->update_morada($morada);
				
			$sql = "UPDATE PESSOA
					SET PES_NOME='".$nome."',
						PES_NIC=".$nic.",
						PES_NIF=".$nif.",
						PES_DATA_NASCIMENTO='".$dataNasc."',
						PES_SEXO='".$sexo."',
						PES_ESTADO_CIVIL='".$estCivil."',
						PES_PROFISSAO='".$prof."',
						PES_TELEFONE=".$tel.",
						PES_EMAIL='".$email."',
						PES_TITULO='".$titulo."',
						PES_FOTOGRAFIA='".$foto."',
						PES_OBSERVACOES='".$obs."'
					WHERE PES_ID = ".$id.";";
				
			$result = $this->bd->query($sql);
		}
		
		public function search_pessoa($word)
		{
			$sql = "SELECT 	PES_ID,
							PES_NOME,
							PES_NIC,
							PES_NIF,
							PES_DATA_NASCIMENTO,
							PES_SEXO,
							PES_ESTADO_CIVIL,
							PES_PROFISSAO,
							PES_MORADA,
							PES_TELEFONE,
							PES_EMAIL,
							PES_TITULO,
							PES_FOTOGRAFIA,
							PES_OBSERVACOES
					FROM PESSOA
					WHERE PES_NOME LIKE '%".$word."%';";
			
			$result = $this->bd->query($sql);
				
			if($result->getNumRows() == 0) return 0;
			
			while($row = $result->getNext())
			{
				$morada = $dao_morada->get_morada($row[8]);
			
				$this->pessoas[] = new Pessoa($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[9],$row[10],$row[11],$row[12],$row[13],$morada);
			}
				
			return $this->pessoas;
		}
	}
?>