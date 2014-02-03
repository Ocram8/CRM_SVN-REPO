<?php
	class LogErro {
		private $errID;
		private $errData;
		private $errCodigo;
		private $errMensagem;
		
		private static $lastLogErroID = 1;
	
		public function __construct($Data, $Codigo, $Mensagem) {
			$this->errID;
			$this->errData = $Data;
			$this->errCodigo = $Codigo;
			$this->errMensagem = $Mensagem;
		}
	
		// getters
		public function getErrID() {
			return $this->errID;
		}
		public function getErrData() {
			return $this->errData;
		}
		public function getCodigo() {
			return $this->errCodigo;
		}
		public function getMensagem() {
			return $this->errMensagem;
		}
	
		// setters
		public function setErrID($newID) {
			$this->errID = $newID;
		}
		public function setErrData($newData) {
			$this->errData = $newData;
		}
		public function setErrCodigo($newCodigo) {
			$this->errCodigo = $newCodigo;
		}
		public function setErrMensagem($newMensagem) {
			$this->errMensagem = $newMensagem;
		}
	}

?>