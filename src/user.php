<?php

require 'config.php';
class user extends db{
	public $id;
	public $username;
	public $password;
	public $fullname;
	public $email;

	public function __construct(){
		$this->connect();
	}

	public function create(){
		$query = $this->conn->prepare("INSERT INTO user (username,password,fullname,email) VALUES (?,?,?,?)") or die($this->conn->error);
		$query->bind_param("ssss",$this->username,md5($this->password),$this->fullname,$this->email);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function read(){
		$query = $this->conn->prepare("SELECT * FROM `user` ORDER BY `uid` DESC") or die($this->conn->error);
		if($query->execute()){
			$result = $query->get_result();
			return $result;
		}
	}

	public function update(String $id){
		$query = $this->conn->prepare("update user set username = ?, password = ?,fullname = ?, email = ? where uid = ?") or die($this->conn->error);
		$query->bind_param("sssss", $this->username,$this->password,$this->fullname,$this->email, $id);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function delete(String $id){
		$query = $this->conn->prepare("delete from user where uid = ?") or die($this->conn->error);
		$query->bind_param("s", $id);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function detail($value='')
	{
		return null;
	}

}

// $user = new user();

// $user->username = "asd";
// $user->password = "password";
// $user->fullname = "Ibnul Mutaki";
// $user->email = "ibnsuul@gmail.com";
// // $user->create();
// $user->delete(4);
// $user->update(1);
// $kategori->create();
// $kategori->delete("2");
// $news->delete("3");

// $data = $news->read();



?>