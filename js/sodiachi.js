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