<?php
   
    if(isset($_GET['page'])){

        if($_GET['page']=='Food'){
            include_once('pages/food.php');
        }elseif($_GET['page']=='Soft_drink'){
            include_once('pages/soft_drink.php');
        }elseif($_GET['page']=='desert'){
            include_once('pages/desert.php');
        }elseif($_GET['page']=='about'){
            include_once('pages/about.php');
        }
        elseif($_GET['page']=='account'){
            include_once('pages/account.php');
        }
        else{
            include_once('pages/home.php');
        }
    }else{
        include_once('pages/home.php');
    }
    