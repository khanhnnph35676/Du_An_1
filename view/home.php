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
            <div class="products">
                <?php  foreach($list_prds as $prd):
                        extract($prd);?>
                <div class="product">
                    <a href="index.php?act=chitietsp&id_sp=<?php echo $id?>">
                    <img src="../img/prd/<?php echo $hinh_anh ?>" alt="">
                    </a>
                    <a href="index.php?act=chitietsp&id_sp=<?php echo $id?>">
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
        <!-- sản phẩm lần 3 -->
        <div class="show-prd">
            <div class="content-s-prd container">
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
                <button class="btn-show-prd prev" onclick="movePrd(-1)"><i class="fa-solid fa-chevron-up fa-rotate-270 fa-2xl"></i></button>
                <div class="prd-wrapper">
                    <div class="s-product">
                        <a href="index.php?act=chitietssp">
                            <img src="../img/prd/prd1.png" alt="">
                        </a>
                        <div class="content-product">
                            <a href="">
                                <strong><span style="font-size: 20px;" >Nội thất phòng khách ND01</span></strong>
                            </a>
                            <div class="price">
                                <span><strong style="color: rgb(215, 16, 16);" >2.000.000đ</strong></span>
                                <span><del> 5.000.000đ</del></span>
                            </div>
                            <p>Chất Liệu: Vải nhập khẩu (da – bố – nhung) Nệm mousse D40 cao cấp Khung sườn: 100% gỗ dầu đã qua xử lý...</p>
                            <div class="assess">
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                            </div>
                            <div class="heart">
                                <button>
                                    <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prd-wrapper">
                    <div class="s-product">
                        <a href="index.php?act=chitietssp">
                            <img src="../img/prd/prd2.png" alt="">
                        </a>
                        <div class="content-product">
                            <a href="">
                                <strong><span style="font-size: 20px;" >Nội thất phòng khách ND01</span></strong>
                            </a>
                            <div class="price">
                                <span><strong style="color: rgb(215, 16, 16);" >2.000.000đ</strong></span>
                                <span><del> 3.000.000đ</del></span>
                            </div>
                            <p>Chất Liệu: Vải nhập khẩu (da – bố – nhung) Nệm mousse D40 cao cấp Khung sườn: 100% gỗ dầu đã qua xử lý...</p>
                            <div class="assess">
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                            </div>
                            <div class="heart">
                                <button>
                                    <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prd-wrapper">
                    <div class="s-product">
                        <a href="index.php?act=chitietssp">
                            <img src="../img/prd/prd3.png" alt="">
                        </a>
                        <div class="content-product">
                            <a href="">
                                <strong><span style="font-size: 20px;" >Nội thất phòng khách ND01</span></strong>
                            </a>
                            <div class="price">
                                <span><strong style="color: rgb(215, 16, 16);" >2.000.000đ</strong></span>
                                <span><del> 3.000.000đ</del></span>
                            </div>
                            <p>Chất Liệu: Vải nhập khẩu (da – bố – nhung) Nệm mousse D40 cao cấp Khung sườn: 100% gỗ dầu đã qua xử lý...</p>
                            <div class="assess">
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star fa-xl" style="color: #ffc800;"></i>
                            </div>
                            <div class="heart">
                                <button>
                                    <i class="fa-regular fa-heart fa-2xl" style="color: #c32222;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-show-prd next" onclick="movePrd(1)"><i class="fa-solid fa-chevron-up fa-rotate-90 fa-2xl"></i></button>
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

            <!-- Tất cả sản phẩm trong mục lớn -->
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
                        <span style="font-size: 20px;"><del><?php echo number_format($gia_sp,)?>đ</del></span>
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
        <!-- Khách bình luận-->
        <div class="cmt-pr">
            <!-- <img src="./img/prd/nền khách bình g.png" alt=""> -->
            <div class="cmt-users container">
                <div class="content-cmt">
                    <div class="content-cmt">
                        <div class="icon-user">
                            <img src="../img/banner/baner2.png" alt="">
                        </div>
                        <p>Bình luận đánh giá của khách hàng về trang webBình luận đánh giá của khách hàng về trang webBình luận đánh giá của khách hàng về trang webBình luận đánh giá của khách hàng về trang webBình luận đánh giá của khách hàng về trang web</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- sản phẩm lần 5 -->
    </main>