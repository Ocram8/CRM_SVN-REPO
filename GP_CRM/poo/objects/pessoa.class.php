<?php
	class Pessoa {
		private $pesID;
		private $pesNome;
		private $pesNIC;
		private $pesNIF;
		private $pesDataNascimento;
		private $pesSexo;
		private $pesEstadoCivil;
		private $pesProfissao;
		private $pesTelefone;
		private $pesEmail;
		private $pesTitulo;
		private $pesFotografia;
		private $pesObservacoes;
		private $pesMorada;
		
		private static $lastPesID = 1;
		
		public function __construct($nome, $nic, $nif, $dataNasc, $sexo, $estCivil, $prof, $tel, $email, $titulo, $foto, $obvs, $morada){
			$this->pesID = $this->lastPesID;
			$this->pesNome = $nome;
			$this->pesNIC = $nic;
			$this->pesNIF = $nif;
			$this->pesDataNascimento = $dataNasc;
			$this->pesSexo = $sexo;
			$this->pesEstadoCivil = $estCivil;
			$this->pesProfissao = $prof;
			$this->pesTelefone = $tel;
			$this->pesEmail = $email;
			$this->pesTitulo = $titulo;
			$this->pesFotografia = $foto;
			$this->pesObservacoes = $obvs;
			$this->pesMorada = $morada;
			
			incLastPesID();
		}
		
		public function getPesID(){
			return $this->pesID;
		}
		
		public function getPesNome(){
			return $this->pesNome;
		}
		
		public function getPesNIC(){
			return $this->pesNIC;
		}
		
		public function getPesNIF() {
			return $this->pesNIF;
		}
		
		public function getPesDataNascimento(){
			return $this->pesDataNascimento;
		}
		
		public function getPesSexo() {
			return $this->pesSexo;
		}
		
		public function getPesEstadoCivil() {
			return $this->pesEstadoCivil;
		}
		
		public function getPesProfissao() {
			return $this->pesProfissao;
		}
		
		public function getPesMorada(){
			return $this->pesMorada;
		}
		
		public function getPesTelefone() {
			return $this->pesTelefone;
		}
		
		public function getPesFotografia() {
			return $this->pesFotografia;
		}
		
		public function getPesObservacoes() {
			return $this->pesObservacoes;
		}
		
		public function setPesID($newPesID){
			$this->pesID = $newPesID;
		}
		
		public function setPesNome($newPesNome) {
			$this->pesNome = $newPesNome;
		}
		
		public function setPesNIC($newNic) {
			$this->pesNIC = $newNic;
		}
		
		public function setPesNIF($newNif) {
			$this->pesNIF = $newNif;
		}
		
		public function setPesDataNascimento($newDataNasc) {
			$this->pesDataNascimento= $newDataNasc;
		}
		
		public function setPesSexo($newSexo) {
			$this->pesSexo = $newSexo;
		}
		
		public function setPesEstadoCivil($nesEstCivil) {
			
		}
		
		private static function incLastPesID(){
			$this->lastPesID++;
		}
	}
?>