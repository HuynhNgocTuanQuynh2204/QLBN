<body>
    <?php
      $sql = "SELECT * FROM benhnhan  WHERE id_benhnhan = '$_GET[idbn]' ";
        $qr = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($qr);

        $sql_user = "SELECT * FROM user";
        $qr_user = mysqli_query($mysqli,$sql_user);
    ?>
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Bệnh
        nhân:<?php echo $row['hovaten'] ?></h6>
    <form method="POST" action="xuly/xulyhosobenhan.php?id=<?php echo $row['id_benhnhan'] ?>"
        enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="chandoan">Chẩn Đoán</label>
            <textarea name="chandoan" id="tomtat" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="sophong">Số Phòng</label>
            <input type="text" class="form-control" id="sophong" name="sophong" required>
        </div>

        <div class="form-group">
            <label for="sogiuong">Số Giường</label>
            <input type="text" class="form-control" id="sogiuong" name="sogiuong" required>
        </div>

        <div class="form-group">
            <label for="bacsi">Bác Sĩ</label>
            <input type="text" class="form-control" id="bacsi" name="bacsi" required>
        </div>


        <div class="form-group">
            <label for="tinhtrang">Tình trạng</label>
            <select class="form-control" id="tinhtrang" name="tinhtrang" required>
                <option value="1">Nhập viện</option>
                <option value="2">Đã mất</option>
                <option value="3">Xuất viện</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phuongphap">Phương pháp</label>
            <textarea name="phuongphap" id="noidung" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="capnhap">Cập nhập Sơ Bệnh Nhân</button>
    </form>
</body>

</html>