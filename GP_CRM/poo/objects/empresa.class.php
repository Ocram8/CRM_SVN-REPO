<?php
	class Empresa
	{
		private $empId;
		private $empNome;
		private $empTelefone;
		private $empTelemovel;
		private $empFax;
		private $empLogotipo;
		private $empUrl;
		
		public function __construct($id, $nome, $tlf, $tlm, $fax, $logo, $url)
		{
			$this->empId = $id;
			$this->empNome = $nome;
			$this->empTelefone = $tlf;
			$this->empTelemovel = $tlm;
			$this->empFax = $fax;
			$this->empLogotipo = $logo;
			$this->empUrl = $url;
		}
		
		public function getEmpId()
		{
			return $this->empId;
		}
		
		public function getEmpNome()
		{
			return $this->empNome
		}
		
		public function getEmpTelefone()
		{
			return $this->empTelefone;
		}
		
		public function getEmpTelemovel()
		{
			return $this->empTelemovel;
		}
		
		public function getEmpFax()
		{
			return $this->empFax;
		}
		
		public function getEmpLogotipo()
		{
			return $this->empLogotipo;
		}
		
		public function getEmpUrl()
		{
			return $this->empUrl;
		}
		
		public function setEmpId($id)
		{
			$this->empId = $id;
		}
		
		public function setEmpNome($nome)
		{
			$this->empNome = $nome;
		}
		
		public function setEmpTelefone($tel)
		{
			$this->empTelefone = $tel;
		}
		
		public function setEmpTelemovel($tel)
		{
			$this->empTelemovel = $tel;
		}
		
		public function setEmpFax($fax)
		{
			$this->empFax = $fax;
		}
		
		public function setEmpLogotipo($logo)
		{
			$this->empLogotipo = $logo;
		}
		
		public function setEmpUrl($url)
		{
			$this->empUrl = $url;
		}
	}
?>