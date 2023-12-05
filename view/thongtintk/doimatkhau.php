<div class="tong container" style="padding-top: 200px;">
    <div class="accountorder__boxphai">
        <h2>Trang tài khoản</h2>
        <p>Xin chào, <strong><?=isset($_SESSION['userName'])?$_SESSION['userName']:''?></strong></p>
        <a href="?act=thongtintaikhoan">Thông tin tài khoản</a><br><br>
        <a href="?act=donhang">Đơn hàng của bạn</a><br><br>
        <a href="?act=doimatkhau">Đổi mật khẩu</a><br><br>
        <a href="?act=sodiachi">Số địa chỉ</a><br><br>
        <a href="?act=dangxuat">Đăng xuất</a>
    </div>
    <div class="accinfo__boxtrai" style="margin:0px 0px 50px 110px;">
        <div class="accpass__container">
            <h1 class="accpass__content">Đổi mật khẩu </h1>
            <h5 style="text-align: center;">Để đảm bảo tính bảo mật vui lòng đặt mật khẩu với ít nhất 8 kí tự</h5>
            <form>
        
            <input class="accpass__input" type="password" id="oldpassword" name="oldpassword" placeholder="Nhập mật khẩu cũ" required>
            <span class="accpass__span">Hiển thị mật khẩu</span>
                

            <input class="accpass__input" type="password" id="newpassword" name="newpassword" placeholder="Nhập mật khẩu mới" required>
            <span class="accpass__span">Hiển thị mật khẩu</span>

            <input class="accpass__input" type="password" id="confirmpassword" name="confirmpassword" placeholder="Nhập mật khẩu" required>  
            <span class="accpass__span">Hiển thị mật khẩu</span>
            
            <div class="accpass__btn">
                <button class="accpass__btn--1" type="submit">Xác nhận</button>
            </div>
            </form>
        </div>
    </div>
</div>