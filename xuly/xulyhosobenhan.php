<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 $chandoan = $_POST['chandoan'];
 $sophong = $_POST['sophong'];
 $sogiuong = $_POST['sogiuong'];
 $trangthai = $_POST['tinhtrang'];
 $phuongphap = $_POST['phuongphap'];
 $bacsi = $_POST['bacsi'];
 $benhnhan = $_GET['id'];
 $nguoithem =$_SESSION['id_user'];
 if(isset($_POST['hoso'])){
    $sql_them = "INSERT INTO lichsu (id_benhnhan,bacsi,id_user,chandoan,sophong,sogiuong,trangthai,thoigian,phuongphap) VALUES ('$benhnhan','$bacsi','$nguoithem','$chandoan','$sophong','$sogiuong','$trangthai','$now','$phuongphap')";
    $kq = mysqli_query($mysqli,$sql_them);
    header("Location: ../index.php?quanly=xemhosobenhan&id=$benhnhan");
 }else if(isset($_POST['suahoso'])){
    $id = $_GET['id'];
    $id_bn = $_GET['idbn'];
     $sql_sua = "UPDATE lichsu SET chandoan = '".$chandoan."',sophong = '".$sophong."',sogiuong = '".$sogiuong."',trangthai = '".$trangthai."',thoigian = '".$now."',phuongphap = '".$phuongphap."' WHERE id_ls = '$id'";
     $kq_sua = mysqli_query($mysqli,$sql_sua);
     header("Location: ../index.php?quanly=xemhosobenhan&id=$id_bn");
 }else if(isset($_POST['capnhap'])) {
      // Lấy dữ liệu từ form POST
      $chandoan = $_POST['chandoan'];
      $sophong = $_POST['sophong'];
      $sogiuong = $_POST['sogiuong'];
      $trangthai = $_POST['tinhtrang'];
      $phuongphap = $_POST['phuongphap'];
      $bacsi = $_POST['bacsi'];
      $benhnhan = $_GET['id'];
      $nguoithem =$_SESSION['id_user'];
      
      // Thực hiện truy vấn để cập nhật dữ liệu vào bảng lịch sử
      $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
      $sql_capnhap = "INSERT INTO lichsu (id_benhnhan, bacsi, id_user, chandoan, sophong, sogiuong, trangthai, thoigian, phuongphap) 
                      VALUES ('$benhnhan', '$bacsi', '$nguoithem', '$chandoan', '$sophong', '$sogiuong', '$trangthai', '$now', '$phuongphap')";
      $kq_capnhap = mysqli_query($mysqli, $sql_capnhap);
      header("Location: ../index.php?quanly=xemhosobenhan&id=$benhnhan");
}
 else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM tbl_nhanvien WHERE id_nhanvien = '$id'";
    $kq_xoa = mysqli_query($mysqli,$sql_xoa);
    while($row = mysqli_fetch_array($kq_xoa)){
        unlink('bangcap/'.$row['bangcao']);
     }
    header('location:../index.php?quanly=danhsachtaikhoan1');
 }
 
?>