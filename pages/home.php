<!-- <img src="images/2.jpg" width="100%"> -->
<?php 
    require_once('partial/header.php');
    require_once('partial/navbar.php');

?>
<style>
.position {
  position: relative;
  text-align: center;
  color: black;
}
.bottom-right {
  position: absolute;
  bottom: 1%;
  right: 38%;
}
.centered {
  position: absolute;
  top: 30%;
  left: 10%;
  
}
</style>
<div class="position">
  <img src="https://www.pngkey.com/png/detail/37-377810_lady-chef-png-chef-lady-png.png" alt="Snow" style="width:100%; height:800px">
  
  <h5 class="bottom-right">Mrs.JULAI SUSI(Professional Chef)</h5>
  <div class="centered">
        <h2>WELCOME TO OUR S-RESTAURANT<h2>
        
        <div class="" style="margin-right: 0px;">
            <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/check-mark_2714-fe0f.png" width="30px" height="30px">
            <small>Good Food and Delicious Food</small>
        </div>

        <div class="" style="margin-right: 200px;">
            <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/check-mark_2714-fe0f.png" width="30px" height="30px">
            <small>Good Services</small>
        </div>
        <div class="" style="margin-right: 150px;">
            <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/check-mark_2714-fe0f.png" width="30px" height="30px">
            <small>Comfortable Place</small>
        </div>
        
  </div>
</div>

<div class="mt-5">
    <h2 class="text-center">Our Products</h2>
</div>
<div class="container pl-5 pt-2">
<form action="#" method="post">
        
        <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" placeholder="Search All Product By Name" name="searchName">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name='search'>Search</button>
            </div>
        </div>
    </form>
</div>

<div class="container pl-5  pr-5 pt-3 ">
    
    <div class="row d-flex">
        <div class="col-4 d-flex mb-3">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" width="100%" height="200px" src="https://www.namesnack.com/images/namesnack-fast-food-restaurant-business-names-4240x2832-20200915.jpeg?crop=4:3,smart&width=1200&dpr=2" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Food & Fast Food</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem reiciendis quaerat magnam exercitationem.</p>
                    <a href="http://localhost:8080/php/2021-php-project-sinetsem/?page=Food" class="btn btn-primary">Show More</a>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex mb-3 ">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" width="100%" height="200px" src="https://images7.alphacoders.com/396/396289.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Desert</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem reiciendis quaerat magnam exercitationem.</p>
                    <a href="http://localhost:8080/php/2021-php-project-sinetsem/?page=desert" class="btn btn-primary">Show More</a>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex mb-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" width="100%" height="200px" src="https://media.istockphoto.com/photos/fruit-juices-picture-id1127182311?k=6&m=1127182311&s=612x612&w=0&h=abYMzhhQhrvMs7eRn4v9cqmujWu7rDy5spK_xohohQE=" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Soft Drink</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem reiciendis quaerat magnam exercitationem.</p>
                    <a href="http://localhost:8080/php/2021-php-project-sinetsem/?page=Soft_drink" class="btn btn-primary">Show More</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    
</div>
<div class="container pl-5 pr-5 mb-4 pt-3">
    <div class="row">
        <?php 
            $products="";
            require_once('database/database.php');
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $products=getAllproduct($_POST);
            }else{
                $products=getPost();
            }
            foreach($products as $product):
            
            
        ?>
        <div class="col-3 mb-3">
            <div class="card-group">
                <div class="card">
                    
                    <div class="card-header btn btn-light">
                        <a href="read_more/detail.php?id=<?= $product['product_id'] ?>">
                            <h5 class="text-center"><?= $product['productName'] ?></h5>
                        </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <?php endforeach ; ?>
       
    </div>
    <div class="">
        <ul class="d-flex justify-content-center list-unstyled">
            <?php
                $page=getTotalpage();
                for($i=1 ; $i<=$page+1; $i++):
            ?>
            
            <li class=""><a class="btn btn-secondary mr-3 mt-4 rounded-circle" href="?page_show=<?= $i?>"><?= $i ?></a></li>
            
            <?php endfor ;?>
        </ul>
         
    </div>    
</div>

<?php 
    require_once('partial/footer.php');
?>





