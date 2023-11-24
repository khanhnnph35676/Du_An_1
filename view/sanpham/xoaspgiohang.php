<?php
    include "../../model/pdo.php";
    include "../../model/sanpham.php";
    echo 'xoá';
    if(isset($_GET['id_gio_hang'])){
        $id = $_GET['id_gio_hang'];
        delete_prd_on_cart($id);
        header('Location: ../index.php?act=giohang');
    }
?>