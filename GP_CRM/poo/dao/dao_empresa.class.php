<?php
	class EmpresaDAO
	{
		public $empresas;
		public $bd;
		
		public function __construct($a_bd, $a_empresas=array())
		{
			$this->bd = $a_bd;
			$this->empresas = $a_empresas;
		}
		
		public function insert_empresa($empresa)
		{
			$id		= $empresa->getEmpId();
			$nome	= $empresa->getEmpNome();
			$morada = $empresa->getEmpMorada();
			$tlf	= $empresa->getEmpTelefone();
			$tlm	= $empresa->getEmpTelemovel();
			$fax	= $empresa->getEmpFax();
			$logo	= $empresa->getEmpLogotipo();
			$url	= $empresa->getEmpUrl();
			
			$bd = $this->bd;
			
			$dao_morada = new DAOMorada($bd);
			
			$dao_morada->insert_morada($morada);
			
			$mor_id = $morada->getMorId();
			
			$sql = "INSERT INTO EMPRESA (EMP_ID, EMP_NOME, EMP_MORADA, EMP_TELEFONE, EMP_TELEMOVEL, EMP_FAX, EMP_LOGOTIPO, EMP_URL)
					VALUES (".$id.",'".$nome."',".$mor_id.",".$tlf.",".$tlm.",".$fax.",'".$logo."','".$url."');";
				
			$result = $this->bd->query($sql);
		}
		
		public function get_empresa($id)
		{
			$bd = $this->bd;
				
			$dao_morada = new DAOMorada($bd);
			
			$sql = "SELECT EMP_ID, EMP_NOME, EMP_MORADA, EMP_TELEFONE, EMP_TELEMOVEL, EMP_FAX, EMP_LOGOTIPO, EMP_URL
					FROM EMPRESA
					WHERE EMP_ID = ".$id.";";
				
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
				
			$row = $result->getNext();
			
			$morada = $dao_morada->get_morada($row[2]);
			
			$emp = new Empresa($row[0],$row[1],$morada,$row[3],$row[4],$row[5],$row[6],$row[7]);
				
			return $emp;
		}
		
		public function get_all_empresas()
		{
			$bd = $this->bd;
			
			$dao_morada = new DAOMorada($bd);
			
			$sql = "SELECT EMP_ID, EMP_NOME, EMP_MORADA, EMP_TELEFONE, EMP_TELEMOVEL, EMP_FAX, EMP_LOGOTIPO, EMP_URL
					FROM EMPRESA;";
				
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
				
			while($row = $result->getNext())
			{
				$morada = $dao_morada->get_morada($row[2]);
				
				$this->empresas[] = new Empresa($row[0],$row[1],$morada,$row[3],$row[4],$row[5],$row[6],$row[7]);
			}
			
			return $this->empresas;
		}
		
		public function get_last_id()
		{
			$sql = "SELECT MAX(EMP_ID)
					FROM EMPRESA;";
				
			$result = $this->bd->query($sql);
				
			if($result->getNumRows() == 0) return 0;
		
			$row = $result->getNext();
		
			$id = $row[0];
		
			return $id;
		}
		
		public function update_empresa($empresa)
		{
			$id		= $empresa->getEmpId();
			$nome	= $empresa->getEmpNome();
			$morada = $empresa->getEmpMorada();
			$tlf	= $empresa->getEmpTelefone();
			$tlm	= $empresa->getEmpTelemovel();
			$fax	= $empresa->getEmpFax();
			$logo	= $empresa->getEmpLogotipo();
			$url	= $empresa->getEmpUrl();
			
			$bd = $this->bd;
			
			$dao_morada = new DAOMorada($bd);
			
			$dao_morada->update_morada($morada);
				
			$sql = "UPDATE EMPRESA
					SET EMP_NOME = '".$nome."',
						EMP_TELEFONE = ".$tlf.",
						EMP_TELEMOVEL = ".$tlm.",
						EMP_FAX =".$fax.",
						EMP_LOGOTIPO='".$logo."',
						EMP_URL='".$url."'
					WHERE EMP_ID = ".$id.";";
				
			$result = $this->bd->query($sql);
		}
	}
?>