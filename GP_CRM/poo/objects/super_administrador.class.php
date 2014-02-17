<?php
	class SuperAdministrador {
		private $supID;
		private $supPessoa;
		private $supUsername;
		private $supPassword;
		private $supDataInsercao;
	
		public function __construct($Username, $Password, $Data) {
			$this->$supID;
			$this->$supPessoa;
			$this->$supUsername = $Username;
			$this->$supPassword = $Password;
			$this->$supDataInsercao = $Data;
		}
		
		// getters
		public function getSupID() {
			return $this->supID;
		}
		public function getSupPessoa() {
			return $this->supPessoa;
		}
		public function getSupUsername() {
			return $this->supUsername;
		}
		public function getSupPassword() {
			return $this->supPassword;
		}
		public function getSupDataInsercao() {
			return $this->supDataInsercao;
		}
		
		// setters
		public function setSupID($newID) {
			$this->supID = $newID;
		}
		public function setSupPessoa($newPessoa) {
			$this->supPessoa = $newPessoa;
		}
		public function setSupUsername($newUsername) {
			$this->supUsername = $newUsername;
		}
		public function setSupPassword($newPassword) {
			$this->supPassword = $newPassword;
		}
		public function setSupDataInsercao($newData) {
			$this->supDataInsercao = $newData;
		}
	}
?>