<?php
// TH1: Khi khách ấn vào đăng nhập
    function upload_user($user_name,$pass){
        $sql = "SELECT * FROM tai_khoan_kh WHERE (email = '$user_name' or sdt = '$user_name') and mat_khau = '$pass'";
        $user = pdo_query_one($sql);
        return $user;
    }
//TH2:Kiểm tra xem khách hàng đã đăng nhập chưa 
//chức năng này xảy ra khi: khách chọn thêm sản phẩm lúc đó hệ thống sẽ check xem khách đã có tài khoản chưa
//nếu có thì hiện ra trang chủ hoặc trang khách đang ở 
//nếu k có thì chuyển khách đến trang đăng nhập 
    function check_user($user_name){
        $sql = "SELECT * FROM tai_khoan_kh WHERE email = '$user_name' or sdt = '$user_name'";
        $user_then_check = pdo_query_one($sql);
        return $user_then_check;
    }

?>