
<?php
    if(isset($_GET['id_gio_hang'])){
        $id = $_GET['id_gio_hang'];
        delete_prd_on_cart($id);
        header('location:index.php?act=giohang');
    }
?>