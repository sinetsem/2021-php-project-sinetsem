<?php 
    require_once('partial/header.php');
    require_once('partial/navbar.php');
    
?>
<div class="container p-5">
    <div class="d-flex justify-content-end p-2 mb-2 mt-4">
        <a href="process_user/create_user.php?page=<?= $_GET['page'] ?>" class="btn btn-primary mr-3">Add account +</a>
        <a href="process_user/form_login.php" class="btn btn-primary">Login</a>
    </div>
  
    <?php 
        require_once("database/database.php");
        $users= getAllUser();
        foreach($users as $user):
    ?>
    <div class="card ">
        <div class="card-body">
            <div class="d-flex ">
                <img width="200px" height="200px" class="rounded-circle" src="assets/images/<?= $user['profile'] ?>" alt="">
                <div class="ml-5 pt-3">
                    <h4>Username:<?= $user['username'] ?></h4>
                    <p>Email:<?= $user['email'] ?></p>
                    <p>Role:<?= $user['user_type'] ?></p>
                </div>
            </div>
            <div class="action d-flex justify-content-end">
                <a href="process_user/update_user_html.php?id=<?= $user['user_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                <a href="process_user/delete_user.php?id=<?= $user['user_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </div> 
        </div>
    </div>

    <?php endforeach; ?>
</div>
<?php 
    require_once('partial/footer.php');
?>