<style>
    .form-log-wrapper{
        padding-top: 100px;
    }
</style>
<?php
    $error = [];
    if(isset($_POST['log'])){
        $user_name = $_POST['user_name'];
        $pass = $_POST['pass'];
        if (empty($user_name)) {
            $error['error-username'] = 'Tên đăng nhập không được để trống';
        }
        if (empty($pass)) {
            $error['error-password'] = 'Mật khẩu không được để trống';
        }
        if(!$error){
            $users = upload_user($user_name,$pass);
            foreach($users as $user){
                if(($user['email'] == $user_name || $user['sdt'] == $user_name) && $user['mat_khau'] == $pass){
                    $_SESSION['userName']= $user_name;
                    header('location: ../view/index.php');
                    return;
                }
            }
        }
    }
?>
<!-- trang đăng nhập -->    
    <section class="form-log-wrapper">
        <form action="" class="form-log container" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tài khoản:</label>
              <input type="email" name="user_name" placeholder="Email/Số điện thoại" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <span class="error error-name"><?=isset($error['error-username']) ? $error['error-username']:''?></span>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu:</label>
              <input placeholder="Mật khẩu" name="pass" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <span class="error error-pass"><?=isset($error['error-password']) ? $error['error-password']:''?></span>
            <button type="submit" name="log" class="btn btn-primary">Đăng nhập</button>
        </form>
    </section>
