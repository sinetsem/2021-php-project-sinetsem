<?php 
    require_once('partial/header.php');
    require_once('partial/navbar.php');
?>
<div class="container p-4">
    <form action="#" method="post">
        <input type="hidden" value="<?= $_GET['page'] ?>" name="page_cat">
        <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" placeholder="Search By Name" name="searchName">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name='search'>Search</button>
            </div>
        </div>
    </form>
    <div class="d-flex justify-content-end p-2 mb-2 mt-4">
        <a href="process_product/create_product_html.php?page=<?= $_GET['page'] ?>" class="btn btn-primary">Add Product +</a>
    </div>

    <div class="d-flex  bg-light shadow ">
        <div class="m-5 pt-5">
            <h4 class="text-center" >Desert</h4>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus illum sunt quisquam harum reprehenderit totam doloribus numquam asperiores repellat dolorem?</p>

        </div>
        <img class="border border-light " width="60%" height="auto" src="https://images-gmi-pmc.edge-generalmills.com/3b22cf40-7fd6-4f7d-88a8-2d0c6e5234bc.jpg" alt="">
    </div>
    <br>
    <hr>
    <form name="sort" action="" method="post">
        <input type="hidden" value="<?= $_GET['page'] ?>" name="page_cat">
        <select name="order" class="p-1 ">
            <option value="">Sort by:</option>
            <option value="nameA_Z">Product Name:A-Z</option>
            <option value="nameZ_A">Product Name:Z-A</option>
            <option value="priceLow_High">Price: low to high</option>
            <option value="priceHigh_Low">Price: high to low</option>
            <option value="idLow_High">ID: low to high</option>
            <option value="idHigh_Low">ID: high to low</option>
        </select>
        <input type="submit" value="submit" name="select" />
    </form>
    <hr>
    <div class="row">
        <?php 
            require_once("database/database.php");
            $products='';
            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['select']) && !empty($_POST['order'])){
               
                $products=sortBy($_POST);    
            }elseif($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['search'])){
                $products=searchByName($_POST);
            }else{
                $products = getAllDesert();
            }
            
            foreach($products as $desert):
            $description = readMore($desert['description'], 50);
        ?>
        <div class="col-3">
           
            <div class="card shadow mb-4">
            
                <img src="<?= $desert['profile'] ?>" class="card-img-top" width="100%" height="200" >
                
                <p class="action d-flex justify-content-end"><?= $desert['public_date'] ?></p>
                <div class="ml-3 mr-3">
                    <h5 class=""><?= $desert['productName'] ?></h5>
                    <p><?= $description ?>...<a href="read_more/detail.php?id= <?= $desert['product_id'] ?>" class="btn btn-light btn-sm text-primary">Readmore</a></p> 
                </div>
                <div class="action d-flex justify-content-end mb-2">
                    <a href="process_product/update_product_html.php?id=<?= $desert['product_id'] ?>&page=<?= $_GET['page'] ?>" class="btn btn-primary btn-sm rounded-circle mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="process_product/delete_product.php?id=<?= $desert['product_id'] ?>&page=<?= $_GET['page'] ?>" class="btn btn-danger btn-sm rounded-circle mr-3"><i class="fa fa-trash"></i></a>
                </div>
                
                <div class="card-footer bg-success">
                    <span class="text-white d-flex justify-content-center">Price: <?= $desert['price'] ?>$</span>
                    
                </div>
            </div>
        </div>
        
        <?php endforeach; ?>
    </div>
</div>