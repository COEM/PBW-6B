<?php
	class db{
		public $host = 'localhost';
		public $user = 'root';
		public $pass = '23deving09';
		public $dbname = 'pbw';
		public $conn;
		public $error;

		public function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database" . $this->connect->connect_error();
				return false;
			}
		}
	}

	final class url{
		public $host = "locahost/pbw";
	}
?>