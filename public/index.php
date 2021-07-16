<?php
	
	require("../includes/constants.php");
	require("../includes/functions.php");

	if(isset($_GET['q'])){
		$gorra=query("SELECT * FROM gorra WHERE nombre LIKE ?", "%".$_GET['q']."%");
	}else{
		$gorra=query("SELECT * FROM gorra");
	}

	require("../templates/header.php");
    require("../templates/index.php");
?>
