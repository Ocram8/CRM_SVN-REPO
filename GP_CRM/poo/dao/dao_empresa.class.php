<?php
	class EmpresaDAO {
		public $empresas;
		public $bd;
		
		public function __construct($aBd, $aEmpresas=array()){
			$this->bd = $aBd;
			$this->empresas = $aEmpresas;
		}
		
		public function novaEmpresa($empresa){
			$sql = "INSERT INTO `".$this->bd->getBaseDados()."`.`EMPRESA` (`EMP_ID`,`EMP_NOME`,`EMP_MORADA`,`EMP_TELEFONE`,`EMP_TELEMOVEL`,`EMP_FAX`,`EMP_LOGOTIPO`,`EMP_URL`)
					VALUES (".$empresa->getEmpID().",'".$empresa->getEmpNome()."',".$empresa->getEmpMorada()->getMorID().",".$empresa->getEmpTelefone().",".$empresa->getEmpTelemovel().",".$empresa->getEmpFax().",'".$empresa->getEmpLogotipo()."','".$empresa->getEmpURL()."')";
			
			$result = $this->bd->query($sql);
		}
		
		public function visualizarEmpresas() {
			$sql = "SELECT * FROM EMPRESA";
			
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
			
			while($row = $result->getNext()){
				$sql1 = "SELECT * FROM MORADA WHEN MOR_ID = ".$row[2];
				
				$result1 = $this->bd->query($sql1);
				if($result1->getNumRows() == 0) return 0;
				
				$row1 = $result->getNext();
				
				$morada = new Morada($row1[0],$row);
				
				$this->empresas[] = new Empressa($row[0], $row[1], $row[3], $row[4], $row[5], $row[6], $row[2]);
			}
		}
	}
?>