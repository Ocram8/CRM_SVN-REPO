<?php
	class admerAdministrador {
		private $admID;
		private $admPessoa;
		private $admEmpresa;
		private $admUsername;
		private $admPassword;
		private $admDataInsercao;
	
		public function __construct($Empresa, $Username, $Password, $Data) {
			$this->$admID;
			$this->$admPessoa;
			$this->$admEmpresa = $Empresa;
			$this->$admUsername = $Username;
			$this->$admPassword = $Password;
			$this->$admDataInsercao = $Data;
		}
		
		// getters
		public function getAdmID() {
			return $this->admID;
		}
		public function getAdmPessoa() {
			return $this->admPessoa;
		}
		public function getAdmEmpresa() {
			return $this->admEmpresa;
		}
		public function getAdmUsername() {
			return $this->admUsername;
		}
		public function getAdmPassword() {
			return $this->admPassword;
		}
		public function getAdmDataInsercao() {
			return $this->admDataInsercao;
		}
		
		// setters
		public function setAdmID($newID) {
			$this->admID = $newID;
		}
		public function setAdmPessoa($newPessoa) {
			$this->admPessoa = $newPessoa;
		}
		public function setAdmEmpresa($newEmpresa) {
			$this->admEmpresa = $newEmpresa;
		}
		public function setAdmUsername($newUsername) {
			$this->admUsername = $newUsername;
		}
		public function setAdmPassword($newPassword) {
			$this->admPassword = $newPassword;
		}
		public function setAdmDataInsercao($newData) {
			$this->admDataInsercao = $newData;
		}
	}
?>