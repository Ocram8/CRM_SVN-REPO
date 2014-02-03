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
	}
?>