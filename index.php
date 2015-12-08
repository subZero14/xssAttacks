<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');

	$url = "";
	$keywords="";

	$keywords = isset($_GET["inputKeyword"])? $_GET["inputKeyword"] : '';
	$check3 = '<script>alert("Muhahahaha! Attacked")</script>';

  echo $check3;
?>
