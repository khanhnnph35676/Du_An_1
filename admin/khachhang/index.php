<?php
  //if($_GET['fct'] != 'thongtinchitiet'){
?>
 <div class="center">
  <section class="function-prds">
  <!-- form sản phẩm -->
<?php //}?>
        <?php
          if(isset($_GET['fct'])){
            $fct = $_GET['fct'];
              switch ($fct) {
                case 'update_kh':
                    include 'update.php';
                  break;
                case 'add_kh':
                  include "add.php";
                break;
                case 'delete_kh':
                  if(isset($_GET['id_kh'])){
                    $id = $_GET['id_kh'];
                    delete_user_on_admin($id);
                    $succes_delete = 'Xoá thành công';
                  }
                break;
                default:
                  include "function.php";
                break;
              }
          }else{
            include "function.php";
          }
        ?>
        <!-- chức năng quản lý khách hàng -->
        <?php
          include "tablefunction.php";
        ?>
      </section>
    </div>
     
