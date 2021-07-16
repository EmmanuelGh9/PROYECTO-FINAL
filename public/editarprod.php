<?php
    require("../includes/functions.php");
    require("../includes/constants.php");

    $y=query("SELECT * FROM gorra WHERE id=?", $_GET['id'])[0];
    
    require("../templates/header.php");
    require("../templates/editarprod.php");
?>