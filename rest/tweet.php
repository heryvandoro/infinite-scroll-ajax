<?php
require_once "../koneksi.php";
require_once "../controller/tweet.php";

$objTweet = new Tweet();

$mode = $_REQUEST['mode'];
//$mode = "getAll";

if($mode=="getAll"){
	$limit = $_REQUEST['limit'];
	$offset = $_REQUEST['offset'];

	$tweets = $objTweet->getData($limit, $offset);
	$result = [];
	while($row = $tweets->fetch_assoc()){
		$result[] = $row;
	}
	echo json_encode($result);
}
?>