<?php
	class Log {
		private $logID;
		private $logData;
		private $logAcao;
		
		public function __construct($Data, $Acao) {
			$this->logID;
			$this->logData = $Data;
			$this->logAcao = $Acao;
		}
		
		// getters
		public function getLogID() {
			return $this->logID;
		}
		public function getLogData() {
			return $this->logData;
		}
		public function getLogAcao() {
			return $this->logAcao;
		}
		
		// setters
		public function setLogID($newID) {
			$this->logID = $newID;
		}
		public function setLogData($newData) {
			$this->logData = $newData;
		}
		public function setLogAcao($newAcao) {
			$this->logAcao = $newAcao;
		}
	}
?>