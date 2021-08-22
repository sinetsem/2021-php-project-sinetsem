<?php 
    require_once('../partial/header.php');
    //require_once('../partial/navbar.php');
    
?>

<div class="container mt-4">
    <div class="d-flex justify-content-end p-4">
        <button class="btn btn-info " onclick="window.history.back();">&#8592; Back</button>
    </div>
</div>

<div class="container p-4 " style="background: #AED6F1 ; border-radius: 10px;">
    <h3 class="text-center mb-3">Create Product</h3>
    <form action="create_product_model.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $_GET['page'] ?>" name="page">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Product Name" name='pro_name'>
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price" name='price'>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Description" name='description'>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="CategoryID" name='categoryID'>
        </div>

        <div class="form-group">
            <input type="file" id="myFile" name='image'>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Create</button>
        </div>
        
    </form>
</div>




