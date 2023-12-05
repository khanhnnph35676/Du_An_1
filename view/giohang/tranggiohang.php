
 <!-- main --> 
  <div class="tong">
        <div class="cart__content container">
        <!-- Tiêu đề giỏ hàng của bạn -->
        <h2 class="cart__header">Giỏ hàng của bạn</h2>
        <!-- Bảng sản phẩm -->
        <table class="table" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dòng sản phẩm mẫu -->
                <?php foreach($prds_on_cart as $prd_on_cart):
                        extract($prd_on_cart);?>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td>
                        <a style="text-decoration: none; color:black" href="index.php?act=chitietsp&id_sp=<?= $id_sp?>">
                            <img src="../img/prd/<?php echo $hinh_anh ?>" alt="Sản phẩm 1" style="width: 50px;">
                            <?php echo $ten_sp?>
                        </a>
                    </td>
                    <td style="color: #106F85;"> <del><?php echo number_format($gia_sp)?>đ </del> <?=number_format($giagiam)?>đ  </td>
                    <td><input type="number" value="<?php echo $tongsoluong ?>" min="1"></td>
                    <td style="color: #106F85;"><?php echo number_format($tongtien)?>đ</td>
                    <td><button class="btn btn-danger">
                    <a href="sanpham/xoaspgiohang.php?id_gio_hang=<?php echo $id_sp?>"
                        onclick="return confirm('Bạn muốn xoá sản phẩm này khỏi giỏ hàng của mình?')"
                        style="text-decoration: none; color:black">Xoá</a>
                    </button></td>
                </tr>
                <?php endforeach;?>
              <!--  onclick="return confirm('Bạn muốn xoá sản phẩm này khỏi giỏ hàng của mình?')" -->
                <!-- Thêm các dòng sản phẩm khác tương tự ở đây -->
            </tbody>
        </table>
        <!-- Button tiếp tục mua hàng -->
        <div class="cart__cost">
            <button class="btn-form"><a href="index.php" style="text-decoration: none; color:black">Tiếp tục mua hàng</a></button>
            <div class="cart__total">
                    <div class="cart__total-money">
                        <h6>Tổng tiền phải thanh toán: </h6>
                    </div>
                    <?php foreach($sumMoney_upload_prds_on_cart as $sumMoney_upload_prd_on_cart):
                        extract($sumMoney_upload_prd_on_cart);?>
                        <div class="cart__money">
                            <h6><?php echo number_format($tongtien)?>đ</h6>
                        </div>
                    <?php endforeach;?>
                </div>
        </div>
        <!-- Khung tổng tiền và Button thanh toán -->
        <div class="cart__pay">
            <button class="btn-form" >
            <a href=" <?php foreach($prds_on_cart as $prd_on_cart){
                extract($prd_on_cart);
                    if(isset($id_sp)){
                        echo $thanh_toan ='?act=buy-now&buy=buyall';
                    }
                 }
                 // khi không có sản phẩm sẽ chuyển sang trang chính
                 // tính làm thêm box thông báo cho khách đến trang chính
                 if($thanh_toan == ''){
                    echo 'index.php';
                 }
                 ?>"  style="text-decoration: none; color:black">Thanh toán
            </a></button>
        </div>
    </div>
</div>
<?php // khu check?>