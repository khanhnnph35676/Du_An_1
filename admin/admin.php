<?php
session_start();
 include '../model/pdo.php';
 include '../model/khachhang.php';
 include '../model/sanpham.php';
 include '../model/danhmuc.php';
 include '../model/admin.php';

if(empty($_SESSION['name-user-admin']) || $_SESSION['name-user-admin'] ==''){
    include 'taikhoan_admin/dangnhap.php';
}elseif(isset($_GET['adact']) && $_GET['adact'] == 'dangxuat'){
    include 'taikhoan_admin/dangnhap.php';
}
else{
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
           case 'tatcasanpham':
               include 'sanpham/allprd.php';
               break;
           case 'danhmuc':
               $list_directories_main =list_directories_main();
               include 'danhmuc/index.php';
               break;
           case 'khachhang':
               $list_users = uploads_users();
               include 'khachhang/index.php';
               break;  

           case 'thongtinchitiet':
               $list_users = uploads_users();
               include 'khachhang/thongtinchitiet.php';
               break;  
           case 'thongke':
               include 'thongke.php';
               break;
           case 'thanhvien':
               include 'taikhoan_admin/thanhvien.php';
               break;
           default:
               include 'home.php';
           break;
           }
    }else{
       include 'home.php';
    }
    include 'footer.php';
}
?>