<body>
    <?php
  $sql_qt = "SELECT * FROM benhnhan  WHERE id_benhnhan = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);
?>
    <form method="POST" action="xuly/xulythembenhnhan.php?id=<?php echo $row['id_benhnhan'] ?>"
        enctype="multipart/form-data" class="form">
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
            <label for="cccd">CCCD/CMND</label>
            <input type="text" class="form-control" id="cccd" name="cccd" value="<?php echo $row['cccd'] ?>" required>
        </div>
        <div class="form-group">
            <label for="dantoc">Dân Tộc</label>
            <input type="text" class="form-control" id="dantoc" name="dantoc" value="<?php echo $row['dantoc'] ?>"
                required>
        </div>
        <div class="form-group">
            <label for="tongiao">Tôn Giáo</label>
            <input type="text" class="form-control" id="tongiao" name="tongiao" value="<?php echo $row['tongiao'] ?>"
                required>
        </div>

        <div class="form-group">
            <label for="nghenghiep">Nghề Nghiệp</label>
            <input type="text" class="form-control" id="nghenghiep" name="nghenghiep"
                value="<?php echo $row['nghenghiep'] ?>" required>
        </div>

        <div class="form-group">
            <label for="honnhan">Tình Trạng Hôn Nhân</label>
            <select class="form-control" id="honnhan" name="honnhan" required>
                <option value="1" <?php if ($row['tinhtranghonhan'] == '1') echo 'selected'; ?>>Độc Thân</option>
                <option value="2" <?php if ($row['tinhtranghonhan'] == '2') echo 'selected'; ?>>Kết Hôn</option>
                <option value="3" <?php if ($row['tinhtranghonhan'] == '3') echo 'selected'; ?>>Khác</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nguoithan">Người Thân</label>
            <input type="text" class="form-control" id="nguoithan" name="nguoithan"
                value="<?php echo $row['nguoithan'] ?>" required>
        </div>

        <div class="form-group">
            <label for="sdtnguoithan">SĐT Người Thân</label>
            <input type="text" class="form-control" id="sdtnguoithan" name="sdtnguoithan"
                value="<?php echo $row['dienthoainguoithan'] ?>" required>
        </div>

        <div class="form-group">
            <label for="bhyt">Số BHYT</label>
            <input type="text" class="form-control" id="bhyt" name="bhyt" value="<?php echo $row['bhyt'] ?>" required>
        </div>

        <div class="form-group">
            <label for="thongtin">Thông Tin Thăm Khám</label>
            <textarea name="thongtin" id="noidung" cols="30" rows="10"><?php echo $row['thongtinbosung'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="suabn">Sửa Hồ Sơ Bệnh Nhân</button>
    </form>
</body>

</html>