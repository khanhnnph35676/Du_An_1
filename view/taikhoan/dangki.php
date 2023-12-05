<?php

// Kiểm tra quyền truy cập
if (!isset($_SESSION['user'])) {
    header('Location: dangnhap.php');
    exit;
}

// Nhận dữ liệu từ biểu mẫu
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Kiểm tra tính hợp lệ của các thông tin đăng ký
if (empty($username)) {
    $error['username'] = 'Tên đăng nhập không được để trống';
}
if (empty($password)) {
    $error['password'] = 'Mật khẩu không được để trống';
}
if (empty($email)) {
    $error['email'] = 'Email không được để trống';
}
if($password == "" || $newpassword == "" || $repassword == ""){
    $thongbao = "Vui lòng nhập đầy đủ thông tin";
    }else if ($password != $repassword) {
        $thongbao = "Mật khẩu và xác nhận mật khảu phải giống nhau.";
    }else{
      // Lấy ra ID người dùng hiện tại
      $id_current = $_SESSION['user']['id'];
      // Câu query update
      // $sql = "UPDATE users SET username='".$username."', password=MD5('".$password."'), email='".$email."' WHERE
      //       $sql = "UPDATE users SET username='".$username."', password=md5('".$password."'), email='".$email."' WHERE
      //       $query = "UPDATE users SET username='{$username}' , password=md5(?) , email=? WHERE id={$id_
      //       current}
      // Thực hiện câu query
      try {
          $stmt = $db->prepare($query);
          $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
          $stmt->bindParam(1, $hashedPassword);
          $stmt->bindParam(2, $email);
          $stmt->execute();
          // Chuyển hướng người dùng đến trang chủ
          header("location: index.php");
          exit;
          } catch (PDOException $e) {
              echo "<div class=\"alert alert-danger\">Có lỗi xảy ra!</div>";
              die("<pre>" . print_r($e, true));
          }
   }
?>
<!-- Trang đăng kí -->
<div class="tong container">
    <div class="signup__container">
        <h1 class="signup__content">Đăng ký tài khoản</h1>
        <form>
          <label class="signup__text" for="username">Tên người dùng*</label>
          <input class="signup__input" type="text" id="username" name="username" placeholder="Nhập tên người dùng" required>
    
          <label class="signup__text" for="email">Email*</label>
          <input class="signup__input" type="email" id="email" name="email" placeholder="Nhập email" required>
    
          <label class="signup__text" for="password">Mật khẩu*</label>
          <input class="signup__input" type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
          <label class="signup__text" for="repassword">Nhập lại mật khẩu*</label>
          <input class="signup__input" type="password" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" required>
    
          <div class="signup__btn">
            <button class="signup__btn--1" type="submit">Đăng ký</button>
            <button type="submit">Quay lại</button>
          </div>
        </form>
        <p class="signup__tologin">
            Bạn đã có tài khoản?<a href="">Đăng nhập ngay</a>
        </p>
      </div>
</div>