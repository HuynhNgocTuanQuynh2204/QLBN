
<body>

<form method="POST" action="xuly/xulythembenhnhan.php" enctype="multipart/form-data" class="form">
    <div class="form-group">
        <label for="tennv">Tên Bệnh Nhân</label>
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
        <label for="cccd">CCCD/CMND</label>
        <input type="text" class="form-control" id="cccd" name="cccd" required>
    </div>
    <div class="form-group">
        <label for="dantoc">Dân Tộc</label>
        <input type="text" class="form-control" id="dantoc" name="dantoc" required>
    </div>
    <div class="form-group">
        <label for="tongiao">Tôn Giáo</label>
        <input type="text" class="form-control" id="tongiao" name="tongiao" required>
    </div>

    <div class="form-group">
        <label for="nghenghiep">Nghề Nghiệp</label>
        <input type="text" class="form-control" id="nghenghiep" name="nghenghiep" required>
    </div>

    <div class="form-group">
        <label for="honnhan">Tình Trạng Hôn Nhân</label>
        <select class="form-control" id="honnhan" name="honnhan" required>
            <option value="1">Độc Thân</option>
            <option value="2">Kết Hôn</option>
            <option value="3">Khác</option>
        </select>
    </div>

    <div class="form-group">
        <label for="nguoithan">Người Thân</label>
        <input type="text" class="form-control" id="nguoithan" name="nguoithan" required>
    </div>

    <div class="form-group">
        <label for="sdtnguoithan">SĐT Người Thân</label>
        <input type="text" class="form-control" id="sdtnguoithan" name="sdtnguoithan" required>
    </div>

    <div class="form-group">
        <label for="bhyt">Số BHYT</label>
        <input type="text" class="form-control" id="bhyt" name="bhyt" required>
    </div>

    <div class="form-group">
        <label for="thongtin">Thông Tin Thăm Khám</label>
      <textarea name="thongtin"  id="noidung" cols="30" rows="10"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary" name="thembn">Tạo Hồ Sơ Bệnh Nhân</button>
</form>
</body>
</html>
