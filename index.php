<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');

	$url = "";
	$keywords="";

	$keywords = isset($_GET["inputKeyword"])? $_GET["inputKeyword"] : '';
	$check2 = '<script>alert("HELLOO WORLD")</script>';

  echo $check2;
?>
