<?php 
  $sp_noi_bat = 'Sản phẩm nổi bật';
?>
<div class="center">
  <section class="function-prds gid-tpl-columns[.1.5]">
    <!-- form sản phẩm -->
    <?php 
      if(isset($_GET['fct'])){
        $fct = $_GET['fct'];
         switch ($fct) {
          case 'update_dm':
            if(isset($_GET['id_dm'])){
              $id_dm = $_GET['id_dm'];
              include 'update.php';
            }
            break;
          case 'update_dm':
            if(isset($_GET['id_dm'])){
              $id_dm = $_GET['id_dm'];
              include 'delete.php';
            }
            break;
          default:
          include 'function.php' ;
            break;
         }
      }else{
        include 'function.php';
      }
    
    ?>
    <!-- chức năng sản phẩm -->
    <div class="function-prds-box-month-prd radius" style="height:auto; flex:.5;">
        <?php include 'spnoibat.php' ?>
    </div>
  </section>
</div>