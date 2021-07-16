<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $nombre=$_POST["nombre"];
    $talla=$_POST["talla"];
    $precio=$_POST["precio"];
    $imagen=$_POST["imagen"];
    $desc=$_POST["desc"];
    
    $inserccion=query("INSERT INTO `gorra` (`id`, `nombre`, `talla`, `imagen`, `precio`, `descripcion`) VALUES (NULL,?,?,?,?,?);",$nombre,$talla,$imagen,$precio,$desc);
    var_dump($inserccion);

    redirect();
?>