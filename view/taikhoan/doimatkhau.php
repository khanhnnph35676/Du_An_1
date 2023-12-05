<?php
if(isset($_POST['submit'])){
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $repassword = $_POST['repassword'];
    if($password == "" || $newpassword == "" || $repassword == ""){
        $thongbao = "Vui lòng nhập đầy đủ thông tin";
        }else if(!password_verify($password, $checkvar['password'])) {
            $thongbao = "Mật khẩu cũ không chính xác!";
            } else if ($newpassword != $repassword) {
                $thongbao = "Nhập mật khẩu và nhập lại
                mật khẩu không giống nhau!";
                } else if( strlen($newpassword )< 6)
                { 
                    $thongbao = "";
                    } else if($newpassword != $repassword){
                        $thongbao = "Mat khau qua ngan";
                        }else{
                            $sql = "UPDATE users SET password='$newpassword' WHERE id=$id";
                            mysqli_query($conn,$sql);
                            header("location:index.html");
                            }
                            }
                            ?>
     <div class="tong container">
        <div class="signup__container">
            <h1 class="signup__content">Đổi mật khẩu </h1>
            <form>
              <label class="signup__text" for="oldpassword">Mật khẩu cũ</label>
              <input class="signup__input" type="password" id="oldpassword" name="oldpassword" placeholder="Nhập mật khẩu cũ" required>
              <span class="signup__span">Hiển thị mật khẩu</span>
                
              <label class="signup__text" for="newpassword">Mật khẩu mới</label>
              <input class="signup__input" type="password" id="newpassword" name="newpassword" placeholder="Nhập mật khẩu mới" required>
              <span class="signup__span">Hiển thị mật khẩu</span>

              <label class="signup__text" for="confirmpassword">Xác nhận mật khẩu*</label>
              <input class="signup__input" type="password" id="confirmpassword" name="confirmpassword" placeholder="Nhập mật khẩu" required>  
              <span class="signup__span">Hiển thị mật khẩu</span>
              
              <div class="signup__btn">
                <button class="signup__btn--1" type="submit">Xác nhận</button>
                <button type="submit">Quay lại</button>
              </div>
            </form>
            <p class="signup__tologin">
                Bạn đã có tài khoản?<a href="">Đăng nhập ngay</a>
            </p>
          </div>
        </div>