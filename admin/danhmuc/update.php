
<?php 
 $update = 'Sửa sản phẩm';
?>
<div class="form-function-wrapper">
    <h3>Quản lý danh mục</h3>
    <form action="" class="form-function">
      <div class="input-group">
        <span class="input__name">ID danh mục:</span>
        <input type="text" name="id_dm" class="input__content">
      </div>
      <span></span>
      <div class="input-group">
        <span class="input__name">Tên danh mục:</span>
          <input type="text" name="ten_dm" placeholder="Nhập tên sản phẩm" class="input__content">
      </div>
      <span></span>
      <button class="btn-implement btn-action" name=""><?= $update ?></button>
    </form>
</div>