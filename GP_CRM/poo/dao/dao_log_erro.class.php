<?php
class LogErroDAO {
	private $log_erro; // array de objectos do tipo log
	private $db;
	public function __construct($db, $log_erro = null) {
		$this->edb = $db;
	}
	
	// insere log erro
	public function insert_log_erro($l) {
		$db = new edb ();
		$db->insert ( "log_erro", array (
				"id" => $l->getErrID (),
				"data" => $l->getErrData (),
				"codigo" => $l->getCodigo (),
				"mensagem" => $l->getMensagem ()
		) );
	}
	
	// ver todos os log's de erro
	public function get_all_log_erro() {
		return $this->edb->selectAll ( "log_erro" );
	}
	
	// ver log's de erro por ID
	public function get_log_erro($idlog) {
		return $this->edb->selectWhere ( "log_erro", array (
				'logID' => $idlog 
		) );
	}
	
	// ver log's de erro por codigo
	public function get_log_erro($codigo_log) {
		return $this->edb->selectWhere ( "log_erro", array (
				'codigo' => $codigo_log
		) );
	}
	
	// get last id
	public function get_last_id() {
		return $this->edb->selectMaxID ( "err_id", "log_erro" );
	}
}
?>