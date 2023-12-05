
<!-- chức năng quản lý khách hàng -->
<div class="container-fluid" style="background:rgb(240, 237, 237);padding-left:205px; padding-top:70px;">
    <div class="function-prds-box-month-prd radius" style="width:100%;">
        <h3>Bảng thông tin khách hàng</h3>
        <h5><a href="admin.php?adact=khachhang" class="add_prd btn-action">Trang chức năng</a></h5>
          <table class="table table--directory" style="width:100%;">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tên tài khoản</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Email</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Địa chỉ</th>                
                </tr>
              </thead>
              <tbody>
                <?php foreach($list_users as $user):
                      extract($user);?>
                <tr>
                  <th scope="row"><?=$id ?></th>
                  <td><?=$ten_kh ?></td>
                  <td><img src="" width="100" height="100" alt=""><?=$hinh_anh ?></td>
                  <td><?=$email ?></td>
                  <td><?=$sdt ?></td>
                  <td><?=$dia_chi ?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
          </table>
        <h5><a href="admin.php?adact=thongtinchitiet" class="add_prd btn-action">Xem chi tiết</a></h5>
    </div>
</div>
