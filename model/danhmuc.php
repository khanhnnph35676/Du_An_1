<?php
    // in ra danh mục con trong danh mục chính "Sản phẩm nổi bật" có id = 1
    function list_directories(){
        $sql = "SELECT dc.*,d.ten_danhmuc FROM damhmuc_chinh dc
        JOIN danh_muc d ON d.id_dmc = dc.id
        HAVING dc.id = 1";
        $list_directory = pdo_query($sql);
        return $list_directory;
    }
    // In ra danh mục chính 
    function list_directories_main(){
        $sql = "SELECT * FROM damhmuc_chinh";
        $list_directory_main = pdo_query($sql);
        return $list_directory_main;
    }
?>