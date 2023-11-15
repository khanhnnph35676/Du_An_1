<?php
    $list_directories_main = list_directories_main();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body>
    <!-- header -->
    <div class="box-header">
        <header class="container">
                <div class="logo">
                    <a href="index.php">
                        <img src="../img/prd/logo.png" alt="">
                    </a>
                </div>   
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Tìm kiếm . . .">
                        <button>
                            <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                        </button>
                            
                    </form>
                </div>
                <div class="store">
                    <a id="str" href="index.php?act=hethong-cuahang" class="text-black">HỆ THỐNG CỬA HÀNG</a>
                </div>
                <div class="cart-account">
                    <a href="index.php?act=taikhoan" id="acount"><span></span>TÀI KHOẢN</a>
                    <a href="index.php?act=giohang">
                        <i class="fa-solid fa-cart-shopping fa-xl" style="color:black;"></i>
                    </a>
                </div>
        </header>
        <div class="bottom-header" >
            <ul class="container">
                <li class="categories" >
                    <a href="">DANH MỤC SẢN PHẨM</a>
                    <ul>
                        <?php foreach($list_directories_main as $diretory_main):
                            extract($diretory_main); ?>
                            <a href=""><li>> <?php echo $ten_dmc?></li></a>
                        <?php endforeach; ?>
                    </ul>
                    
                </li>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="index.php?act=gioithieu">GIỚI THIỆU</a></li>
                <li><a href="index.php?act=sanpham">SẢN PHẨM</a></li>
                <li><a href="index.php?act=tintuc">TIN TỨC</a></li>
                <li><a href="index.php?act=lienhe">LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>
    <?php
     if(empty($_GET['act'])){
       include "banner.php";
    }
    ?>
   