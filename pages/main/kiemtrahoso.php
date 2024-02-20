<?php


if(isset($_POST['kiemtra'])){
    $tennv = $_POST['tennv'];
    $cccd = $_POST['cccd'];

  
    $sql_kiemtra = "SELECT * FROM benhnhan WHERE hovaten = '$tennv' OR cccd = '$cccd'";
    $query_kiemtra = mysqli_query($mysqli, $sql_kiemtra);


    $count = mysqli_num_rows($query_kiemtra);

   
    if($count > 0){
        echo "Thông tin bệnh nhân đã tồn tại.Vui lòng tìm kiếm trong danh sách bệnh nhân và tạo lịch sử bệnh án mới";
    } else {
        echo "Chưa có thông tin bệnh nhân.Vui lòng điền thông tin bệnh nhân để tạo hồ sơ";
    }
}
?>
