<?php
include('config.php');

	class SimpleDBIConnection {
		var $conn;
		var $error = null;
	
		function __construct() {
			
			$this->conn = new mysql($hostname, $username, $password, $database);
	
			/* ver se estс tudo ok com a ligaчуo*/
			if ($this->conn->connect_error){
				die("Connect Error (" . $mysql->connect_errno . ") " . $mysql->connect_error);
			}
			return $this->conn;
		}
	
		function query($sql) {
			if (!$this->conn) {
				$this->error = 'Not connected to database.';
				return false;
			}
	
			$res = $this->conn->query($sql);
			if (!$res) {
				$this->error = $this->conn->error;
				return false;
			}
			
			return new SimpleDBIResult($res, $this->conn);
		}
	
		function getLastId(){
			return $this->conn->insert_id;
		}
		 
		function getError() {
			return $this->error;
		}
	}
?>