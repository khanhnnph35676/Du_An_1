 <!-- Trang chủ thanh toán -->
 <div class="tong container">
        <div class="bentrai">
            <div class="boxtrai">
                <a href="#">Thông tin nhận hàng</a>
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Địa chỉ:</label>
                            <input type="text" id="address" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="tel" id="phone" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="province" class="form-label">Tỉnh thành:</label>
                            <select id="province" class="form-input" required>
                                <option value="">Chọn tỉnh thành</option>
                                <option value="Hanoi">Hà Nội</option>
                                <option value="HCMC">TP.HCM</option>
                                <option value="Danang">Đà Nẵng</option>
                                <!-- Thêm các tùy chọn tỉnh thành khác vào đây -->
                            </select>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
        <div class="ogiua">
            <div class="boxgiua">   
                <div class="form-container">
                    <form>
                        <div class="form-group">
                            <label for="email" class="form-label">Vui lòng nhập thông tin giao hàng</label>
                            <input type="email" id="email" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="form-label">Thanh toán :</label>
                           <div class="thanhtoan"> 
                            <input type="radio" id="phone" required>
                            Thanh toán khi nhận hàng COD
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="order-container">
            <div class="order-item">
                <img src="images/anh0.jpg" alt="Product 1" class="product-image">
                <div class="product-info">
                    <div class="product-name">Sản phẩm 1</div>
                    <div class="product-price">200.000đ</div>
                </div>
            </div>
            <div class="order-item">
                <img src="images/anh1.jpg" alt="Product 2" class="product-image">
                <div class="product-info">
                    <div class="product-name">Sản phẩm 2</div>
                    <div class="product-price">300.000đ</div>
                </div>
            </div>
            <div class="order-summary">
                <div class="order-shipping">Phí vận chuyển: 50.000đ</div>
                <div class="order-total">Tổng tiền: 550.000đ</div>
                <input type="text" class="discount-input" placeholder="Nhập mã giảm giá">
            </div>
            <button class="checkout-button">Thanh toán</button>
        </div>
    </div>