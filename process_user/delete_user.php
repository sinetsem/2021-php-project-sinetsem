<?php
    require_once("../database/database.php");
    $userid=$_GET['id'];
    deleteUser($userid);