<?php
class Koneksi{
	private $server = "localhost";
	private $username = "root";
	private $password = "";
	private $db = "infinite";

	private $conn;

	public function __construct(){
		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
	}

	public function getConnection(){
		return $this->conn;
	}
}
?>