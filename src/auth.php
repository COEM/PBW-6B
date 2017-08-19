<?php
	require 'config.php';
	// require 'user.php';
	class auth extends db{
		private $username;
		private $password;
		public function __construct(){
			$this->connect();
		}

		public function login(String $uName,String $uPass)
		{
			$query = $this->conn->prepare("SELECT * FROM `user` where username = ? and password = md5(?) limit 1") or die($this->conn->error);
			$query->bind_param("ss", $uName,$uPass);
			if($query->execute()){
				$result = $query->get_result();
				if($result->num_rows == 1){
					// session_start();
					$_SESSION = $result->fetch_array();
					$_SESSION['logged_in'] = true;
					return true;
				} else {
					throw new Exception( LOGIN_FAIL );
				}
			} else {
				throw new Exception( LOGIN_FIELDS_MISSING );
			}
		}

		public function logout(){
			session_unset();
			session_destroy();
		}
	}

	// $data = new auth();

	// $data->login("cacing","password");
	// var_dump(var_dump($_SESSION));
	// $data->logout();
	// 				}

?>