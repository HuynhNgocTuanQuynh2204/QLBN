<style>
nav {
    width: 100%;
}
</style>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['ten']);
        unset($_SESSION['quyenhan']);
        unset($_SESSION['id_user']);
        header('location:dangnhap.php');
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Quản lý bệnh nhân</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
        if(  $_SESSION['quyenhan']=='0'){
        ?>
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?quanly=thongtinnhanvien">Thêm tài khoản nhân viên</a>
            </li>
            <?php
        }else   if(  $_SESSION['quyenhan']=='4'){?>
        <li class="nav-item">
                <a class="nav-link" href="index.php?quanly=kiemtra">Kiểm tra thông tin</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?quanly=thongtinbenhnhan">Điền thông tin bệnh nhân</a>
            </li>
        <?php
        }
        ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?quanly=doimk">Đổi mật khẩu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" style="color: black; font-weight: bold;">Chào:
                    <?php if(isset($_SESSION["id_user"])){ echo $_SESSION["ten"]; } ?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-warning" href="index.php?dangxuat=1">Đăng xuất</a>
            </li>

            <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
        </ul>
    </div>
</nav>