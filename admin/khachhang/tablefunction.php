<?php
  if(isset($_GET['fct']) && $_GET['fct']== 'delete_kh'){
    include "function.php";
  }
?>
<div class="function-prds-box-month-prd radius" style="height: 550px;">
            <h3>Bảng khách hàng</h3>
            <h5><a href="admin.php?adact=khachhang&fct=add_kh" class="add_prd btn-action">Thêm tài khoản</a></h5>
              <table class="table table--directory">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Tên tài khoản</th>
                      <th scope="col">Email</th>
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($list_users as $user):
                          extract($user);?>
                    <tr>
                      <th scope="row"><?=$id ?></th>
                      <td><?=$ten_kh ?></td>
                      <td><?=$email ?></td>
                      <td><?=$sdt ?></td>
                      <td><a href="admin.php?adact=khachhang&id_kh=<?= $id ?>&fct=update_kh" class="update_prd btn-action">Sửa</a>
                          <a href="admin.php?adact=khachhang&id_kh=<?= $id ?>&fct=delete_kh"
                            onclick="return confirm('Bạn có muốn xoá tài khoản này không?');" 
                            class="delete_prd btn-action ranger">Xoá</a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              <h5><a href="admin.php?adact=thongtinchitiet" class="add_prd btn-action">Xem chi tiết</a></h5>
              <span><?php echo isset($succes_delete)?$succes_delete:'';?></span>
          </div>
          