 <!-- trang sản phẩm -->
<div class="all-prds container">
    <div class="content-prd">
        <img src="./img/prd/nền trang sản phẩm.png" alt="">
        <h2>
        <?php  ?>    
        TẤT CẢ SẢN PHẨM
        </h2>
        <span>Sắp xếp theo:</span>
        <select name="" id="">
            <option value="">Giá từ cao xuống thấp</option>
            <option value="">Giá từ thấp lên cao</option>
        </select>
        <div class="products">
                <?php  foreach($list_prds as $prd):
                        extract($prd);?>
                <div class="product">
                    <a href="">
                    <img src="../img/prd/<?php echo $hinh_anh ?>" alt="">
                    </a>
                    <a href="">
                        <strong><span style="font-size: 20px;"><?php echo $ten_sp ?></span></strong>
                    </a>
                    <div class="price">
                        <span><strong style="color: rgb(215, 16, 16);" ><?php echo number_format($giagiam)?>đ</strong></span>
                        <span style="font-size: 20px;" ><del><?php echo number_format($gia_sp,)?>đ</del></span>
                    </div>
                    <div class="assess">
                        <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                    </div>
                    <div class="heart">
                        <button class="click-heat">
                            <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                        </button>
                        <i class="fa-solid fa-heart fa-2xl heat" style="color: #c32222;"></i>
                    </div>
                </div>
                <?php endforeach;?>
        </div>
    </div>
    <?php include "boxright.php"?>
</div>