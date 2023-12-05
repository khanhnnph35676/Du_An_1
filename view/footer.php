 <!-- footer -->
<?php
  $list_child_diretories = upload_all_chiild_diretories();
?>
 <footer class="container">
        <div class="left-footer">
            <h2>ND NỘI THẤT</h2>
            <p>Với kinh nghiệm hơn 10 năm trong ngành nội thất, ND Nội Thất tự hào là cung cấp những mẫu sản phẩm nội thất tốt nhất Việt Nam.</p>
        </div>
        <div class="content-footer">
            <div class="about-us">
                <h2>VỀ CHÚNG TÔI</h2>
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Sản phẩm</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="abate">
                <h4>THANH TOÁN</h4>
                <a href=""><img src="../img/loai_the/the JCB.png" alt=""></a>
                <a href=""><img src="../img/loai_the/the VISA.png" alt=""></a>
                <a href=""><img src="../img/loai_the/the PayPal.png" alt=""></a>
                <a href=""><img src="../img/loai_the/the bitcoin.png" alt=""></a>
                <a href=""><img src="../img/loai_the/the Master card.png" alt=""></a>
            </div>
        </div>
        <div class="policy">
            <h2>Danh mục sản phẩm</h2>
              <ul>
                <?php foreach($list_child_diretories as $diretory):
                  extract($diretory);?>
                  <li class="diretory__footer"><a href=""><?=$ten_danhmuc?></a></li>
                <?php endforeach;?>
              </ul>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
// ============header=============
function click(button,content){
    button.addEventListener('click', function() {
        if (content.style.display === 'none') {
            content.style.display = 'block';
        }else{
            content.style.display = 'none';
        }
    });
}
let acount = document.querySelector('#acount');
let informationUser = document.querySelector('.information-user')
click(acount,informationUser);
// =========slider================
function createSwiper(containerClass, options) {
    return new Swiper(containerClass, options);
}
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    },
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
});
    //======== san pham==============
    function moveAndPause(wrapper, products, currentIndex, productWidth) {
  if (currentIndex < products.length - 4) {
    currentIndex++;
    wrapper.style.transform = 'translateX(' + (-productWidth * currentIndex) + 'px)';
  } else {
    currentIndex = 0;
    wrapper.style.transform = 'translateX(0)';
  }
  setTimeout(function () {
    moveAndPause(wrapper, products, currentIndex, productWidth);
  }, 3000); // Nghỉ 3 giây trước khi di chuyển tiếp
}

var productWrapper1 = document.querySelector('.product-wrapper--1');
var products1 = document.querySelectorAll('.product--1');
var currentIndex1 = 0;
var productWidth1 = products1[0].offsetWidth + 10; // Độ rộng của mỗi sản phẩm, bao gồm cả khoảng cách

// Gọi hàm di chuyển và tạm dừng ban đầu
setTimeout(function () {
  moveAndPause(productWrapper1, products1, currentIndex1, productWidth1);
}, 3000);

// Xử lý sự kiện khi nhấp vào nút "Previous"
var previousButton1 = document.getElementById('previousButton');
previousButton1.addEventListener('click', function () {
  if (currentIndex1 > 0) {
    currentIndex1--;
    productWrapper1.style.transform = 'translateX(' + (-productWidth1 * currentIndex1) + 'px)';
  } else {
    currentIndex1 = products1.length - 4;
    productWrapper1.style.transform = 'translateX(' + (-productWidth1 * currentIndex1) + 'px)';
  }
});
var nextButton1 = document.getElementById('nextButton');
nextButton1.addEventListener('click', function () {
  if (currentIndex1 < products1.length - 4) {
    currentIndex1++;
    productWrapper1.style.transform = 'translateX(' + (-productWidth1 * currentIndex1) + 'px)';
  } else {
    currentIndex1 = 0;
    productWrapper1.style.transform = 'translateX(0)';
  }
});

var productWrapper2 = document.querySelector('.product-wrapper--2');
var products2 = document.querySelectorAll('.product--2');
var currentIndex2 = 0;
var productWidth2 = products2[0].offsetWidth + 10; // Độ rộng của mỗi sản phẩm, bao gồm cả khoảng cách

// Gọi hàm di chuyển và tạm dừng ban đầu
setTimeout(function () {
  moveAndPause(productWrapper2, products2, currentIndex2, productWidth2);
}, 3000);

// Xử lý sự kiện khi nhấp vào nút "Next"
var nextButton2 = document.getElementById('nextButton2');
nextButton2.addEventListener('click', function () {
  if (currentIndex2 < products2.length - 4) {
    currentIndex2++;
    productWrapper2.style.transform = 'translateX(' + (-productWidth2 * currentIndex2) + 'px)';
  } else {
    currentIndex2 = 0;
    productWrapper2.style.transform = 'translateX(0)';
  }
});

// Xử lý sự kiện khi nhấp vào nút "Previous"
var previousButton2 = document.getElementById('previousButton2');
previousButton2.addEventListener('click', function () {
  if (currentIndex2 > 0) {
    currentIndex2--;
    productWrapper2.style.transform = 'translateX(' + (-productWidth2 * currentIndex2) + 'px)';
  } else {
    currentIndex2 = products2.length - 4;
    productWrapper2.style.transform = 'translateX(' + (-productWidth2 * currentIndex2) + 'px)';
  }
});
</script>
<!-- <script src="../js/main.js"></script> -->
<script src="../js/chitietsanpham.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>