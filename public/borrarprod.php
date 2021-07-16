<?php

    require("../includes/constants.php");
    require("../includes/functions.php");

    $elimination=query("DELETE FROM `gorra` WHERE `id`=?",$_GET["id"]);

    redirect();

?>