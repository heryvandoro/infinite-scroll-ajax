<?php
class Tweet{
	private $conn;
	private $tableName;

	public function __construct(){
		$objKoneksi = new Koneksi();
		$this->conn = $objKoneksi->getConnection();

		$this->tableName = "tweet";
	}
	public function getData($limit, $offset){
		return $this->conn->query("SELECT * from $this->tableName LIMIT $limit OFFSET $offset");
	}
}
?>