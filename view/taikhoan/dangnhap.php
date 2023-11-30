<style>
    .form-log-wrapper{
        padding-top: 100px;
    }
</style>
<?php
    if(isset($_POST['log'])){
        $user_name = $_POST['user_name'];
        $pass = $_POST['pass'];
        $user = upload_user($user_name,$pass);
        $_SESSION['userName']= $user_name;
        echo $_SESSION['userName'];
        header('location: ../view/index.php');
    }
?>
<!-- trang đăng nhập -->    
    <section class="form-log-wrapper">
        <form action="" class="form-log container" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tài khoản:</label>
              <input type="email" name="user_name" placeholder="Email/Số điện thoại" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <span class="error error-name"></span>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu:</label>
              <input placeholder="Mật khẩu" name="pass" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <span class="error error-pass"></span>
            <button type="submit" name="log" class="btn btn-primary">Đăng nhập</button>
        </form>
    </section>
    <script>
    function validateForm() {
        var password = document.getElementById("exampleInputPassword1").value;

        if (password !== "123456") { // Thay YOUR_PASSWORD bằng mật khẩu mong muốn
            document.getElementById("error-pass").innerHTML = "Bạn đã nhập sai mật khẩu";
            return false;
        }

        return true;
    }
</script>