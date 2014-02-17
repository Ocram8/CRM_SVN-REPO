<?php
class LogDAO {
	private $log; // array de objectos do tipo log
	private $db;
	public function __construct($db, $log = null) {
		$this->edb = $db;
	}
	
	// insere log
	public function insert_log($l) {
		$db = new edb ();
		$db->insert ( "log", array (
				"id" => $l->getLogID (),
				"data" => $l->getLogData (),
				"acao" => $l->getLogAcao () 
		) );
	}
	
	// ver todos os log's
	public function get_all_log() {
		return $this->edb->selectAll ( "log" );
	}
	
	// ver log's por ID
	public function get_log($idlog) {
		return $this->edb->selectWhere ( "log", array (
				'logID' => $idlog 
		) );
	}
	
	//get last id
	public function get_last_id() {
		return $this->edb->selectMaxID ( "log_id", "log" );
	}
}
?>