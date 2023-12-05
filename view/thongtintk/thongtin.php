<!-- Thông tin tài khoản -->
<div class="tong container">
<div class="accountorder__boxphai">
        <h2>Trang tài khoản</h2>
        <p>Xin chào, <strong><?=isset($_SESSION['userName'])?$_SESSION['userName']:''?></strong></p>
        <a href="?act=thongtintaikhoan">Thông tin tài khoản</a><br><br>
        <a href="?act=donhang">Đơn hàng của bạn</a><br><br>
        <a href="?act=doimatkhau">Đổi mật khẩu</a><br><br>
        <a href="?act=sodiachi">Số địa chỉ</a><br><br>
        <a href="?act=dangxuat">Đăng xuất</a>
    </div>
    <div class="accinfo__boxtrai">
        <div class="accinfo__box">
            <img src="" class="accinfo__box--img" alt="">
            <h1><?=$user['ten_kh']?></h1>
            <p>SDT: <?=$user['sdt']?></p>
            <p>Email: <?=$user['email']?></p>
            <p>Dia chi: <?=$user['dia_chi']?></p>
        </div>
    </div>
</div>