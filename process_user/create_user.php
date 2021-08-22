<?php 
    require_once('../partial/header.php');
    //require_once('partial/navbar.php');

?>

<div class="container p-4">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
        
            <div class="d-flex justify-content-center">
                <img class="" width="120px" height="100px" src="https://st.depositphotos.com/1026166/3160/v/600/depositphotos_31605339-stock-illustration-restaurant-food-quality-badge.jpg" alt="">
                
            </div>
            <h4 class="text-center">S-RESTAURANT</h4>
            <div class="mb-2 mt-3">
                <a href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?client_id=717762328687-iludtf96g1hinl76e4lc1b9a82g457nn.apps.googleusercontent.com&scope=profile%20email&redirect_uri=https%3A%2F%2Fstackauth.com%2Fauth%2Foauth2%2Fgoogle&state=%7B%22sid%22%3A1%2C%22st%22%3A%2259%3A3%3Abbc%2C16%3Ae4880a4a2e765bea%2C10%3A1629439584%2C16%3A36e1d585b8eea372%2Ce8e553c64a662ead4dabb2a4552a1cf2a9fe60170a3b8481ef3ca2c86b8834d8%22%2C%22cdl%22%3Anull%2C%22cid%22%3A%22717762328687-iludtf96g1hinl76e4lc1b9a82g457nn.apps.googleusercontent.com%22%2C%22k%22%3A%22Google%22%2C%22ses%22%3A%2277465e80337f429587bedbfebc2e064f%22%7D&response_type=code&flowName=GeneralOAuthFlow" class="btn btn-white btn-block border">
                    <img class="" width="25px" height="25px" src="data:image/png;base64,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" alt="">
                    <span>Login with Google</span>
                </a>
            </div>
            <div class="mb-2">
                <a href="https://github.com/login/oauth/authorize?client_id=01b478c0264a1fbd7183&scope=user:email&redirect_uri=https%3a%2f%2fstackauth.com%2fauth%2foauth2%2fgithub&state=%7b%22sid%22%3a1%2c%22st%22%3a%2259%3a3%3abbc%2c16%3a6246c69eeff954dc%2c10%3a1629440047%2c16%3ab1a1d4e63e2a28c9%2c08a1bebfe8dc9486449ca53a13691fee9b00638a165b4e28742741e8fdced5ca%22%2c%22cdl%22%3anull%2c%22cid%22%3a%2201b478c0264a1fbd7183%22%2c%22k%22%3a%22GitHub%22%2c%22ses%22%3a%22cea4a16579af48d0b57b8ca9fab03ce0%22%7d&response_type=code" class="btn btn-dark btn-block border" style="background-color: black;">
                    <img width="30px" height="30px" src="https://www.logo.wine/a/logo/GitHub/GitHub-Icon-White-Dark-Background-Logo.wine.svg" alt="">
                    <span class="text-white">Login with GitHub</span>
                </a>
            </div>
            <div class="mb-2">
                <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=145044622175352&kid_directed_site=0&app_id=145044622175352&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.0%2Fdialog%2Foauth%3Fclient_id%3D145044622175352%26scope%3Demail%26redirect_uri%3Dhttps%253A%252F%252Fstackauth.com%252Fauth%252Foauth2%252Ffacebook%26state%3D%257B%2522sid%2522%253A1%252C%2522st%2522%253A%252259%253A3%253Abbc%252C16%253A48881fec9ef2339d%252C10%253A1629440073%252C16%253A37e654190d7cf069%252Ceb2ddec1a0b2c3bd23594145fbda99aa7d982874d317479eb08d30ff96a624e8%2522%252C%2522cdl%2522%253Anull%252C%2522cid%2522%253A%2522145044622175352%2522%252C%2522k%2522%253A%2522Facebook%2522%252C%2522ses%2522%253A%25228d5e99795f0a4b09b54d44e1270ef19d%2522%257D%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D4cd09f2c-5eed-4216-9792-c54cabaeaeec%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fstackauth.com%2Fauth%2Foauth2%2Ffacebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522sid%2522%253A1%252C%2522st%2522%253A%252259%253A3%253Abbc%252C16%253A48881fec9ef2339d%252C10%253A1629440073%252C16%253A37e654190d7cf069%252Ceb2ddec1a0b2c3bd23594145fbda99aa7d982874d317479eb08d30ff96a624e8%2522%252C%2522cdl%2522%253Anull%252C%2522cid%2522%253A%2522145044622175352%2522%252C%2522k%2522%253A%2522Facebook%2522%252C%2522ses%2522%253A%25228d5e99795f0a4b09b54d44e1270ef19d%2522%257D%23_%3D_&display=page&locale=km_KH&pl_dbl=0" class="btn btn-primary btn-block border">
                    <img width="25px" height="25px" class="rounded-circle" src="https://sg-res.9appsinstall.com/sg/res/jpg/62/80/3a0882258caf6710004d3113c7db-le4.jpg?x-oss-process=style/mq200" alt="">
                    <span>Login with Facebook</span>
                </a>
            </div>
            <?php 
                $name = "";
                $password = "";
                $role="";
                $email="";
                $profile='';
                $user_error="";
                $pass_error="";
                $email_error="";
                $profile_error="";
                $role_error="";
                $isCreate='';
                require_once('../database/database.php');
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    if(empty($_POST['user'])){
                        $user_error='Please enter a username';
                    }else{
                        $name=$_POST['user'];
                        if(!preg_match("/^[a-zA-Z\d\s\-\_]+$/",$name)){
                            $user_error="Invalid Username!";
                            $name='';
                        }
                    }
                    if(empty($_POST['pass'])){
                        $pass_error ='Please enter a password';
                    }else{
                        $password=$_POST['pass'];
                        if(!preg_match("/^[a-zA-Z\d\s\-\_\#\!\@\&]+$/",$password)){
                            $pass_error='Invalid password!';
                            $password='';

                        }
                    }
                    if(empty($_POST['email'])){
                        $email_error="Please enter a email!";

                    }else{
                        $email=$_POST['email'];
                    }
                    if(empty($_POST['role'])){
                        $role_error='Please select role!';

                    }else{
                        $role=$_POST['role'];
                    }
                    
                    if(!empty($name) && !empty($password) && !empty($email) && !empty($role)){
                        $isCreate=createUser($_POST);
                    }
                }
                         
            ?>
            <div class=" rounded border shadow-sm mt-4">
                <div class="card-body">
                
                    <form action="" method="post" enctype="multipart/form-data">
                        
                
                        <div class="">
                            <div class="form-group">
                                
                                <input type="text" class="form-control" placeholder="Username" name="user">
                                <small class="text-danger"><?= $user_error ?></small>
                            </div>
                                    
                            <div class="form-group">
                               
                                <input type="password" class="form-control" placeholder="Password" name="pass">
                                <small class="text-danger"><?= $pass_error ?></small>    
                            </div>
                            <div class="form-group">
                               
                                <input type="email" class="form-control" placeholder="Email" name="email">
                                <small class="text-danger"><?= $email_error ?></small>
                            </div>
                            <div class="form-group">
                                <input type="file" id="myFile" name='image'>
                                
                            </div>
                           
                            <div class="form-group">
                         
                                <select name="role" class="p-1 form-control ">
                                    <option value="">Select role:</option>
                                    <option value="admin">Admin</option>
                                    <option value="normal">Normal</option>
                                </select>
                                <small class="text-danger"><?= $role_error?></small>
                                <small class="text-success"><?= $isCreate?></small>
                            </div>
                                
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary btn-block ">Create</button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <p >Don't have an account?</p>
                <!-- <a href="">Sign up</a> -->
                
            </div>
            <div class="d-flex justify-content-center ">
                <?php if(empty($isCreate)): ?>
                <button class="btn btn-info btn-block mr-3" onclick="window.history.back();">&#8592; Back</button>
                <?php endif ; ?>
                <?php if(!empty($isCreate)): ?>
                <a href="http://localhost:8080/php/2021-php-project-sinetsem/?page=account" class="btn btn-success ">GO Account</a>
                <?php endif ; ?>
            </div>
        </div>
    </div>
</div>