<?php
    function upload_user($email,$pass){
        $sql = "SELECT * FROM tai_khoan_kh WHERE email = '$email' and mat_khau = '$pass";
        $user = pdo_query_one($sql);
        return $user;
    }

?>