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

    //Select all users from database
    function getAllUser(){
        return db()-> query("SELECT * FROM user_management");
    }


//...........................create, delete, update date in products table.....................//

    //create new product
    function createProduct($value){
        $productname= $value['pro_name'];
        $price=$value['price'];
        $description= $value['description'];
        $cat_id = $value['categoryID'];
        date_default_timezone_set('Asia/Phnom_Penh');
        $date = date('Y-m-d h:i:s A');
        //upload image
        $imgName=$_FILES['image']['name'];
        
        $imgSize=$_FILES['image']['size'];
        $ImgTmp_name=$_FILES['image']['tmp_name'];
        
        if($imgSize>525000){
            accessPage($value['page']);
        }else{
            $extension =pathinfo($imgName,PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $AllowExtension= array('jpg','jpen','png');
            if(in_array($extensionLocal,$AllowExtension) && $productname!='' && $price!='' && $description!='' && $cat_id!=''){
                
                $newImgName=uniqid('php-',true).'.'.$extensionLocal;
                $folderImg='../assets/images/'.$newImgName;
                move_uploaded_file($ImgTmp_name,$folderImg);
                db() -> query("INSERT INTO products (productName, price,description,category_id,public_date,profile) VALUES ('$productname','$price','$description','$cat_id','$date','$newImgName')");
                accessPage($value['page']);
            }else{
                header('Location: http://localhost:8080/php/2021-php-project-sinetsem/process_product/create_product_html.php');
            }
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
        $cat_id= $value['categoryID'];
        $pro_id = $value['pro_id'];
        //update image
        $imgName=$_FILES['image']['name'];
        $imgSize=$_FILES['image']['size'];
        $ImgTmp_name=$_FILES['image']['tmp_name'];
        if($imgSize>525000){
            accessPage($value['page']);
        }else{
            $extension =pathinfo($imgName,PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $AllowExtension= array('jpg','jpen','png');
            if(in_array($extensionLocal,$AllowExtension)){
            
                $newImgName=uniqid('php-',true).'.'.$extensionLocal;
                $folderImg='../assets/images/'.$newImgName;
                move_uploaded_file($ImgTmp_name,$folderImg);
                db() -> query("UPDATE products SET productName='$productname', price='$price', description='$description', category_id='$cat_id',profile='$newImgName' WHERE product_id = '$pro_id'");
                accessPage($value['page']);
            }else{
                $newImgName=uniqid('php-',true).'.'.$extensionLocal;
                $folderImg='../assets/images/'.$newImgName;
                move_uploaded_file($ImgTmp_name,$folderImg);
                db() -> query("UPDATE products SET productName='$productname', price='$price', description='$description', category_id='$cat_id',profile='$newImgName' WHERE product_id = '$pro_id'");
                accessPage($value['page']);
            }
        }
        
       

    }

    // access page
    function accessPage($page){
        
        if($page=='Food'){
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=Food');
        }elseif($page=='Soft_drink'){
        
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=Soft_drink');
        }elseif($page=='desert'){
            header('Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=desert');
        }
        
    }

    //...............................detail more information...............................//

    //select one product to detail more information
    function detailOneProduct($id){
        return db()->query("SELECT * FROM products WHERE product_id=$id");

    }
    // read more information
    function readMore($text, $number){
        return substr($text,0,$number);
    }

    //..................................search productname............................//

    //get product only from one category by search name 
    function searchByName($value){
        $pro_name=$value['searchName'];
        $page_cat=$value['page_cat'];
       
        return db()-> query("SELECT * FROM products INNER JOIN category ON category.category_id=products.category_id WHERE category.categoryName='$page_cat' and products.productName like '%$pro_name%' ORDER BY products.product_id DESC");
    }

    //get product from all category by search name 
    function getAllproduct($value){
        $productName=$value['searchName'];
        return db()-> query("SELECT * FROM products WHERE productName LIKE '%$productName%'");
    }

//.........................sort by id, name and price....................................//

    
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
    
    
//.......................user login, create, delete and update..........................//

    //user login
    function userLogin($value){
        $pass=$value['pass'];
        $username=$value['user'];
        $safePass= password_hash($pass,PASSWORD_DEFAULT);
        $result="not valid";
        $password= db()-> query("SELECT * FROM user_management WHERE username='$username'");
        foreach($password as $row){
            if(password_verify($pass,$row['password'])){
                $result= 'valid';    
                
            }
        }
        return $result;
    }

    //create user
    function createUser($value){
        $name=$value['user'];
        $pass= $value['pass'];
        $email=$value['email'];
        $role=$value['role'];
        $safePass=password_hash($pass, PASSWORD_DEFAULT);
        //upload image
        $imgName=$_FILES['image']['name'];
        
        $imgSize=$_FILES['image']['size'];
        $ImgTmp_name=$_FILES['image']['tmp_name'];
        
        if($imgSize>525000){
            accessPage($value['page']);
        }else{
            $extension =pathinfo($imgName,PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $AllowExtension= array('jpg','jpen','png');
            if(in_array($extensionLocal,$AllowExtension)){
                
                $newImgName=uniqid('php-',true).'.'.$extensionLocal;
                $folderImg='../assets/images/'.$newImgName;
                move_uploaded_file($ImgTmp_name,$folderImg);
                db() -> query("INSERT INTO user_management(username, email,password,user_type,profile) VALUES('$name','$email','$safePass','$role','$newImgName')");
                return "create success! you can click on button 'Go Account'";
                
            }
        }
        
    }

    //delete user
    function deleteUser($userid){
        db()->query("DELETE FROM user_management WHERE user_id='$userid'");
        header("Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=account");

    }

    //Get only one recode by id
    function selectOneUser($id){
        return db()->query("SELECT * FROM user_management WHERE user_id=$id");
    }

    //update user account
    function updateUser($value){
        $username = $value['user'];
        $pass= $value['pass'];
        $email= $value['email'];
        $role= $value['role'];
        $user_id = $value['userId'];
        $safePass=password_hash($pass, PASSWORD_DEFAULT);
        $imgName=$_FILES['image']['name'];
        $imgSize=$_FILES['image']['size'];
        $ImgTmp_name=$_FILES['image']['tmp_name'];
        if($imgSize>525000){
            header("Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=account");
        }else{
            $extension =pathinfo($imgName,PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $AllowExtension= array('jpg','jpen','png');
            if(in_array($extensionLocal,$AllowExtension)){
            
                $newImgName=uniqid('php-',true).'.'.$extensionLocal;
                $folderImg='../assets/images/'.$newImgName;
                move_uploaded_file($ImgTmp_name,$folderImg);
                db() -> query("UPDATE user_management SET username='$username', password='$safePass', email='$email', user_type='$role',profile='$newImgName' WHERE user_id = '$user_id'");
                header("Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=account");
            }else{
                $newImgName=uniqid('php-',true).'.'.$extensionLocal;
                $folderImg='../assets/images/'.$newImgName;
                move_uploaded_file($ImgTmp_name,$folderImg);
                db() -> query("UPDATE user_management SET username='$username', password='$safePass', email='$email', user_type='$role', profile='$newImgName' WHERE user_id = '$user_id'");
                header("Location: http://localhost:8080/php/2021-php-project-sinetsem/?page=account");
            }
        }
    }
    //..............................pagination.............................//
    
    // get  post
    function getPost(){
        // result per page
        $result=8;

        //check for set page
        $page=0;
        isset($_GET['page_show'])? $page=$_GET['page_show']: $page=0;
        if($page>1){
            $start=($page*$result)-$result;
        }else{
            $start=0;
        }
        $data=db()-> query("SELECT * FROM products LIMIT $start, $result");
        return $data;

    }

    // get total page
    function getTotalpage(){
        $result = 8;
        $page=0;
        isset($_GET['page_show'])? $page=$_GET['page_show']: $page=0;
        if($page>1){
            $start=($page*$result)-$result;
        }else{
            $start=0;
        }
        $data=db()->query("SELECT product_id FROM products");
        $numRow= $data->num_rows;
        $totalPage = $numRow / $result;
        return $totalPage;
    }
    
        
