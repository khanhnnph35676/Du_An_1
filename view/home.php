<?php
    $list_prds = upload_prds();
    $list_directories = list_directories();
?>
 <!-- main -->
    <main> 
        <!-- sản phẩm lần 1 -->
        <div class="hot-prd">
            <a href=""><img src="../img/prd/Component 1.png" alt=""></a>
            <a href=""><img src="../img/prd/Component 2.png" alt=""></a>
            <a href=""><img src="../img/prd/Component 3.png" alt=""></a>
            <a href=""><img src="../img/prd/Component 4.png" alt=""></a>
        </div>
        <!-- sản phẩm lần 2 -->
        <div class="prd container">
            <!-- Tên 1 mục lớn của sản phẩm -->
            <div class="headline">
                <h1>SẢN PHẨM NỔI BẬT</h1>
            </div>
            <!--Danh mục nhỏ trong mục lớn này-->
            <div class="categories-prd">
                <ul>
                    <?php foreach($list_directories as $directory):
                        extract($directory);?>
                        <li><a href=""><?php echo $ten_danhmuc ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Tất cả sản phẩm trong mục lớn -->
            <div class="prd-wapper container">
                <div class="product-container--2">
                    <div class="product-wrapper--2">
                        <?php  foreach($list_prds as $prd):
                            extract($prd);?>
                        <div class="product--2">
                            <div class="img__prd-wrapper">
                                <a href="index.php?act=chitietsp&id_sp=<?= $id?>" class="link-img__prd-wrapper">
                                    <img src="../img/prd/<?php echo $hinh_anh ?>" alt="">
                                </a>
                            </div>
                            
                            <a class="name__prd" href="index.php?act=chitietsp&id_sp=<?= $id?>">
                                <strong><span  style="font-size: 20px;" ><?= $ten_sp?></span></strong>
                            </a>
                            <div class="price">
                                <span><strong style="color: rgb(215, 16, 16);" ><?= number_format($gia_sp)?>đ</strong></span>
                                <span><del><?= number_format($giagiam)?>đ</del></span>
                            </div>
                            <div class="assess">
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                            </div>
                            <div class="heart">
                                <form action="">
                                <button class="click-heat">
                                    <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                                </button>
                                </form>
                                <i class="fa-solid fa-heart fa-2xl heat" style="color: #c32222;"></i>
                            </div>
                            <div class="add-to-cart">
                                <form action="" method="">
                                    <button class="btn-atc">Thêm vào giỏ hàng</button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach;?>
                <!-- Thêm các sản phẩm khác vào đây -->
                    </div>
                </div>
                <button class="btn__prd" id="previousButton2"><i class="fa-solid fa-chevron-up fa-rotate-270 fa-2xl" style="color: #fafafa;"></i></button>
                <button class="btn__prd" id="nextButton2"><i class="fa-solid fa-chevron-up fa-rotate-90 fa-2xl" style="color: #ffffff;"></i></button>
            </div>
        </div>
        <!-- sản phẩm lần 3 -->
        <div class="swiper-container ">
            <div class="icon-dms">
                <div class="icon-dm">
                    <a href=""><img src="../img/icon-dm/Rectangle 90.png" alt=""></a>
                    <a href=""><img src="../img/icon-dm/Rectangle 91.png" alt=""></a>
                    <a href=""><img src="../img/icon-dm/Rectangle 92.png" alt=""></a>
                </div>
                <div class="icon-dm">
                    <a href=""><img src="../img/icon-dm/Rectangle 93.png" alt=""></a>
                    <a href=""><img src="../img/icon-dm/Rectangle 94.png" alt=""></a>
                    <a href=""><img src="../img/icon-dm/Rectangle 95.png" alt=""></a>
                </div>
                <div class="icon-dm">
                    <a href=""><img src="../img/icon-dm/Rectangle 96.png" alt=""></a>
                    <a href=""><img src="../img/icon-dm/Rectangle 97.png" alt=""></a>
                    <a href=""><img src="../img/icon-dm/Rectangle 98.png" alt=""></a>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <?php
                    $upload_prds_hot =upload_prds_hot();
                    foreach($upload_prds_hot as $upload_prd_hot):
                        extract($upload_prd_hot);
                ?>
                    <div class="swiper-slide">
                        <div class="s-product">
                            <a href="index.php?act=chitietsp&id_sp=<?php echo $id?>">
                                <img src="../img/prd/<?php echo $hinh_anh ?>" width="380px" height="250px" alt="">
                            </a>
                            <div class="content-product">
                                <a href="index.php?act=chitietsp&id_sp=<?php echo $id?>">
                                    <strong><span style="font-size: 20px;" ><?php echo $ten_sp ?></span></strong>
                                </a>
                                <div class="price">
                                    <span><strong style="color: rgb(215, 16, 16);" ><?php echo number_format($giagiam)?>đ</strong></span>
                                    <span><del><?php echo number_format($gia_sp,) ?>đ</del></span>
                                </div>
                                <p class="prd__desc"><?php echo $noi_dung_sp ?></p>
                                <div class="assess">
                                    <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                </div>
                                <div class="heart">
                                    <form action="">
                                        <button class="click-heat">
                                            <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                                        </button>
                                    </form>
                                    <i class="fa-solid fa-heart fa-2xl heat" style="color: #c32222;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- sản phẩm lần 4 -->
        <div class="prd container">
            <!-- Tên 1 mục lớn của sản phẩm -->
            <div class="headline">
                <h1>SẢN PHẨM NỔI BẬT</h1>
            </div>
            <!--Danh mục nhỏ trong mục lớn này-->
            <div class="categories-prd">
                <ul>
                    <?php foreach($list_directories as $directory):
                        extract($directory);?>
                    <li><a href=""><?php echo $ten_danhmuc ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="prd-wapper container">
                <div class="product-container--1">
                    <div class="product-wrapper--1">
                        <?php  foreach($list_prds as $prd):
                            extract($prd);?>
                        <div class="product--1">
                            <div class="img__prd-wrapper">
                                <a href="index.php?act=chitietsp&id_sp=<?= $id?>" class="link-img__prd-wrapper">
                                    <img src="../img/prd/<?php echo $hinh_anh ?>" alt="">
                                </a>
                            </div>
                            
                            <a class="name__prd" href="index.php?act=chitietsp&id_sp=<?= $id?>">
                                <strong><span  style="font-size: 20px;" ><?= $ten_sp?></span></strong>
                            </a>
                            <div class="price">
                                <span><strong style="color: rgb(215, 16, 16);" ><?= number_format($gia_sp)?>đ</strong></span>
                                <span><del><?= number_format($giagiam)?>đ</del></span>
                            </div>
                            <div class="assess">
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                            </div>
                            <div class="heart">
                                <form action="">
                                <button class="click-heat">
                                    <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                                </button>
                                </form>
                                <i class="fa-solid fa-heart fa-2xl heat" style="color: #c32222;"></i>
                            </div>
                            <div class="add-to-cart">
                                <form action="" method="">
                                    <button class="btn-atc">Thêm vào giỏ hàng</button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach;?>
                <!-- Thêm các sản phẩm khác vào đây -->
                    </div>
                </div>
                <button class="btn__prd" id="previousButton"><i class="fa-solid fa-chevron-up fa-rotate-270 fa-2xl" style="color: #fafafa;"></i></button>
                <button class="btn__prd" id="nextButton"><i class="fa-solid fa-chevron-up fa-rotate-90 fa-2xl" style="color: #ffffff;"></i></button>
            </div>
            <!-- Tất cả sản phẩm trong mục lớn -->
        </div>
        <!-- Khách bình luận-->
        <div class="cmt-pr">
            <!-- <img src="./img/prd/nền khách bình g.png" alt=""> -->
            <div class="cmt-users container">
                <div class="content-cmt">
                    <div class="content-cmt">
                        <div class="icon-user">
                            <img src="../img/banner/baner2.png" alt="">
                        </div>
                        <div class="all-stars">
                            <i class="fa-solid fa-star fa-lg" style="color: #ffc800;"></i>
                            <i class="fa-solid fa-star fa-lg" style="color: #ffc800;"></i>
                            <i class="fa-solid fa-star fa-lg" style="color: #ffc800;"></i>
                            <i class="fa-solid fa-star fa-lg" style="color: #ffc800;"></i>
                            <i class="fa-solid fa-star fa-lg" style="color: #ffc800;"></i>
                        </div>
                        <p class="cmt__desc">Bình luận đánh giá của khách hàng về trang web Bình luận đánh giá của khách hàng về trang web 
                            Bình luận đánh giá của khách hàng
                            về trang web Bình luận đánh giá của khách hàng về trang web Bình luận đánh giá của khách hàng về trang web</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- sản phẩm lần 5 -->
    </main>