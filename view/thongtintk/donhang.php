 <!-- Đơn hàng của bạn -->
 <div class="tong container">
 <div class="accountorder__boxphai" style="width: 200px;">
        <h2>Trang tài khoản</h2>
        <p>Xin chào, <strong><?=isset($_SESSION['userName'])?$_SESSION['userName']:''?></strong></p>
        <a href="?act=thongtintaikhoan">Thông tin tài khoản</a><br><br>
        <a href="?act=donhang">Đơn hàng của bạn</a><br><br>
        <a href="?act=doimatkhau">Đổi mật khẩu</a><br><br>
        <a href="?act=sodiachi">Số địa chỉ</a><br><br>
        <a href="?act=dangxuat">Đăng xuất</a>
    </div>
    <!-- <div class="accountorder__boxtrai"> -->
        <!-- <div class="accountorder__boxtrai--quantity">ĐƠN HÀNG CỦA BẠN(0)</div> -->
        <!-- <div class="accountorder__boxtrai--dropdown"> -->
            <!-- <button class="dropbtn"><span>Tất cả</span> <i class="fa-solid fa-chevron-down"></i> </button>
            <div class="dropdown-content">
            <a href="#">Loại 1</a>
            <a href="#">Loại 2</a>
            <a href="#">Loại 3</a>
            </div> -->
            <div class="table-wrapper" style="width:90%">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thời điểm đặt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $order):
                          extract($order); ?>
                    <tr>
                        <td scope="row">
                            <a href="index.php?act=chitietsp&id_sp=<?= $id_sp?>" style=" text-decoration: none;color: black;">
                                <img src="../img/prd/<?=$hinh_anh?>" alt="" width="150" height="100"> <?=$ten_sp ?>
                            </a>
                        </td>
                        <td><?=number_format($giagiam,)?></td>
                        <td><?=$so_luong_dat?></td>
                        <td><?=$thoi_diem_dat ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <!-- </div> -->
    <!-- </div> -->
</div>