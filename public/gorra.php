<?php
	require("../includes/constants.php");
	require("../includes/functions.php");

	$y=query("SELECT * FROM gorra WHERE id=?", $_GET['id_gorra'])[0];

	require("../templates/header.php");
	require("../templates/gorra.php");
?>
