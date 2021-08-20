<?php
    
    function db(){
        return new mysqli('localhost','root','','vc1_php&database');
    }

    //select all food from databasse
    function getAllFood(){
        return db()-> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='Food'");
    }

    //select all soft drink from databasse
    function getAllSoftDrink(){
        return db()-> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='soft_drink' ");
    }

    //select all soft drink from databasse
    function getAllDesert(){
        return db()-> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='desert' ");
    }

    //create new product
    function createProduct($value){
        $productname= $value['pro_name'];
        $price=$value['price'];
        $description= $value['description'];
        $cat_id = $value['categoryID'];
        //$profile=$value['image'];
        date_default_timezone_set('Asia/Phnom_Penh');
        $date = date('Y-m-d h:i:s A');
        
        if($productname!='' && $price!='' && $description!='' && $cat_id!=''){
            db() -> query("INSERT INTO products (productName, price,description,category_id,public_date) VALUES ('$productname','$price','$description','$cat_id','$date')");
            accessPage($value['page']);
        }else{
            header('Location: http://localhost:8080/php/2021-basic-php-project-sinetsem/process_product/create_product_html.php?page=Soft_drink');
        }
        
    }

    //delete product
    function deleteProduct($foodid,$page){
        db() -> query("DELETE FROM products WHERE product_id=$foodid");
        accessPage($page);


    }

    //Get only one recode by id
    function selectOneProduct($id){
        return db()->query("SELECT * FROM products WHERE product_id=$id");
    }


    //update product
    function updateProduct($value){
        $productname = $value['pro_name'];
        $price= $value['price'];
        $description= $value['description'];
        //$profile = $value['image'];
        $cat_id= $value['categoryID'];
        $pro_id = $value['pro_id'];
        db() -> query("UPDATE products SET productName='$productname', price='$price', description='$description', category_id='$cat_id' WHERE product_id = '$pro_id'");
        accessPage($value['page']);
       

    }

    // access page
    function accessPage($page){
        
        if($page=='Food'){
            header('Location: http://localhost:8080/php/2021-basic-php-project-sinetsem/?page=Food');
        }elseif($page=='Soft_drink'){
            header('Location: http://localhost:8080/php/2021-basic-php-project-sinetsem/?page=Soft_drink');
        }elseif($page=='desert'){
            header('Location: http://localhost:8080/php/2021-basic-php-project-sinetsem/?page=desert');
        }
        
    }

    //select one product to detail more information
    function detailOneProduct($id){
        return db()->query("SELECT * FROM products WHERE product_id=$id");

    }
    // read more information
    function readMore($text, $number){
        return substr($text,0,$number);
    }

    //search product by name in the category
    function searchByName($value){
        $pro_name=$value['searchName'];
        $page_cat=$value['page_cat'];
       
        return db()-> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' and products.productName like '%$pro_name%' ORDER BY products.product_id DESC");
    }

    //seach product by name all category
    function getAllproduct($value){
        $productName=$value['searchName'];
        return db()-> query("SELECT * FROM products WHERE productName LIKE '%$productName%'");
    }

    //sort by
    function sortBy($value){
        $selectValue= $value['order'];
        $page_cat= $value['page_cat'];
        if($selectValue=="priceHigh_Low"){
            return db() -> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' ORDER BY products.price DESC");
        }elseif($selectValue=="priceLow_High"){
            return db() -> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' ORDER BY products.price ASC");

        }elseif($selectValue=="nameA_Z"){
            return db() -> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' ORDER BY products.productName ASC");
        }elseif($selectValue=="nameZ_A"){
            return db() -> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' ORDER BY products.productName DESC");
        }elseif($selectValue=="idLow_High"){
            return db() -> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' ORDER BY products.product_id ASC");
        }else{
            return db() -> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' ORDER BY products.product_id DESC");
        }
    }
   

  
    
