<?php
  $list_directories_main =list_directories_main();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../js/bieudo.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- header -->
    <header class="bg-primary">
        <h1 class="bg-primary">Admin</h1>
      <form class="search" action="">
        <input type="text" placeholder="Tìm kiếm . . . ">
        <button class="search__btn"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #005eff;"></i></button>
     </form>
      <div class="element">
          <div class="img-element-wrapper">
              <a href=""><img src="../img/loai_the/the Master card.png" alt="" class="img__element"></a>
              <div class="dot"></div>
          </div>
          <div class="controll-acount-wrapper">
            <ul class="controll-acount">
              <li><a href="" class="acount">Tên tài khoản</a>
                  <ul>
                    <li><a href="">Hồ sơ</a></li>
                    <li><a href="">Cài đặt</a></li>
                    <li><a href="">Đăng xuất</a></li>
                  </ul>
              </li>
            </ul>
          </div>
      </div>
    </header>

    <!-- main -->
    <main> 
       <div class="box-left ">
           <div class="content-box-left">
                <ul>
                    <li><a href="admin.php">Trang chủ</a></li>
                    <hr>
                    <li><a href="admin.php?adact=sanpham">Sản phẩm</a></li>
                    <hr>
                    <li><span></span>
                        <button id="diretory">Danh mục <i class="fa-solid fa-chevron-down fa-xs" style="color: #000000;"></i></button>
                        <ul class="main_dm">
                          <?php foreach($list_directories_main as $diretory):
                            extract($diretory);?>
                            <li><a href="admin.php?adact=danhmuc"><?= $ten_dmc ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <hr>
                    <li><a href="admin.php?adact=khachhang">Khách hàng</a></li>
                    <hr>
                    <li><a href="admin.php?adact=thongke">Thống kê</a></li>
                    <hr>
                    <li><a href="admin.php?adact=thanhvien">Thành viên</a></li>
                </ul>
           </div>
       </div>