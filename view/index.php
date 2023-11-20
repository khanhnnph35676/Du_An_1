<?php 
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/khachhang.php";
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
                $list_prds = upload_prds_6();
                $list_directories_main = list_directories_main();
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
            case 'sanpham':
                    include "sanpham/index.php";
                break;
            case 'chitietsp':
                    //nếu khách chọn thêm sản phẩm 
                    //mà chưa đăng nhập sẽ sang trang đăng nhập
                    $user = upload_user($email,$pass);
                    if(isset($_GET['add_to_cart'])){
                        if(empty($user['id'])){
                            include '';
                        }
                    }
                    
                    //in thông tin sản phẩm
                    if(isset($_GET['id_sp'])){
                        $id = $_GET['id_sp'];
                        $prd = upload_prd($id);
                    }
                    include "sanpham/chitietsp.php";
                break;
            case 'buy-now':    
                include "trangthanhtoan.php";
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
   