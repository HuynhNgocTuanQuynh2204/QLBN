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
 $cccd = $_POST['cccd'];
$dantoc = $_POST['dantoc'];
$tongiao = $_POST['tongiao'];
 $nghenghiep = $_POST['nghenghiep'];
$honnhan = $_POST['honnhan'];
$nguoithan = $_POST['nguoithan'];
$SDTnguoithan = $_POST['sdtnguoithan'];
$bhyt = $_POST['bhyt'];
$thongtin = $_POST['thongtin'];
 $nguoithem =$_SESSION['id_user'];
 if(isset($_POST['thembn'])){
    $sql_them = "INSERT INTO benhnhan (hovaten,ngaysinh,gioitinh,diachi,sodienthoai,cccd,dantoc,tongiao,nghenghiep,tinhtranghonhan,nguoithan,dienthoainguoithan,bhyt,thongtinbosung,thoigian,id_user) VALUES ('$tennv','$ngaysinh','$gioitinh','$diachi','$sodienthoai','$cccd','$dantoc','$tongiao','$nghenghiep','$honnhan','$nguoithan','$SDTnguoithan','$bhyt','$thongtin','$now','$nguoithem')";
    $kq = mysqli_query($mysqli,$sql_them);
    header('location:../index.php?quanly=thongtinbenhnhan');
 }else if(isset($_POST['suabn'])){
    $id = $_GET['id'];
     $sql_sua = "UPDATE benhnhan SET hovaten = '".$tennv."',ngaysinh = '".$ngaysinh."',gioitinh = '".$gioitinh."',diachi = '".$diachi."'
     ,sodienthoai = '".$sodienthoai."',cccd = '".$cccd."',dantoc = '".$dantoc."',tongiao = '".$tongiao."',nghenghiep = '".$nghenghiep."',tinhtranghonhan = '".$honnhan."',nguoithan = '".$nguoithan."',dienthoainguoithan = '".$SDTnguoithan."',bhyt = '".$bhyt."',thongtinbosung = '".$thongtin."',thoigian = '".$now."',id_user = '".$nguoithem."' WHERE id_benhnhan = '$id'";
     $kq_sua = mysqli_query($mysqli,$sql_sua);
     header('location:../index.php?quanly=benhnhan');
 }else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM tbl_nhanvien WHERE id_nhanvien = '$id'";
    $kq_xoa = mysqli_query($mysqli,$sql_xoa);
    while($row = mysqli_fetch_array($kq_xoa)){
        unlink('bangcap/'.$row['bangcao']);
     }
    header('location:../index.php?quanly=danhsachtaikhoan1');
 }
 
?>