<?php
    $list_prds = upload_like_prds();
    $list_prds2= upload_all_prds();
    $name1="Sản phẩm nổi bật";
    $name4 = "Sản phẩm gia đình";
    $name6 ="Đồ trang trí";
    $directories1 = directorie($name1);
    $directories4 = directorie($name4);
    $directories6 = directorie($name6);
?>
<div class="center">
            <div class="box1">
                <div class="turnover radius">
                    <div class="headline">
                        <h5>Doanh thu thống kê</h5>
                        <!-- <ul>
                            <li><a href="">Ngày</a></li>
                            <li><a href="">Tuần</a></li>
                            <li><a href="">Tháng</a></li>
                            <li><a href="">Năm</a></li>
                        </ul> -->
                    </div>
                    <canvas id="myChart" width="200px" height="200px"></canvas>
                </div>
                <!-- Thống kê sản phẩm được mua -->
                <div class="statistic-prd radius">
                  <h5>Sản phẩm nổi bật</h5>
                  <canvas id="myChart3" width="200px" height="200px"></canvas>
                </div>
                <!-- số người dùng, tổng loại hàng, daonh thu 1 ngày -->
                <div class="sattistic radius">
                    <div class="ct-sattistic">
                        <div class="user-order">
                            <div class="users radius">
                                <a href="">Số người dùng</a><br><br>
                                <a href="" class="icon-user"><i class="fa-regular fa-user fa-2xl" style="color: #00bfff;"></i></a><br> <br>
                                <span>90</span>
                            </div>
                            <div class="orders radius">
                              <a href="">Tổng số sản phẩm</a><br><br>
                              <a href="" class="icon-order"><i class="fa-brands fa-product-hunt fa-2xl" style="color: #005eff;"></i></a><br> <br>
                              <span>290</span>
                            </div>
                        </div>
                        <div class="day-revenue radius">
                            <span>Doanh thu 1 ngày</span>
                            <canvas id="myChart2" width="0px" height="80px"></canvas>
                            <br><br><br>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!-- box2 -->
            <div class="box2">
                <div class="box-month-prd radius">
                    <h3>Sản phẩm trong tháng</h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Lượt thích</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Trạng thái</th>
                          </tr> 
                        </thead>
                        <tbody>
                        <?php foreach($list_prds as $prd ):
                                extract($prd);?>
                          <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $ten_sp?></td>
                            <td><img src="../img/prd/<?php echo $hinh_anh?>" width="90" height="60"></td>
                            <td><?php echo number_format($gia_sp,)?>đ</td>
                            <td><?php echo $luot_thich?></td>
                            <td><?php echo $so_luong?></td>
                            <td><?php echo $so_luong > 0?'Còn hàng':'Hết hàng'?></td>
                          </tr>
                        <?php endforeach;?>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="all-statistics">
                <div class="statistic radius">
                    <?php foreach($directories1 as $diretory):
                        extract($diretory); ?>
                     <?php endforeach;?>
                     <h3><?php echo $ten_dmc?></h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Danh mục</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($directories1 as $diretory):
                        extract($diretory); ?>
                          <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $ten_danhmuc ?></td>
                          </tr>
                          <?php endforeach;?>
                        </tbody>
                  </table>
                </div>
                <div class="statistic radius">
                    <?php foreach($directories4 as $diretory):
                        extract($diretory); ?>
                     <?php endforeach;?>
                     <h3><?php echo $ten_dmc?></h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Danh mục</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($directories4 as $diretory):
                        extract($diretory); ?>
                          <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $ten_danhmuc ?></td>
                          </tr>
                          <?php endforeach;?>
                        </tbody>
                  </table>
                </div>

              <!-- <div class="statistic radius">
                    <?php foreach($directories6 as $diretory):
                        extract($diretory); ?>
                     <?php endforeach;?>
                     <h3><?php echo $ten_dmc?></h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Danh mục</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($directories6 as $diretory):
                        extract($diretory); ?>
                          <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $ten_danhmuc ?></td>
                          </tr>
                          <?php endforeach;?>
                        </tbody>
                  </table>
                </div>  -->
               
            </div>
            <!-- box3 -->
            <div class="prominent"> 
            <?php foreach($list_prds2 as $prd):
                    extract($prd); ?>
                <div class="prd-prominet">
                  <div class="img__prd-prominet-wrapper">
                    <img src="../img/prd/<?php echo $hinh_anh?>" class="img__prd-prominet" alt="">
                  </div>
                  <span class="name__prd-prominet"><a href=""><?php echo $ten_sp?></a></span>
                </div>
                <?php endforeach;?>

            </div>
       </div>
    </main>
