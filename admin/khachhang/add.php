
<?php
$error = [];
$succes = [];
$add = "Thêm tài khoản";
if(isset($_POST['add'])){
    $ten_kh = $_POST['ten_kh'];
    $email = $_POST['email']; 
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $mat_khau = $_POST['mat_khau']; 

    $file = $_FILES['hinh_anh']; 
    $name_image =$file['name'];
    if(!$file){
        $tmp_name = $_FILES['hinh_anh']['tmp_name'];
        move_uploaded_file($tmp_image,'../img/prd/'.$name_image);  
    }
    //validate
    if(empty($ten_kh)){
        $error['error-name-user'] = 'Chưa nhập tên tài khoản!';
    }
    if(empty($email)){
        $error['error-email'] = 'Chưa nhập email!';
    }
    if(empty($sdt)){
        $error['error-sdt'] = 'Chưa nhập số điện thoại!';
    }
    else{
        if(strlen($sdt) != 10){
            $error['error-sdt'] = 'Nhập sai số điện thoại!';
        }
        if(!preg_match("/^[0-9]*$/",$sdt)){
            $error['error-sdt'] = 'Nhập sai số điện thoại!';
        }
    }
    if(empty($dia_chi)){
        $error['error-content-address'] = 'Chưa nhập nội dung địa chỉ!';
    }
    if(empty($mat_khau)){
        $error['error-content-pass'] = 'Chưa nhập mật khẩu!';
    }
    if(!$error){
        add_user_on_admin($ten_kh,$mat_khau,$name_image,$sdt,$dia_chi,$email);
        $succes['succes_add']= 'Thêm tài khoản thành công';
        header('refresh: 3');
    }
}
?>
<div class="form-function-wrapper">
    <h3>Chức năng: <?=$add ?></h3>
    <form action="" class="form-function" method="POST" enctype="multipart/form-data">
        <div class="input-group">
           <span class="input__name">Tên khách hàng: </span>
            <input type="text" name="ten_kh" class="input__content">
        </div>
        <span><?=isset($error['error-name-user'])?$error['error-name-user']:''?></span>

        <div class="input-group">
            <span class="input__name">Hình ảnh : </span>
             <input type="file" name="hinh_anh" class="img__user" accept="image/*">
         </div>
        
        <div class="input-group">
            <span class="input__name">Email: </span>
             <input type="text" name="email" class="input__content">
         </div>
         <span><?=isset($error['error-email'])?$error['error-email']:''?></span>

         <div class="input-group">
            <span class="input__name">Số điện thoại: </span>
             <input type="text" name="sdt" class="input__content">
         </div>
         <span><?=isset($error['error-sdt'])?$error['error-sdt']:''?></span>

         <div class="input-group">
            <span class="input__name">Mật khẩu: </span>
             <input type="text" name="mat_khau" class="input__content">
         </div>
         <span><?=isset($error['error-content-pass'])?$error['error-content-pass']:''?></span>

         <div class="input-group">
            <span class="input__name">Địa chỉ: </span>
             <input type="text" name="dia_chi" class="input__content">
         </div>
         <span><?=isset($error['error-content-address'])?$error['error-content-address']:''?></span>
        <button class="btn-implement btn-action" name="add"><?=$add ?></button>
    </form>
    <span><?=isset($succes['succes_add'])?$succes['succes_add']:''?></span>
</div>
