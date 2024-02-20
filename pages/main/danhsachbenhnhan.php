<?php
$sql_lietke = "SELECT benhnhan.hovaten AS hovaten_benhnhan, user.hovaten AS hovaten_user, benhnhan.ngaysinh, benhnhan.gioitinh, benhnhan.diachi, benhnhan.sodienthoai, benhnhan.cccd, benhnhan.dantoc, benhnhan.tongiao, benhnhan.nghenghiep, benhnhan.tinhtranghonhan, benhnhan.nguoithan, benhnhan.dienthoainguoithan, benhnhan.bhyt, benhnhan.thongtinbosung, benhnhan.thoigian, user.hovaten AS nguoitao, benhnhan.id_benhnhan 
                FROM benhnhan 
                INNER JOIN user ON benhnhan.id_user = user.id_user 
                ORDER BY benhnhan.id_benhnhan DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-6">
      <form class="form-inline" action="index.php?quanly=timkiembenhnhan" method="POST">
        <div class="input-group w-100">
          <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên bệnh nhân" aria-label="Search">
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
          <th>CCCD/CMND</th>
          <th>Dân tộc </th>
          <th>Tôn giáo</th>
          <th>Nghề nghiệp</th>
          <th>Tình trạng hôn nhân</th>
          <th>Người thân</th>
          <th>SĐT người thân</th>
          <th>BHYT</th>
          <th>Lí do thăm khám</th>
          <th>Thời gian tạo hồ sơ</th>
          <th>Người tạo</th>
          <th>Quản lí</th>
          <th>Lịch sử bệnh án</th>
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
            <td><?php echo $row['hovaten_benhnhan'] ?></td>
            <td><?php echo $row['ngaysinh'] ?></td>
            <td><?php echo $row['gioitinh'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['sodienthoai'] ?></td>
            <td><?php echo $row['cccd'] ?></td>
            <td><?php echo $row['dantoc'] ?></td>
            <td><?php echo $row['tongiao'] ?></td>
            <td><?php echo $row['nghenghiep'] ?></td>
            <td><?php if($row['tinhtranghonhan']==1){
                echo "Độc thân";
            }else if($row['tinhtranghonhan']==2){
                echo "Kết hôn";
            }else {
                echo "Khác";
            }?></td>
            <td><?php echo $row['nguoithan'] ?></td>
            <td><?php echo $row['dienthoainguoithan'] ?></td>
            <td><?php echo $row['bhyt'] ?></td>
            <td><?php echo $row['thongtinbosung'] ?></td>
            <td><?php echo $row['thoigian'] ?></td>
            <td><?php echo $row['nguoitao'] ?></td>
            <td>
              <a class="btn btn-warning" href="index.php?quanly=suathongtin&id=<?php echo  $row['id_benhnhan'] ?>">Sửa</a> ||   <a class="btn btn-info" href="index.php?quanly=hosobenhan&id=<?php echo  $row['id_benhnhan'] ?>">Tạo hồ sơ bệnh án</a>
            </td>
            <td>
              <a class="btn btn-primary" href="index.php?quanly=xemhosobenhan&id=<?php echo  $row['id_benhnhan'] ?>">Xem</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
