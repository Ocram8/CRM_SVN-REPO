<?php
	class DAOMorada
	{
		public $moradas;
		public $bd;
		
		public function __construct($a_bd, $a_moradas=array())
		{
			$this->bd = $a_bd;
			$this->moradas = $a_moradas;
		}
		
		public function insert_morada($morada)
		{
			$id 		= $morada->getMorId();
			$endereco	= $morada->getMorEndereco();
			$localidade	= $morada->getMorLocalidade();
			$cod_postal	= $morada->getMorCodigoPostal();
			
			$sql = "INSERT INTO MORADA (MOR_ID, MOR_ENDERECO, MOR_LOCALIDADE, MOR_CODIGO_POSTAL)
					VALUES (".$id.",'".$endereco."','".$localidade."','".$cod_postal."');";
			
			$result = $this->bd->query($sql);
		}
		
		public function get_morada($id)
		{
			$sql = "SELECT MOR_ID, MOR_ENDERECO, MOR_LOCALIDADE, MOR_CODIGO_POSTAL
					FROM MORADA
					WHERE MOR_ID = ".$id.";";
			
			$result = $this->bd->query($sql);
				
			if($result->getNumRows() == 0) return 0;
			
			$row = $result->getNext();
			
			$mor = new Morada($row[0],$row[1],$row[2],$row[3]);
			
			return $mor;
		}
		
		public function get_all_moradas()
		{
			$sql = "SELECT MOR_ID, MOR_ENDERECO, MOR_LOCALIDADE, MOR_CODIGO_POSTAL
					FROM MORADA;";
				
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
				
			while($row = $result->getNext())
			{
				$this->moradas[] = new Morada($row[0],$row[1],$row[2],$row[3]);
			}
			
			return $this->moradas;
		}
		
		public function update_morada($morada)
		{
			$id 		= $morada->getMorId();
			$endereco	= $morada->getMorEndereco();
			$localidade	= $morada->getMorLocalidade();
			$cod_postal	= $morada->getMorCodigoPostal();
			
			$sql = "UPDATE MORADA
					SET MOR_ENDERECO = '".$endereco."',
						MOR_LOCALIDADE = '".$localidade."',
						MOR_CODIGO_POSTAL = '".$cod_postal."'
					WHERE MOR_ID = ".$id.";";
			
			$result = $this->bd->query($sql);
		}
		
		public function get_last_id()
		{
			$sql = "SELECT MAX(MOR_ID)
					FROM MORADA;";
			
			$result = $this->bd->query($sql);
			
			if($result->getNumRows() == 0) return 0;
				
			$row = $result->getNext();
				
			$id = $row[0];
				
			return $id;
		}
	}
?>