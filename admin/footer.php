<footer>
    
</footer>
    <script>
      // Dữ liệu biểu đồ doanh thu tháng
        var data = {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5','Tháng 6'],
        datasets: [{
          label: 'Doanh số bán hàng',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1,
          data: [65, 59, 80, 81, 56,43]
        }]
      };
        // Dữ liệu biểu đồ daonh thu ngày
        var data2 = {
        labels: [' 22/11', ' 22/11', ' 22/11', ' 22/11', ' 22/11',' 22/11'],
        datasets: [{
          label: 'Doanh số bán hàng',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1,
          data: [65, 59, 80, 81, 56,43]
        }]
      };

      // Cấu hình biểu đồ
      var options = {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      };

      // Lấy đối tượng canvas
      var ctx = document.getElementById('myChart').getContext('2d');
      // Tạo biểu đồ
      var myChart = new Chart(ctx, {
        type: 'bar',  // Loại biểu đồ (có thể là bar, line, pie, radar, v.v.)
        data: data,
        options: options
      });


      var ctx = document.getElementById('myChart2').getContext('2d');
      var myChart2 = new Chart(ctx, {
        type: 'line',  // Loại biểu đồ (có thể là bar, line, pie, radar, v.v.)
        data: data2,
        options: options
      });
    </script>
</body>
<script src="../js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>