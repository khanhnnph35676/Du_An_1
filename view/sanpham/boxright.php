<div class="boxright">
    <div class="box1">
        <h5>DANH MỤC SẢN PHẨM</h5> 
        <ul>
            <?php foreach($list_directories_main as $diretory_main):
                extract($diretory_main); ?>
                <li><a href=""><?php echo $ten_dmc?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="box2">
        <h5>BỘ LỌC</h5> 
        <ul>
            <form action="" method="POST">
            <li><a href="">
                <input type="checkbox" class="box-click"> 
                500.000đ - 1.000.000đ</a></li>
            <li><a href="">
                <input type="checkbox" class="box-click"> 
                1.000.000đ - 2.000.000đ</a></li>
            <li><a href="">
                <input type="checkbox" class="box-click"> 
                2.000.000đ - 3.000.000đ</a></li>
            <li><a href="">
                <input type="checkbox" class="box-click"> 
                3.000.000đ - 4.000.000đ</a></li>
            <li><a href="">
                <input type="checkbox" class="box-click"> 
                4.000.000đ - 5.000.000đ</a></li>
            <li><a href="">
                <input type="checkbox" class="box-click"> 
                Trên 5.000.000đ</a></li>
            </form>
        </ul>
        <h6>MÀU SẮC:</h6>
    </div>
</div>