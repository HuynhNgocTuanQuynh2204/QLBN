<link rel="stylesheet" href="css/dangnhap.css">
<?php
  include("config/config.php");
  session_start();
  if (isset($_POST['dangnhap'])){
    $email = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql_admin = "SELECT * FROM user WHERE taikhoan = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1 ";
    $result_admin = mysqli_query($mysqli, $sql_admin);
    $count_admin = mysqli_num_rows($result_admin);

    if ( $count_admin > 0){
         $row_dangnhap = mysqli_fetch_array($result_admin);
         $_SESSION['ten'] = $row_dangnhap['hovaten'];
         $_SESSION['id_user'] = $row_dangnhap['id_user'];
         $_SESSION['quyenhan'] = $row_dangnhap['quyenhan'];
    } else {
        echo '<p style="color:red">Mật khẩu hoặc tài khoản sai. Vui lòng đăng nhập lại. </p>';
    }
  }
?>

<script>
    if("<?php echo isset($_SESSION['id_user']); ?>" === "1"){
        alert("Đăng nhập thành công");
        window.location.href = "index.php"; 
    }
</script>
<link rel="stylesheet" href="css/dangnhap.css">
<div class="login-box">
  <h2>Đăng nhập</h2>
  <form autocomplete="off" method="POST" action="">
    <div class="user-box">
      <input type="email" name="username"  autocomplete="off" required>
      <label>Tài khoản</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" autocomplete="off" required>
      <label>Mật khẩu</label>
    </div>
    <button type="submit" name="dangnhap">
      <span></span>
      <span></span>
      <span></span>
      <span></span>Đăng nhập</button>
  </form>
</div>
