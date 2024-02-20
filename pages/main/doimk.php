<?php

if (isset($_POST['doimatkhau'])){
    $matkhau_cu = md5($_POST['password_cu']);
    $matkhau_moi = md5($_POST['password_moi']);
    
    if(isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];
        $sql_admin = "SELECT * FROM user WHERE id_user = '".$id_user."' AND matkhau ='".$matkhau_cu."' LIMIT 1";
        $result_admin = mysqli_query($mysqli, $sql_admin);
        $count_admin = mysqli_num_rows($result_admin);

        if ($count_admin > 0) {
            $sql_update_admin = "UPDATE user SET matkhau ='".$matkhau_moi."' WHERE id_user = '".$id_user."'";
            $update_admin = mysqli_query($mysqli, $sql_update_admin);
            echo '<p style="color:green;text-align:center;">Mật khẩu đã được thay đổi </p>';
        } else {
            echo '<p style="color:red;text-align:center;">Mật khẩu cũ không đúng, vui lòng nhập lại</p>';
        }
    }
}
?>

<form action="" method="POST">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Đổi mật khẩu</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="password">Mật khẩu cũ</label>
                            <input type="password" class="form-control" name="password_cu" id="password" placeholder="Mật khẩu cũ...">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu mới</label>
                            <input type="password" class="form-control" name="password_moi" id="password" placeholder="Mật khẩu mới...">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="doimatkhau" value="Đổi mật khẩu">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>