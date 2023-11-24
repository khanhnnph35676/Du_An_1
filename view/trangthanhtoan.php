 <?php
    $error = [];
    $succes=[];
    //$_SERVER['REQUES_METHOD'] == "POST"
    if(isset($_POST['submit'])){
            // chỉ để check xem  thông tin khách hàng
            $id_kh = $_POST['id_kh'];
            $dia_chi = $_POST['dia_chi'];
            $so_luong_dat = $_POST['so_luong_dat'];
            if($dia_chi ==''){
                $error['error-address']= 'Mời bạn nhập địa chỉ';
                // 1 là phuong thức trực tiếp 2 là momo
            }elseif($dia_chi !='' && $_POST['payment_method'] =='1'){
                foreach($prds_on_cart as $prd_on_cart ){
                    extract($prd_on_cart);
                    $id_sp;$id_kh;$tongsoluong;
                    abate($id_sp,$id_kh,$tongsoluong);
                }
                // khi đặt xong phải xoá khỏi giỏ hàng
                delete_cart($id_kh);
                echo $succes['dat_hang']= 'Đặt hàng thành công' ;
                // đặt xong thông báo thành công chuyển ra trang chủ              
                    header('location: index.php');
            }elseif($dia_chi !='' && $_POST['payment_method'] =='2'){
                header('location: index.php?act=thanhtoanatmmomo');
            }
    }
    if(isset($_POST['save'])){
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        update_user($phone ,$address,$email,$user_then_check['id']);
        header('refresh: 1');
    }
    if(isset($_GET['partnerCode'])){
        // $code_order = rand(0,9999);
        // $partnerCode = $_GET['partnerCode'];
        // $orderId = $_GET['orderId'];
        // $amount = $_GET['amount'];
        // $orderInfo =  $_GET['orderInfo'];
        // $orderType =  $_GET['orderType'];
        // $transId =  $_GET['transId'];
        // $payType = $_GET['payType'];
        foreach($prds_on_cart as $prd_on_cart){
            extract($prd_on_cart);
            $id_sp;$id_kh;$tongsoluong;
            abateMomo($id_sp,$id_kh,$tongsoluong);
        }
        delete_cart($id_kh);
        echo $succes['dat_hang']= 'Đặt hàng thành công' ;
        // đặt xong thông báo thành công chuyển ra trang chủ              
        header('location: index.php');
        
    }
 ?>   

<!-- Trang chủ thanh toán -->
 <div class="tong container">
        <div class="bentrai">
            <a href="../view/index.php">Quay lại trang chủ</a>
            <div class="boxtrai">
                <a href="#">Thông tin nhận hàng</a>
                <div class="form-container">
                    <form method="POST">
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" value="<?php echo $user_then_check['email'] ?>" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Địa chỉ:</label>
                            <input type="text" id="address" name="address" value="<?php echo $user_then_check['dia_chi'] ?>" class="form-input" required>
                        </div>
                        <span> <?php echo isset($error['error-address'])?$error['error-address']:''?></span>
                        <div class="form-group">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="tel" id="phone" name='phone' class="form-input" value="<?php echo  $user_then_check['sdt'] ?>" required>
                        </div>
                        <div class="form-group">
                            <button name="save">Lưu thông tin</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>

        <div class="order-container">
            <?php foreach($prds_on_cart as $prd_on_cart ):
                    extract($prd_on_cart);?>
            <div class="order-item">
                <img src="../img/prd/<?php echo $hinh_anh ?>" class="product-image">
                <div class="product-info">
                <div class="product-name"><?php echo $ten_sp?></div>
                    <div class="product-price"><?php echo number_format($giagiam,)?>đ</div>
                </div>
                <div class="quantyti-prd"><?php echo $tongsoluong?></div>
            </div>
            <?php endforeach;?>
            <div class="order-summary">
                <div class="order-shipping">Phí vận chuyển: 50.000đ</div>
                <div class="order-total">Tổng tiền: <?php echo number_format($sum_abate['tongtien'])?>đ</div>
                <input type="text" class="discount-input" placeholder="Nhập mã giảm giá">
            </div>

    
            <form action="" class="" method="POST"  enctype="application/x-www-form-urlencoded">   
                <div class="form-group">
                    <label for="" class="form-label">Phương thức thanh toán :</label>
                   <div class="thanhtoan"> 
                        <input type="radio" id="phone" name="payment_method" value="1"  required>
                        Thanh toán khi nhận hàng COD
                        <?php ?>
                    </div>
                </div>
                <div class="form-group">                           
                   <div class="thanhtoan"> 
                    <input type="radio" id="phone2" name="payment_method" value="2"  required>
                    Ví điện tử MOMO
                    </div>
                </div>
                <?php foreach($prds_on_cart as $prd_on_cart ):
                    extract($prd_on_cart);?>
                     <input type="text" name="dia_chi" value="<?php echo $dia_chi?>" hidden>
                     <input type="number" name="id_sp" value="<?php echo $id_sp?>" hidden >
                     <input type="number" name="id_kh" value="<?php echo $id_kh?>" hidden>
                    <input type="number" name="so_luong_dat" value="<?php echo $tongsoluong?>"  hidden>
                <?php endforeach;?>
                <button class="checkout-button" name='submit'>Đặt hàng</button>
                <span><?php echo isset($error['error-email'])? $error['error-email']:'';
                            echo isset($error['error-san-pham'])? $error['error-san-pham']:'' ?></span>
            </form>
        </div>
    </div>
    <?php
// if (isset($_GET['payment_method'])) {
//     // Trường radio input có tên 'cod' tồn tại trong URL
//     $selected_payment_method = $_GET['cod'];
//     echo "Phương thức thanh toán được chọn: " . $selected_payment_method;
// } else {
//     // Trường radio input không tồn tại trong URL
//     echo "Vui lòng chọn một phương thức thanh toán.";
// }
?>