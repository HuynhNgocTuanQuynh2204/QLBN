<div class="container-fluid">
    <div class="row">
        <!--large-middle-sm small-x-small--->
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <?php
        include("sidebar/sidebar.php")
        ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="maincontent">
                <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='thongtinnhanvien'){
                include("main/thongtinnhanvien.php");

            }else if($tam =='thongtinbenhnhan'){
                include("main/thongtinbenhnhan.php");

            }
            else if($tam =='benhnhan'){
                include("main/danhsachbenhnhan.php");
            }

            else if($tam =='dangnhap'){
                include("main/dangnhap.php");
            } 

            else if($tam =='suathongtin'){
                include("main/suathongtin.php");
            } 

            else if($tam =='xemhosobenhan'){
                include("main/xemhosobenhnhan.php");
            } 

            else if($tam =='hosobenhan'){
                include("main/hosobenhan.php");
            } 

            else if($tam =='taikhoan'){
                include("main/danhsachtaikhoan.php");
            } 

            else if($tam =='kiemtra'){
                include("main/kiemtra.php");
            } 

            else if($tam =='kiemtrahoso'){
                include("main/kiemtrahoso.php");
            } 
            
            else if($tam =='suatk'){
                include("main/suataikhoan.php");
            } 
            
            else if($tam =='suahoso'){
                include("main/suahoso.php");
            } 

            else if($tam =='doimk'){
                include("main/doimk.php");
            } 

            else if($tam =='timkiembenhnhan'){
                include("main/timkiembenhnhan.php");
            } 

            else if($tam =='capnhap'){
                include("main/capnhap.php");
            } 

            else {
                include("main/index.php");
            }
          ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>