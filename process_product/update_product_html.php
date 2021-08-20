<?php
    require_once('../partial/header.php');
?>
<div class="container mt-4">
    <div class="d-flex justify-content-end p-4">
        <button class="btn btn-info " onclick="window.history.back();">&#8592; Back</button>
    </div>
</div>
<div class="container p-4  " style="background: #AED6F1 ; border-radius: 10px;">
    <h3 class="text-center mb-3">Update Product</h3>
    <?php 
        require_once("../database/database.php");
        $id = $_GET['id'];
        $page=$_GET['page'];
        $products = selectOneProduct($id);
        foreach($products as $product):
    ?>
        <form action="update_product_model.php" method="post">
        <input type="hidden" value="<?= $product['product_id'] ?>" name="pro_id">
        <input type="hidden" value="<?= $page ?>" name="page">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Product Name" name='pro_name' value="<?= $product['productName'] ?>">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price" name='price' value="<?= $product['price'] ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Description" name='description' value="<?= $product['description'] ?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="CategoryID" name='categoryID' value="<?= $product['category_id'] ?>">
        </div>

        <div class="form-group">
            <input type="file"  placeholder="Image" name='image'>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Update</button>
        </div>
    </form>
    <?php endforeach; ?>
</div>

