<h4><?=$sp_noi_bat ?></h4>
  <table class="table table--directory">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên danh mục</th>
          <th scope="col">Thao tác</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $list_child_diretories = upload_child_directories($sp_noi_bat);
        foreach($list_child_diretories as $child_diretory):
          extract($child_diretory);
      ?>   
        <tr>
          <th scope="row"><?= $id?></th>
          <td><?= $ten_danhmuc?></td>
          <td><a href="admin.php?adact=danhmuc&id_dm=<?= $id ?>&fct=update_dm" class="update_prd btn-action">Sửa</a>
              <a href="admin.php?adact=danhmuc&id_dm=<?= $id ?>&fct=delete_dm" class="delete_prd btn-action ranger">Xoá</a>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
  </table>
  <h5><a href="admin.php?adact=danhmuc&fct=add_dm" class="add_prd btn-action">Thêm danh mục</a></h5>