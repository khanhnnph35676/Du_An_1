<?php
    $error = [];
    $succes = [];
    if(isset($_POST['log'])){
        $username = $_POST['username-admin'];
        $pass = $_POST['pass-admin'];

        if(empty($username)){
            $error['errorNameUserAdmin'] = 'Bạn chưa nhập tài khoản!';
        }
        if(empty($pass)){
            $error['errorPassAdmin'] = 'Bạn chưa nhập mật khẩu!';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- trang đăng nhập -->
    <div class="admin">
        <div class="content-admin">
            <div class="box-center">
                <h1><i class="fa-brands fa-squarespace fa-xl"></i> Admin</h1>
                <h2 class="head-line__content-admin">Everything you need for your Admin</h2>
                <h4 class="head__desc">
                    It is long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout
                </h4>
            </div>
            <div class="form-wrapper" style="height: 450px;">
                <form action="" method="POST">
                    <h3>Đăng nhập</h3>
                    <div class="input-group">
                        <input type="text" name="username-admin" placeholder="Nhập tài khoản" class="input__content">
                    </div>
                    <span><?=isset($error['errorNameUserAdmin'])?$error['errorNameUserAdmin']:''?></span>
                    <div class="input-group">
                        <input type="password" name="pass-admin" placeholder="Nhập mật khẩu" class="input__content">
                    </div>
                    <span><?=isset($error['errorPassAdmin'])?$error['errorPassAdmin']:''?></span>
                    <div class="input-group">
                        <input type="password" name="repass-admin" placeholder="Nhập lại mật khẩu" class="input__content">
                    </div>
                    <div class="input-group">
                        <button class="input__content btn-log-admin" name='log'>Đăng ký</button>
                    </div>
                    <span><?= isset($error['nameOrPass'])?$error['nameOrPass']:''?></span>
                    <div class="fct-acount">
                        <a href="">Quên mật khẩu?</a>
                        <a href="../admin.php">Đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="box-right">
            
        </div>
    </div>
</body>