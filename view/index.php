<?php 
    session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/khachhang.php";
    include "../model/momo.php";
    include "header.php";
    if(isset($_GET['act']) && $_GET['act'] == 'dangxuat'){
        unset($_SESSION['userName']);
        $succes_log_out = 'Đăng xuất thành công';
    }
    if(isset($succes_log_out)){
        include 'taikhoan/succes_log_out.php';
    }
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
                // nếu khách đã có tài khoản sẽ k vào đc trang đăng nhập để tiếp tục đăng nhập
                // mà trang sẽ đc update theo thông tin tài khoản của khách
                if(empty($_SESSION['userName'])){
                    include "taikhoan/dangnhap.php";
                }
                break;
            case 'quenmatkhau':
                include 'taikhoan/quenmatkhau.php';
                break;
            case 'giohang':
                    $user_then_check = check_user($_SESSION['userName']);
                    if(isset($_SESSION['userName'])){
                        $prds_on_cart = upload_prds_on_cart($user_then_check['ten_kh']);
                        $sumMoney_upload_prds_on_cart = sumMoney_upload_prds_on_cart();
                        include "giohang/tranggiohang.php";
                    }else{
                        include "taikhoan/dangnhap.php";
                    }
                break;
            case 'sanpham':
                    include "sanpham/index.php";
                break;
            case 'chitietsp':
                    //nếu khách chọn thêm sản phẩm 
                    //mà chưa đăng nhập sẽ sang trang đăng nhập
                    if(isset($_POST['add_to_cart'])){
                        if(empty($_SESSION['userName'])){
                            header('location:index.php?act=taikhoan');
                        }
                    }
                    $user_then_check = check_user($_SESSION['userName']);
                    //in thông tin sản phẩm
                    if(isset($_GET['id_sp'])){
                        $id = $_GET['id_sp'];
                        $prd = upload_prd($id);
                        include "sanpham/chitietsp.php";
                    }
                break;
            // chức năng bên tài khoản khách hàng
            case 'doimatkhau':
                if(isset($_SESSION['userName'])){
                    include 'thongtintk/doimatkhau.php';
                }else{
                    include "taikhoan/dangnhap.php";
                }
                break;
            case 'thongtintaikhoan':
                if(isset($_SESSION['userName'])){
                    $user = check_user($_SESSION['userName']);
                    include 'thongtintk/thongtin.php';
                }else{
                    include "taikhoan/dangnhap.php";
                }
                break;
            case 'donhang':
                if(isset($_SESSION['userName'])){
                    $check_user = check_user($_SESSION['userName']);
                    $orders = upload_order($check_user['id']);
                    include 'thongtintk/donhang.php';
                }else{
                    include "taikhoan/dangnhap.php";
                }
                break;
            case 'sodiachi':
                if(isset($_SESSION['userName'])){
                    include 'thongtintk/sodiachi.php';
                }else{
                    include "taikhoan/dangnhap.php";
                }
                break;
            case 'buy-now':    
                $user_then_check = check_user($_SESSION['userName']);
                if(isset($_SESSION['userName'])){
                    //th1:Thanh toán chung tất cả sản phẩm
                    if($_GET['buy'] == 'buyall' && isset($_GET['buy'])){
                        $prds_on_cart = upload_prds_on_cart($user_then_check['ten_kh']);
                        $sum_abate = sum_abate();
                    }
                    include "trangthanhtoan.php";
                }else{
                    include "taikhoan/dangnhap.php";
                }
                break;
            case 'thanhtoanatmmomo':
                $prds_on_cart = upload_prds_on_cart($user_then_check['ten_kh']);
                $sum_abate = sum_abate();
                include 'momo/thanhtoan_atm.php';
                break;
            // case 'giohang':    
            //     include "tranggiohang.php";
            //     break;
            // case 'dangxuat':
            //     include "taikhoan/dangnhap.php";
            //     break; 
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    
    include "footer.php";
?>
   