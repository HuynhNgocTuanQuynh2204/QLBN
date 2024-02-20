<style>
.sidebardanhmuc {
    background-color: #f4f4f4;
    padding: 15px;
    border-radius: 5px;
}
</style>
<div class="sidebardanhmuc">
<?php 
 if($_SESSION['quyenhan']=='0'){
?>
 <h4>Quản lí thông tin</h4>
    <ul class="list_sidebar">
        <li style="text-transform: uppercase;"><a href="index.php?quanly=taikhoan" style="color: darkblue;">Danh sách
                tài khoản</a></li>
    </ul>
<?php
 }else{?>
  <h4>Quản lí bệnh nhân</h4>
    <ul class="list_sidebar">
        <li style="text-transform: uppercase;"><a href="index.php?quanly=benhnhan" style="color: darkblue;">Danh sách
                bệnh nhân</a></li>
    </ul>
 <?php
 }
 ?>

   

   
</div>