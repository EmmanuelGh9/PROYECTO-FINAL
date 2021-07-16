<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    $talla=$_POST["talla"];
    $precio=$_POST["precio"];
    $imagen=$_POST["imagen"];
    $descripcion=$_POST["descripcion"];

    $inserccion=query("UPDATE `gorra` SET `nombre` = ?, `talla` = ?, `imagen` = ?, `precio` = ?, `descripcion` = ? WHERE `gorra`.`id` = ?;",$nombre,$talla,$imagen,$precio,$descripcion,$_GET["id"]);
    
    redirect();

?>