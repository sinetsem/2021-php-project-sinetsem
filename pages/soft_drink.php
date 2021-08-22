<?php 
    require_once('partial/header.php');
    require_once('partial/navbar.php');
?>

<div class="container p-4 ">
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

    <div class="d-flex  bg-light shadow">
        <div class="m-5 pt-5">
            <h4 class="text-center" >Soft Drink</h4>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus illum sunt quisquam harum reprehenderit totam doloribus numquam asperiores repellat dolorem?</p>

        </div>
        <img class="border border-light " width="60%" height="400px" src="https://businesspost.ng/wp-content/uploads/2019/08/Orange-Fruit-Juice.jpg" alt="">
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
            require_once('database/database.php');
            $products='';
            if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['select']) && !empty($_POST['order'])){
               
                $products=sortBy($_POST);    
            }elseif($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['search'])){
                $products=searchByName($_POST);
            }else{
                $products = getAllSoftDrink();
            }
           
            foreach($products as $softDrinnk):
            $description = readMore($softDrinnk['description'], 100);

        ?>
        <div class="col-4">
            <div class="shadow rounded mb-4">
                <img src="assets/images/<?= $softDrinnk['profile'] ?>" width="100%" height="250" class="pl-3 pr-3 pt-3">
               
                
                <div class="pl-3 pr-3 pb-3 mt-2">
                    <div class="d-flex justify-content-between">
                    <h4><?= $softDrinnk['productName'] ?></h4>
               
                </div>
                <p><?= $description ?>...<a href="read_more/detail.php?id= <?= $softDrinnk['product_id'] ?>" class="btn btn-light btn-sm text-primary">Readmore</a></p> 
                
        
                <div class="action d-flex justify-content-end">
                    <a href="process_product/update_product_html.php?id=<?= $softDrinnk['product_id'] ?>&page=<?= $_GET['page'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="process_product/delete_product.php?id=<?= $softDrinnk['product_id'] ?>&page=<?= $_GET['page'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div> 
                <div class="mt-2">
                    <span class="btn btn-success btn-sm text-center form-control" >Price: <?= $softDrinnk['price'] ?>$</span>
                </div>
                    
    
            </div>
            </div>
     
        </div>
        
        <?php endforeach; ?>
    
  </div>
</div>

<?php 
    require_once('partial/footer.php');
?>