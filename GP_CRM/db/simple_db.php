<?php
	include ('config.php');
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
?>