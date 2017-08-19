<?php

require_once 'config.php';
class kategori extends db{
	public $id;
	public $nama_kategori;

	public function __construct(){
		$this->connect();
	}

	public function create(){
		$query = $this->conn->prepare("INSERT INTO kategori (nama_kategori) VALUES (?)") or die($this->conn->error);
		$query->bind_param("s",$this->nama_kategori);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function read(){
		$query = $this->conn->prepare("SELECT * FROM `kategori` ORDER BY `nama_kategori` ASC") or die($this->conn->error);
		if($query->execute()){
			$result = $query->get_result();
			$query->close();
			return $result;
		}
	}

	public function update(String $id){
		$query = $this->conn->prepare("update kategori set nama_kategori = ? where id = ?") or die($this->conn->error);
		$query->bind_param("ss", $this->nama_kategori, $id);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function delete(String $id){
		$query = $this->conn->prepare("delete from kategori where id = ?") or die($this->conn->error);
		$query->bind_param("s", $id);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

}

// $kategori = new kategori();

// $kategori->nama_kategori = "Teknologi";
// $kategori->create();
// $kategori->delete("2");
// $news->delete("3");

// $data = $news->read();



?>