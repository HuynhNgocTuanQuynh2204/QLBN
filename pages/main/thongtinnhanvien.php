
<body>

<form method="POST" action="xuly/xulythemnhanvien.php" enctype="multipart/form-data" class="form">
    <div class="form-group">
        <label for="tennv">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="tennv" name="tennv" required>
    </div>

    <div class="form-group">
        <label for="ngaysinh">Ngày Sinh</label>
        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
    </div>

    <div class="form-group">
        <label for="gioitinh">Giới Tính</label>
        <select class="form-control" id="gioitinh" name="gioitinh" required>
            <option value="1">Nam</option>
            <option value="2">Nữ</option>
        </select>
    </div>

    <div class="form-group">
        <label for="diachi">Địa Chỉ</label>
        <input type="text" class="form-control" id="diachi" name="diachi" required>
    </div>

    <div class="form-group">
        <label for="sodienthoai">Số Điện Thoại</label>
        <input type="tel" class="form-control" id="sodienthoai" name="sodienthoai" required>
    </div>

    <div class="form-group">
        <label for="taikhoan">Tài Khoản</label>
        <input type="email" class="form-control" id="taikhoan" name="taikhoan" required>
    </div>

    <div class="form-group">
        <label for="matkhau">Mật Khẩu</label>
        <input type="text" class="form-control" id="matkhau" name="matkhau" required>
    </div>
    


    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>


    <div class="form-group">
        <label for="quyenhan">Quyền hạn</label>
        <select class="form-control" id="vaitro" name="vaitro" required>
            <option value="1">Giám đốc</option>
            <option value="2">Bác sĩ</option>
            <option value="3">Y Tá</option>
            <option value="4">Lễ Tân</option>
        </select>
    </div>
    <div class="form-group">
        <label for="trangthai">Trạng Thái</label>
        <select class="form-control" id="trangthai" name="trangthai" required>
            <option value="1">Hoạt động</option>
            <option value="2">Không hoạt động</option>
        </select>
    </div>
    <div class="form-group">
        <label for="thongtin">Thông Tin</label>
      <textarea name="thongtin"  id="noidung" cols="30" rows="10"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary" name="themnv">Thêm</button>
</form>
</body>
</html>
