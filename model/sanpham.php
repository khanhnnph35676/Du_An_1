<?php
// sản phẩm trang chủ
    function upload_prds(){
        $sql = "SELECT *,gia_sp * (100 - giam_gia)/100 as giagiam FROM san_pham 
                order by id desc limit 0,4";
        $list_prds = pdo_query($sql);
        return $list_prds;
    } 
// Trang sản phẩm
    function upload_prds_6(){
        $sql = "SELECT *,gia_sp * (100 - giam_gia)/100 as giagiam FROM san_pham 
                order by id desc limit 0,6";
        $list_prds = pdo_query($sql);
        return $list_prds;
    }       
// Click vào 1 sản phẩm sẽ ra chi tiết sản phẩm
    function upload_prd($id){
        $sql ="SELECT *,gia_sp * (100 - giam_gia)/100 as giagiam FROM san_pham where id= '$id'";
        $prd = pdo_query_one($sql); 
        return $prd;
    }
// Click vào thêm sản phẩm vào giỏ hàng
    function add_prd($id_sp,$id_kh,$so_luong_them){
        $sql = "INSERT INTO gio_hang VALUES (NULL,'$id_sp','$id_kh','$so_luong_them')";
        pdo_execute($sql);
    }
//selcet sản phẩm trong giỏ hàng
    function upload_prds_on_cart($userName){
        $sql = "SELECT gio_hang.*,san_pham.*,gia_sp * (100 - giam_gia)/100 as giagiam,SUM(so_luong_them) as tongsoluong FROM gio_hang 
        JOIN san_pham ON gio_hang.id_sp = san_pham.id
        JOIN tai_khoan_kh t ON t.id = gio_hang.id_kh
        WHERE t.ten_kh = '$userName'
        GROUP BY id_sp";
                
        $prds_on_cart = pdo_query($sql);
        return $prds_on_cart;
    }
    function sumMoney_upload_prds_on_cart(){
        $sql = "SELECT gio_hang.*,san_pham.*,gia_sp * (100 - giam_gia)/100 as giagiam,SUM(gia_sp * (100 - giam_gia)/100) as tongtien FROM gio_hang 
        JOIN san_pham ON gio_hang.id_sp = san_pham.id";
        $prds_on_cart = pdo_query($sql);
        return $prds_on_cart;
    }
    // xoá sản phẩm trong giỏ hàng
    function delete_prd_on_cart($id){
        $sql = "DELETE FROM gio_hang WHERE id_sp = '$id'";
        pdo_execute($sql);
    }
?>
