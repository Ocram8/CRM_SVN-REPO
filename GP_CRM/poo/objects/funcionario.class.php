<?php
class Funcionario {
	private $funID;
	private $funNumero;
	private $funUsername;
	private $funPassword;
	private $funPermissoes;
	private $funAtivo;
	private $funDataInsercao;
	private $funPessoa;

	public function __construct($ID,$Numero, $Username, $Password,$Permissoes,$Atvio, $Data, $Pessoa) {
		$this->$funID = $ID;
		$this->$funNumero = $Numero;
		$this->$funUsername = $Username;
		$this->$funPassword = $Password;
		$this->$funPermissoes = $Permissoes;
		$this->$funAtivo = $Ativo;
		$this->$admDataInsercao = $Data;
		$this->$funPessoa = $Pessoa
	}

	// getters
	public function getfunID() {
		return $this->funID;
	}
	public function getfunPessoa() {
		return $this->funPessoa;
	}
	public function getfunAtivo() {
		return $this->funAtivo;
	}
	public function getAdmUsername() {
		return $this->funUsername;
	}
	public function getfunPassword() {
		return $this->funPassword;
	}
	public function getfunDataInsercao() {
		return $this->funDataInsercao;
	}
	public function getfunPermissoes() {
		return $this->funPermissoes;
	}
	public function getfunNumero() {
		return $this->funNumero;
	}
	
	

	// setters
	public function setfunID($newID) {
		$this->funID = $newID;
	}
	public function setfunPessoa($newPessoa) {
		$this->funPessoa = $newPessoa;
	}
	public function setfunNumero($newNumero) {
		$this->funNumero = $newNumero;
	}
	public function setfunUsername($newUsername) {
		$this->funUsername = $newUsername;
	}
	public function setfunPassword($newPassword) {
		$this->funPassword = $newPassword;
	}
	public function setfunDataInsercao($newData) {
		$this->funDataInsercao = $newData;
	}
	public function setfunPermissoes($newPermissoes) {
		$this->funPermissoes = $newPermissoes;
	}
	public function setfunAtivo($newAtivo) {
		$this->funAtivo = $newAtivo;
	}
}
?>
?>