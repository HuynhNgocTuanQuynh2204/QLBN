<body>
<body>
    <?php
  $sql_qt = "SELECT * FROM lichsu  WHERE id_ls = '$_GET[id]' ";
  $qr = mysqli_query($mysqli,$sql_qt);
  $row = mysqli_fetch_array($qr);

  $sql = "SELECT * FROM benhnhan WHERE id_benhnhan = '$_GET[idbn]' ";
    $qr_bn = mysqli_query($mysqli,$sql);
    $row_bn = mysqli_fetch_array($qr_bn);
?>
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Bệnh
        nhân:<?php echo $row_bn['hovaten'] ?></h6>
    <form method="POST" action="xuly/xulyhosobenhan.php?id=<?php echo $row['id_ls'] ?>&idbn=<?php echo $row['id_benhnhan'] ?>"
        enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="chandoan">Chẩn Đoán</label>
            <textarea name="chandoan" id="tomtat" cols="30" rows="10"><?php echo $row['chandoan'] ?></textarea>
        </div>

        <div class="form-group">
            <label for="sophong">Số Phòng</label>
            <input type="text" class="form-control" id="sophong" name="sophong" value="<?php echo $row['sophong'] ?>" required>
        </div>

        <div class="form-group">
            <label for="sogiuong">Số Giường</label>
            <input type="text" class="form-control" id="sogiuong" name="sogiuong"  value="<?php echo $row['sogiuong'] ?>"  required>
        </div>

        <div class="form-group">
            <label for="bacsi">Bác Sĩ</label>
            <input type="text" class="form-control" id="bacsi" name="bacsi" value="<?php echo $row['bacsi'] ?>"  required>
        </div>


        <div class="form-group">
    <label for="tinhtrang">Tình trạng</label>
    <select class="form-control" id="tinhtrang" name="tinhtrang" required>
        <option value="1"<?php if ($row['trangthai'] == '1') echo ' selected'; ?>>Nhập viện</option>
        <option value="2"<?php if ($row['trangthai'] == '2') echo ' selected'; ?>>Đã mất</option>
        <option value="3"<?php if ($row['trangthai'] == '3') echo ' selected'; ?>>Xuất viện</option>
    </select>
</div>


        <div class="form-group">
            <label for="phuongphap">Phương pháp</label>
            <textarea name="phuongphap" id="noidung" cols="30" rows="10"><?php echo $row['phuongphap'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="suahoso">Sửa Hồ Sơ Bệnh Nhân</button>
    </form>
</body>

</html>