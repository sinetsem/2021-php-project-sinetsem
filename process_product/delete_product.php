<?php
    require_once("../database/database.php");
    $foodid=$_GET['id'];
    $page=$_GET['page'];
    deleteProduct($foodid,$page);
    