<?php 
    require_once('../partial/header.php');
    require_once('../partial/navbar.php');
    
?>
<style>
.checked {
  color: orange;
}
</style>      

<div class="container p-5">
    
    <div class="d-flex justify-content-end pr-3 pb-3">
        <button class="btn btn-info " onclick="window.history.back();">&#8592; Back</button>
    </div>

    <?php 
        require_once("../database/database.php");
        $id=$_GET['id'];
        $products = detailOneProduct($id);
        foreach($products as $product):
    
    ?>
    <div class="row">
        <div class="col-12">
            <div class=" mr-3 shadow">
                <img  width="100%" height="500" src="../assets/images/<?= $product['profile'] ?>" >
                                
            </div>
            <div class="mt-2">
                       
                <h1 class="display-4">Name:<?= $product['productName'] ?> </h1>
                <p>Date: <?= $product['public_date'] ?></p>
                                 
                <div class=" ">Popular Food:
                    <span class="fa fa-star checked mr-1"></span>
                    <span class="fa fa-star checked mr-1"></span>
                    <span class="fa fa-star checked mr-1"></span>
                    <span class="fa fa-star checked mr-1"></span>
                    <span class="fa fa-star mr-3"></span>
                </div>
                <p>Amount of sell: 1K</p>
                <p class="btn btn-success btn-sm">Price:<?= $product['price'] ?>$</p>
                        
                <p class="btn btn-danger btn-sm">Promotion: 30% off</p>
                <p><?= $product['description'] ?></p>
                    
            </div>
        </div>
    </div>
    <?php endforeach ; ?>
    
</div>




<?php 
    if(isset($_GET['page'])){

        if($_GET['page']=='Food'){
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=Food');
        }elseif($_GET['page']=='Soft_drink'){
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=Soft_drink');
        }elseif($_GET['page']=='desert'){
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=desert');
        }elseif($_GET['page']=='about'){
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=about');
        }
        else{
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=home');
        }
    }
    require_once('../partial/footer.php');
  
    
?>