<?php
	class Morada {
		private $morID;
		private $morEndereco;
		private $morLocalidade;
		private $morCodigoPostal;
		
		private static $lastMorID = 1;
		
		public function __construct($endereco, $localidade, $codigoPostal){
			$this->morID = $this->lastMorID;
			$this->morEndereco = $endereco;
			$this->morCodigoPostal = $codigoPostal;
			
			incLastMorID();
		}
		
		public function getMorID(){
			return $this->morID;
		}
		
		public function getMorEndereco(){
			return $this->morEndereco;
		}
		
		public function getMorLocalidade(){
			return $this->morLocalidade;
		}
		
		public function getMorCodigoPostal(){
			return $this->morCodigoPostal;
		}
		
		public function setMorID($newMorID){
			$this->morID=$newMorID;
		}
		
		public function setMorEndereco($newMorEndereco) {
			$this->morEndereco=$newMorEndereco;
		}
		
		public function setMorLocalidade($newMorLocalidade) {
			$this->morLocalidade=$newMorLocalidade;
		}
		
		public function setMorCodigoPostal($newMorCodigoPostal) {
			$this->morCodigoPostal=$newMorCodigoPostal;
		}
		
		private static function incLastMorID() {
			$this->lastMorID++;
		}
	}
?>