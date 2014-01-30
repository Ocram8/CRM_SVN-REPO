<?php
	class Empressa {
		private $empID;
		private $empNome;
		private $empTelefone;
		private $empTelemovel;
		private $empFax;
		private $empLogotipo;
		private $empURL;
		private $empMorada;
		
		private static $lastEmpId = 1;
		
		public function __construct($nome, $tlf, $tlm, $fax, $logo, $url, $morada) {
			$this->empID;
			$this->empNome = $nome;
			$this->empTelefone = $tlf;
			$this->empTelemovel = $tlm;
			$this->empFax = $fax;
			$this->empLogotipo = $logo;
			$this->empURL = $url;
			$this->empMorada = $morada;
		}
		
		public function getEmpID() {
			return $this->empID;
		}
		
		public function getEmpNome() {
			return $this->empNome;
		}
		
		public function getEmpMorada() {
			return $this->empMorada;
		}
		
		public function getEmpTelefone() {
			return $this->empTelefone;
		}
		
		public function getEmpTelemovel() {
			return $this->empTelemovel;
		}
		
		public function getEmpFax() {
			return $this->empFax;
		}
		
		public function getEmpLogotipo() {
			return $this->empLogotipo;
		}
		
		public function getEmpURL() {
			return $this->empURL;
		}
		
		public function setEmpID($newId) {
			$this->empID=$newId;
		}
		
		public function setEmpNome($newNome) {
			$this->empNome=$newNome;
		}
		
		public function setEmpMorada($newMorada) {
			$this->empMorada=$newMorada;
		}
		
		public function setEmpTelefone($newTelefone) {
			$this->empTelefone=$newTelefone;
		}
		
		public function setEmpTelemovel($newTelemovel) {
			$this->empTelemovel=$newTelemovel;
		}
		
		public function setEmpFax($newFax) {
			$this->empFax=$newFax;
		}
		
		public function setEmpLogotipo($newLogo) {
			$this->empLogotipo=$newLogo;
		}
		
		public function setEmpURL($newUrl) {
			$this->empURL=$newUrl;
		}
		
		private static function incLastEmpId() {
			$this->lastEmpId++;
		}
	}
?>