<?php

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($mysqli, $_GET['id']);


    $sql_lietke = "SELECT lichsu.*, benhnhan.hovaten, user.id_user FROM lichsu
                   INNER JOIN benhnhan ON lichsu.id_benhnhan = benhnhan.id_benhnhan
                   INNER JOIN user ON lichsu.id_user = user.id_user
                   WHERE lichsu.id_benhnhan = '$id' ORDER BY lichsu.id_ls DESC";
    $query_lietke = mysqli_query($mysqli, $sql_lietke);

    $sql = "SELECT * FROM benhnhan WHERE id_benhnhan = '$id'";
    $qr = mysqli_query($mysqli, $sql);
    $row_bn = mysqli_fetch_array($qr);
}
?>

<div class="container mt-4">
    <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Lịch sử bệnh
        án:<?php echo $row_bn['hovaten'] ?></h6>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Chẩn đoán</th>
                    <th>Số phòng</th>
                    <th>Số giường</th>
                    <th>Trạng thái</th>
                    <th>Thời gian</th>
                    <th>Phương pháp</th>
                    <th>Quản lí</th>
                    <?php
                    if ($_SESSION['quyenhan'] == 3) {
                    ?>
                    <th>Cập nhập</th>
                    <?php
                    }else   if ($_SESSION['quyenhan'] == 4) {
                    ?>
                    <th>In hồ sơ</th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                // Kiểm tra xem query đã được thực thi thành công chưa
                if($query_lietke && mysqli_num_rows($query_lietke) > 0) {
                    while ($row = mysqli_fetch_array($query_lietke)) {
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['chandoan'] ?></td>
                    <td><?php echo $row['sophong'] ?></td>
                    <td><?php echo $row['sogiuong'] ?></td>
                    <td><?php 
                            if($row['trangthai'] == 1) {
                                echo "Nhập viện";
                            } elseif($row['trangthai'] == 2) {
                                echo "Đã mất";
                            } else {
                                echo "Xuất viện";
                            }
                            ?>
                    </td>
                    <td><?php echo $row['thoigian'] ?></td>
                    <td><?php echo $row['phuongphap'] ?></td>
                    <td>
                        <a class="btn btn-warning"
                            href="index.php?quanly=suahoso&id=<?php echo  $row['id_ls'] ?>&idbn=<?php echo $row['id_benhnhan'] ?>">Sửa</a>
                    </td>
                    <?php
                        if ($_SESSION['quyenhan'] == 3) {
                        ?>
                    <td>
                        <a class="btn btn-dark"
                            href="index.php?quanly=capnhap&idbn=<?php echo $row['id_benhnhan'] ?>">Cập nhập</a>
                    </td>
                    <?php
                        }else  if ($_SESSION['quyenhan'] == 4){
                        ?>
                    <td>
                        <form method="POST" action="pages/main/inhoso.php?idbn=<?php echo $row['id_benhnhan'] ?>&idls=<?php echo $row['id_ls'] ?>">
                            <div class="col-md-6 mb-3">
                                <button name="btnExport" class="custom-btn big-square-btn" type="submit">In hồ sơ</button>
                            </div>
                        </form>
                    </td>
                    <?php
                        }
                        ?>
                </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='9' style='text-align:center;color:red;'>Không có lịch sử bệnh án.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>