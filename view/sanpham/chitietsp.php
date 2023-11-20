 <!-- Trang chi tiết sản phẩm -->
 <div class="tong container">
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
              <div class="">Số lượng:
              <input type="number" value="1" min="0" name="product__quantity" class="product__quantity"></div>
              <br>
              <!--TH1:"KH thêm vào giỏ hàng "Tạo 1 form để lưu lại đơn hàng -->
              <?php
                 
                  if(isset($_GET['add_to_cart'])){

                  }
              ?>
              <form action="" method="GET">
              <input type="text" name="id_kh" value="<?php //echo ?>" hidden>
                <input type="text" name="id_sp" hidden>
                <button class="product__add-to-cart" name ="add_to_cart">Thêm vào giỏ hàng</button>
                <button class="buy-now"><a href="?act=buy-now">Mua ngay</a></button>
              </form>
              
              <div class="product__phone">Gọi điện để được tư vấn: <div class="product__number">0985016662</div>
              </div>
            </div>
          </div>
          <div class="product__policy">
          </div>
    </div>