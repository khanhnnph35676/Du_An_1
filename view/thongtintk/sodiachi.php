  <!-- main -->
  <div class="tong container" style="padding-top:160px">
  <div class="accountorder__boxphai">
        <h2>Trang tài khoản</h2>
        <p>Xin chào, <strong><?=isset($_SESSION['userName'])?$_SESSION['userName']:''?></strong></p>
        <a href="?act=thongtintaikhoan">Thông tin tài khoản</a><br><br>
        <a href="?act=donhang">Đơn hàng của bạn</a><br><br>
        <a href="?act=doimatkhau">Đổi mật khẩu</a><br><br>
        <a href="?act=sodiachi">Số địa chỉ</a><br><br>
        <a href="?act=dangxuat">Đăng xuất</a>
    </div>
    <div class="address__boxtrai">
        <h3>ĐỊA CHỈ CỦA TÔI</h3>
        <button id="showSubpage"><i class="fa-solid fa-plus"></i>Thêm địa chỉ</button>
    </div>
    <div id="overlay" class="overlay"></div>
    <div id="subpage" class="subpage">
        <div class="subpage__header">
        <h2>THÊM ĐỊA CHỈ MỚI</h2><button id="closeSubpage"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <hr>
        <div class="subpage__content">
        <form id="addressForm" onsubmit="validateForm(event)">
            <label for="fullName">Họ Tên:</label>
            <input type="text" id="fullName" name="fullName" required>
      
            <label for="phoneNumber">Số Điện Thoại:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>
      
            <label for="address">Số nhà/Thôn/Tổ:</label>
            <input type="text" id="address" name="address" required>
      
            <div class="location-select">
            <label for="province">Tỉnh/Thành:</label>
            <select id="province" name="province" required>
              <!-- Danh sách tỉnh thành -->
              <option value="hanoi">Hà Nội</option>
              <option value="hochiminh">Hồ Chí Minh</option>
              <!-- Thêm tỉnh thành khác nếu cần -->
            </select>
    
            <label for="district">Quận/Huyện:</label>
            <select id="district" name="district" required>
              <!-- Danh sách quận huyện -->
              <option value="quandongda">Quận Đống Đa</option>
              <option value="quanbinhthanh">Quận Bình Thạnh</option>
              <!-- Thêm quận huyện khác nếu cần -->
            </select>
    
            <label for="ward">Phường/Xã:</label>
            <select id="ward" name="ward" required>
                <!-- Danh sách phường xã -->
                <option value="phuongthanhxuan">Phường Thanh Xuân</option>
                <option value="phuongbinhtrieu">Phường Bình Triệu</option>
                <!-- Thêm phường xã khác nếu cần -->
              </select>
            </div>
      
            <label for="zipCode">Mã Zip:</label>
            <input type="text" id="zipCode" name="zipCode" required>
          </form>
        </div>
        <hr>
        <div class="subpage__footer">
            <button id="closeSubpage" class="subpage__footer--btn1"> <a href="">HỦY</a></button>
            <button class="subpage__footer--btn2">THÊM ĐỊA CHỈ</button>
        </div>
    </div>
</div>
<script>
      // Sử dụng JavaScript để xử lý sự kiện khi nút được nhấn
  document.getElementById('showSubpage').addEventListener('click', function() {
    // Lấy đối tượng div của trang con và nền mờ
    var subpage = document.getElementById('subpage');
    var overlay = document.getElementById('overlay');
    
    // Hiển thị trang con và nền mờ
    subpage.style.display = 'block';
    overlay.style.display = 'block';
  });

  // Sử dụng JavaScript để xử lý sự kiện khi nút "Đóng Trang Con" được nhấn
  document.getElementById('closeSubpage').addEventListener('click', function() {
    // Lấy đối tượng div của trang con và nền mờ
    var subpage = document.getElementById('subpage');
    var overlay = document.getElementById('overlay');
    
    // Ẩn trang con và nền mờ
    subpage.style.display = 'none';
    overlay.style.display = 'none';
  });
</script>