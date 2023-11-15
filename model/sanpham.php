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
?>
