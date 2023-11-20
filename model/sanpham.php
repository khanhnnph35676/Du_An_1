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
?>
