<?php
// sản phẩm trang chủ
    function upload_prds(){
        $sql = "SELECT * FROM san_pham 
                order by id desc limit 0,4";
        pdo_query($sql);
    }       
?>
