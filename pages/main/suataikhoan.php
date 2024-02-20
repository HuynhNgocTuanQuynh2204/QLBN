<body>
    <?php
  $sql_qt = "SELECT * FROM user  WHERE id_user = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);
?>
    <form method="POST" action="xuly/xulythemnhanvien.php?id=<?php echo $row['id_user'] ?>" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="tennv">Tên Nhân Viên</label>
            <input type="text" class="form-control" id="tennv" name="tennv" value="<?php echo $row['hovaten'] ?>"
                required>
        </div>

        <div class="form-group">
            <label for="ngaysinh">Ngày Sinh</label>
            <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="<?php echo $row['ngaysinh'] ?>"
                required>
        </div>

        <div class="form-group">
            <label for="gioitinh">Giới Tính</label>
            <select class="form-control" id="gioitinh" name="gioitinh" required>
                <option value="1" <?php if ($row['gioitinh'] == '1') echo 'selected'; ?>>Nam</option>
                <option value="2" <?php if ($row['gioitinh'] == '2') echo 'selected'; ?>>Nữ</option>
            </select>
        </div>


        <div class="form-group">
            <label for="diachi">Địa Chỉ</label>
            <input type="text" class="form-control" id="diachi" name="diachi" value="<?php echo $row['diachi'] ?>"
                required>
        </div>

        <div class="form-group">
            <label for="sodienthoai">Số Điện Thoại</label>
            <input type="tel" class="form-control" id="sodienthoai" name="sodienthoai"
                value="<?php echo $row['sodienthoai'] ?>" required>
        </div>

        <div class="form-group">
            <label for="taikhoan">Tài Khoản</label>
            <input type="email" class="form-control" id="taikhoan" name="taikhoan"
                value="<?php echo $row['taikhoan'] ?>" required>
        </div>

        <div class="form-group">
            <label for="matkhau">Mật Khẩu</label>
            <input type="text" class="form-control" id="matkhau" name="matkhau" value="<?php echo $row['matkhau'] ?>"
                required>
        </div>



        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?>"
                required>
        </div>


        <div class="form-group">
            <label for="quyenhan">Quyền hạn</label>
            <select class="form-control" id="quyenhan" name="quyenhan" required>
                <option value="1" <?php if ($row['quyenhan'] == '1') echo 'selected'; ?>>Giám đốc</option>
                <option value="2" <?php if ($row['quyenhan'] == '2') echo 'selected'; ?>>Bác sĩ</option>
                <option value="3" <?php if ($row['quyenhan'] == '3') echo 'selected'; ?>>Y Tá</option>
                <option value="4" <?php if ($row['quyenhan'] == '4') echo 'selected'; ?>>Lễ Tân</option>
            </select>
        </div>
        <div class="form-group">
            <label for="trangthai">Trạng Thái</label>
            <select class="form-control" id="trangthai" name="trangthai" required>
                <option value="1" <?php if ($row['trangthai'] == '1') echo 'selected'; ?>>Hoạt động</option>
                <option value="2" <?php if ($row['trangthai'] == '2') echo 'selected'; ?>>Không hoạt động</option>
            </select>
        </div>

        <div class="form-group">
            <label for="thongtin">Thông Tin</label>
            <textarea name="thongtin" id="noidung" cols="30" rows="10"><?php echo $row['thongtin'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="suanv">Sửa</button>
    </form>
</body>

</html>