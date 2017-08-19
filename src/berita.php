<?php

require 'config.php';
class berita extends db{
	public $idKategori;
	public $judul;
	public $konten;
	public $gambar;
	public $status;
	public $username;
	public $tanggal;

	public function __construct(){
		$this->connect();
	}

	public function create(){
		$query = $this->conn->prepare("INSERT INTO berita (id_kategori,judul,konten,gambar,status,tanggal,username) VALUES (?,?,?,?,?,?,?)") or die($this->conn->error);
		$query->bind_param("issssss",$this->idKategori, $this->judul, $this->konten, $this->gambar, $this->status, $this->tanggal, $this->username);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function read(){
		$query = $this->conn->prepare("SELECT *,berita.id as berita_id FROM berita,kategori where berita.id_kategori = kategori.id ORDER BY berita.id DESC") or die($this->conn->error);
		if($query->execute()){
			$result = $query->get_result();
			$query->close();
			return $result;
		}
	}

	public function update(String $id){
		$query = $this->conn->prepare("update berita set judul = ? ,konten = ?, gambar = ?, status = ?, tanggal = ?, username = ? where id = ?") or die($this->conn->error);
		$query->bind_param("sssssss", $this->judul, $this->konten, $this->gambar, $this->status, $this->tanggal, $this->username, $id);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function delete(String $id){
		$query = $this->conn->prepare("delete from berita where id = ?") or die($this->conn->error);
		$query->bind_param("s", $id);
		if($query->execute()){
			$query->close();
			$this->conn->close();
			return true;
		}
	}

	public function detail(String $id){
		$query = $this->conn->prepare("SELECT * FROM berita,kategori where berita.id_kategori = kategori.id and  berita.id = ?") or die($this->conn->error);
		$query->bind_param("s", $id);
		if($query->execute()){
			$result = $query->get_result();
			return $result;
		}
	}

}

$news = new berita();
// $news->idKategori = 12;
// $news->judul = "bebek";
// $news->konten = "ibnul";
// $news->gambar = "blaaah";
// $news->status = "aktif";
// $news->username = "cacing";
// $news->tanggal = "2017/08/18";
// var_dump($news->detail(12));


// $news->delete("3");

$data = $news->detail(12);

					while($fetch = $data->fetch_array()){
echo "<b>".$fetch['judul']."</b>";
echo $fetch['konten']."<br>";

					}




?>