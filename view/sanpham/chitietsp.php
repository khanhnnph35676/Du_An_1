 <!-- Trang chi tiết sản phẩm -->
<?php
  if(isset($_POST['add_to_cart'])){
    $id_kh = $_POST['id_kh'];
    $id_sp = $_POST['id_sp'];
    $so_luong_them = $_POST['product__quantity'];
    add_prd($id_sp,$id_kh,$so_luong_them);
  }
?>
    <div class="tong container">
      <div class="product__ct">
        <div class="product__details">
            <div class="product__image">
              <img src="../img/prd/<?php echo $prd['hinh_anh']?>" alt="Product Image" class="main__image" id="mainImage">
              <div class="thumbnail__container">
                <img src="../img/prd/<?php echo $prd['hinh_anh']?>" alt="Thumbnail 1" class="thumbnail" onclick="changeImage('../img/prd/<?php echo $prd['hinh_anh']?>')">                
                <img src="../img/prd/<?php echo $prd['hinh_anh']?>" alt="Thumbnail 2" class="thumbnail" onclick="changeImage('../img/prd/<?php echo $prd['hinh_anh']?>')">
                <img src="../img/prd/<?php echo $prd['hinh_anh']?>" alt="Thumbnail 3" class="thumbnail" onclick="changeImage('../img/prd/<?php echo $prd['hinh_anh']?>')">
              </div>
            </div>
            <div class="product__info">
                <h1><?php echo $prd['ten_sp']?></h1>
                <p class="product__status">Tình trạng: <?php if($prd['so_luong'])
                                                                {echo 'Còn hàng';}?></p>
                <div class="product__price">
                  <p ><s style="color: red;"><?php echo number_format($prd['gia_sp'])?>đ</s></p>
                  <div class="product__price--real"><?php echo number_format($prd['giagiam'])?>đ</div>
                </div>
                <p class="product__description"><?php echo $prd['noi_dung_sp']?></p>    
                <form action="" method="POST">
                  <div class="">Số lượng:
                    <input type="number" value="1" min="0" name="product__quantity" class="product__quantity">
                  </div>
                  <br>
                  <!--TH1:"KH thêm vào giỏ hàng "Tạo 1 form để lưu lại đơn hàng -->
                  <input type="text" name="id_kh" value="<?php echo isset($user_then_check['id'])?$user_then_check['id']:'' ?>" hidden >
                  <input type="text" name="id_sp" value="<?php echo $prd['id'] ?>" hidden >
                  <button class="product__add-to-cart" name ="add_to_cart">Thêm vào giỏ hàng</button>
                  <button class="buy-now"><a href="?act=buy-now">Mua ngay</a></button>
                </form>
                <div class="product__phone">Gọi điện để được tư vấn: <div class="product__number">0985016662</div>
              </div>
            </div>
            <div class="product__policy"></div>
      </div>
      <div class="product__footer">
        <div class="related-products">
        <h4 class="pro-cx">Có thể bạn quan tâm</h4>
        <div class="sum-relad">
          <center>
            <div class="related-1">
                <div class="relad-img">
                    <img src="../img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="rel-img">
                </div>
                <div class="text-relad">
                    <p class="title-product">Ghế Phòng Khách ND01</p>
                    <p>Ghế Phòng Khách ND01</p>
                    <p class="prices">500.000VND</p>
                </div>
            </div>
          </center>
          <center>
            <div class="related-1">
                  <div class="relad-img">
                      <img src="../img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="rel-img">
                  </div>
                  <div class="text-relad">
                      <p class="title-product">Ghế Phòng Khách ND01</p>
                      <p>Ghế Phòng Khách ND01</p>
                      <p class="prices">500.000VND</p>
                  </div>
              </div>
          </center>
          <center>
            <div class="related-1">
                <div class="relad-img">
                    <img src="../img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="rel-img">
                </div>
                <div class="text-relad">
                    <p class="title-product">Ghế Phòng Khách ND01</p>
                    <p>Ghế Phòng Khách ND01</p>
                    <p class="prices">500.000VND</p>
                </div>
            </div>
          </center>
          <center>
              <div class="related-1">
                  <div class="relad-img">
                      <img src="../img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="rel-img">
                  </div>
                  <div class="text-relad">
                      <p class="title-product">Ghế Phòng Khách ND01</p>
                      <p>Ghế Phòng Khách ND01</p>
                      <p class="prices">500.000VND</p>
                  </div>
              </div>
          </center>
          </div>
          </div>
            <div class="comment">
                <h4>Đánh giá(3)</h4>
                <hr>
                <div class="user-comment">
                  <div class="img-user">
                      <img src="./img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="img">
                      <span class="text-comment">
                        <p class="name-user">Ryan</p>
                        <p>15/03/2023</p>
                        <p>There are many variations of passages of lorem Ipum available theresu anything embarrassing 
                          It’s a long established fact that a reader will be looking at its layout. </p>
                      </span>
                    </div><br>
                  <div class="img-user">
                    <img src="./img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="img">
                    <span class="text-comment">
                      <p class="name-user">Ryan</p>
                      <p>15/03/2023</p>
                      <p>There are many variations of passages of lorem Ipum available theresu anything
                         embarrassing It’s a long established fact that a reader will be looking at its layout. </p>
                    </span>
                    </div><br>
                  <div class="img-user">
                    <img src="./img/anhsp/Screenshot 2023-06-08 002834.jpg" alt="" class="img">
                    <span class="text-comment">
                      <p class="name-user">Ryan</p>
                      <p>15/03/2023</p>
                      <p>There are many variations of passages of lorem Ipum available theresu anything 
                        embarrassing It’s a long established fact that a reader will be looking at its layout. </p>
                    </span>
                  </div><br>
                </div>
            </div>
          </div>
      </div>
    </div>