<?php
$sql_lietke = "SELECT * FROM user 
ORDER BY id_user DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form class="form-inline" action="index.php?quanly=timkiemnhom" method="POST">
                <div class="input-group w-100">
                    <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên chủ tài khoản"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-4">
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Hồ sơ bệnh nhân</h6>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Mã nhân viên</th>
                    <th>Trạng thái</th>
                    <th>Thông tin</th>
                    <th>Quyền hạn</th>
                    <th>Thời gian</th>
                    <th>Quản lí</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke)) {
          $i++;
        ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['hovaten'] ?></td>
                    <td><?php echo $row['ngaysinh'] ?></td>
                    <td><?php echo $row['gioitinh'] ?></td>
                    <td><?php echo $row['diachi'] ?></td>
                    <td><?php echo $row['sodienthoai'] ?></td>
                    <td><?php echo $row['taikhoan'] ?></td>
                    <td><?php echo $row['matkhau'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['manhanvien'] ?></td>
                    <td><?php if($row['trangthai']==1){
                echo "Hoạt động";
            }else if($row['trangthai']==2){
                echo "Không hoạt động";
            }?></td>
                    <td><?php echo $row['thongtin'] ?></td>
                    <td><?php if($row['quyenhan']==1){
                echo "Giám đốc";
            }else if($row['quyenhan']==2){
                echo "Bác sĩ";
            }else if($row['quyenhan']==3){
                echo "Y tá";
            }else{
                echo "Lễ tân";
            }?></td>
                    <td><?php echo $row['thoigian'] ?></td>
                    <td>
                        <a class="btn btn-warning"
                            href="index.php?quanly=suatk&id=<?php echo  $row['id_user'] ?>">Sửa</a> ||
                        <a class="btn btn-danger"
                            href="xuly/xulythemnhanvien.php?id=<?php echo  $row['id_user'] ?>">Xóa</a>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>