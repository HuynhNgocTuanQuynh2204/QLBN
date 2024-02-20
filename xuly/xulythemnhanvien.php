<?php
 include("../config/config.php");
 session_start();
 require("../carbon/autoload.php");

 use Carbon\Carbon;
 $now = Carbon::now('Asia/Ho_Chi_Minh');
 $now->format('Y-m-d H:i:s');
 $tennv = $_POST['tennv'];
 $ngaysinh = $_POST['ngaysinh'];
 $gioitinh = $_POST['gioitinh'];
 $diachi = $_POST['diachi'];
 $sodienthoai = $_POST['sodienthoai'];
 $email = $_POST['email'];
 $taikhoan = $_POST['taikhoan'];
 $matkhau = md5($_POST['matkhau']);
 $quyenhan = $_POST['quyenhan'];
$manv = rand(0,9999);
 $trangthai = $_POST['trangthai'];
$thongtin = $_POST['thongtin'];
 if(isset($_POST['themnv'])){
    $sql_them = "INSERT INTO user (hovaten,ngaysinh,gioitinh,diachi,sodienthoai,taikhoan,matkhau,email,manhanvien,trangthai,thongtin,quyenhan,thoigian) VALUES ('$tennv','$ngaysinh','$gioitinh','$diachi','$sodienthoai','$taikhoan','$matkhau','$email','$manv','$trangthai','$thongtin','$quyenhan','$now')";
    $kq = mysqli_query($mysqli,$sql_them);
    header('location:../index.php?quanly=taikhoan');
 }else if(isset($_POST['suanv'])){
    $id = $_GET['id'];
     $sql_sua = "UPDATE user SET hovaten = '".$tennv."',ngaysinh = '".$ngaysinh."',gioitinh = '".$gioitinh."',diachi = '".$diachi."'
     ,sodienthoai = '".$sodienthoai."',email = '".$email."',taikhoan = '".$taikhoan."',matkhau = '".$matkhau."',trangthai = '".$trangthai."',thongtin = '".$thongtin."',quyenhan = '".$quyenhan."' WHERE id_user = '$id'";
     $kq_sua = mysqli_query($mysqli,$sql_sua);
     header('location:../index.php?quanly=taikhoan');
}else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM user WHERE id_user = '$id'";
    $kq_xoa = mysqli_query($mysqli,$sql_xoa);

    header('location:../index.php?quanly=taikhoan');
 }
 
?>