<?php
	include ('conf.php');
	class SimpleDBIConnection {
		var $conn;
		var $error = null;
		function __construct() {
			$this->conn = new mysql ( $hostname, $username, $password, $database );
			
			/* ver se estс tudo ok com a ligaчуo */
			if ($this->conn->connect_error) {
				die ( "Connect Error (" . $mysql->connect_errno . ") " . $mysql->connect_error );
			}
			return $this->conn;
		}
		function query($sql) {
			if (! $this->conn) {
				$this->error = 'Not connected to database.';
				return false;
			}
			
			$res = $this->conn->query ( $sql );
			if (! $res) {
				$this->error = $this->conn->error;
				return false;
			}
			
			return new SimpleDBIResult ( $res, $this->conn );
		}
		function getLastId() {
			return $this->conn->insert_id;
		}
		function getError() {
			return $this->error;
		}
	}
	class SimpleDBIRResult {
		var $conn;
		var $res;
		var $numRows;
		var $numAffected;
		function SimpleDBIResult(&$res, &$conn) {
			$this->res = $res;
			$this->conn = $conn;
		}
		function getNext() {
			$r = $this->res->fetch_array ();
			return $r;
		}
		function getNumRows() {
			$res = ($this->numRows ? $this->numRows : $this->res->num_rows);
			$this->numRows = $res;
			return $res;
		}
		function getNumAffected() {
			$res = ($this->numAffected ? $this->numAffected : $this->conn->affected_rows);
			$this->numAffected = $res;
			return $res;
		}
	}
	
	// Created by Nuno Fonseca
	//select row or rows, $db->selectWhere($tableName,$whereValues);
	public function selectWhere($a,$b){
		$q = "SELECT * FROM " . $a;
		$q .= " WHERE 1";
		foreach($b as $v=>$k){
			if(is_numeric($k))
				$q .= " AND `$v`='$k'";
			else
				$q .= " AND `$v` like '$k'";
	
		}
		return $this->q($q);
	}
	
	//insert data $db->insert($table,$data);
	public function insert($a,$b){
		$q = "INSERT INTO $a (";
		foreach($b as $c=>$d){
			$q .= "`$c`,";
		}
		$q = substr($q,0,-1);
		$q .= ") values (";
		foreach($b as $c=>$d){
			$q .= "'$d',";
		}
		$q = substr($q,0,-1);
		return $this->s($q.');');
	}
	
	//update row or rows, $db->update($tableName,$updateValues,$whereValues);
	public function update($a,$b,$c){
		$q = "UPDATE `$a` SET ";
		foreach($b as $v=>$k){
			$q .= "`$v`='$k',";
		}
		$q = substr($q,0,-1);
		$q .= " WHERE 1";
		foreach($c as $v=>$k){
			$q .= " AND `$v`='$k'";
		}
		print $q;
	
		return $this->s($q);
	}
	
	// Created by Nuno Fonseca
	//delete row or rows, $db->delete($tableName,$whereValues);
	public function delete($a,$b){
		$q = "DELETE FROM `$a` WHERE 1";
		foreach($b as $v=>$k){
			$q .= " AND `$v`='$k'";
		}
		return $this->s($q);
	}
?>