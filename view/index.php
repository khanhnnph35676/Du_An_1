<?php 
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'] ;
    }
    if(isset($act)){
        switch($act){
            case 'hethong-cuahang':
                include "hethongcuahang.php";
                break;
            case 'gioithieu':
                include "tranggioithieu.php";
            break;
            case 'sanpham':
                include "sanpham/index.php";
                break;
            case 'tintuc':
                include "tintuc/tintuc.php";
                break;
            case 'lienhe':
                include "lienhe.php";
                break;
            case 'taikhoan':
                include "taikhoan/dangnhap.php";
                break;
            case 'giohang':
                include "tranggiohang.php";
                break;
            case '':

                break;
            case '':

                break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
   