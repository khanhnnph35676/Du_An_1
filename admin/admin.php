<?php
 include '../model/pdo.php';
 include '../model/khachhang.php';
 include '../model/sanpham.php';
 include '../model/danhmuc.php';
 include 'header.php';
 if(isset($_GET['adact']) && $_GET['adact'] != 0){
    $act = $_GET['adact'];
    switch($act){
        case 'sanpham':
            $list_prds =upload_all_prds();
            $error=[];
            $succes=[];
            include 'sanpham/index.php';
            break;
        case 'danhmuc':
            $list_directories_main =list_directories_main();
            include 'danhmuc/index.php';
            break;
        case 'khachhang':
            include 'khachhang/index.php';
            break;  
        case 'thongke':
            include 'thongke.php';
            break;
        case 'thanhvien':
            include 'thanhvien.php';
            break;
        default:
            include 'home.php';
        break;
        }
 }else{
    include 'home.php';
 }
 include 'footer.php'
?>