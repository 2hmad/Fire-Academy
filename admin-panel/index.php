<!DOCTYPE html>
<html>
    <head>
        <title>تسجيل الدخول للوحة التحكم | فاير اكاديمي</title>
        <?php include('links.php') ?>
    </head>
<body style="background:#f5f5f5">
<form method="POST" style="background: white;max-width: 95%;width: 550px;text-align:center;margin-left: auto;margin-right: auto;position: relative;top: 160px;border-radius: 10px;box-shadow: 3px 3px 20px 9px #e9e9e9;">
    <div style="background: white;border: 1px solid #f5f5f5;max-width: 120px;height: 120px;border-radius: 150px;margin-left:auto;margin-right:auto;position:relative;bottom:50px;margin-bottom: -70px;">
        <img src="../images/icon.png" style="max-width: 55px;margin-top: 21%;">
    </div>
<br><br><br>
<input type="text" name="username_login" placeholder="ادخل اسم المستخدم" style="display: block;max-width: 90%;width: 500px;height: 40px;border: 1px solid #CCC;border-radius: 5px;outline: none;margin-bottom: 4%;margin-left:auto;margin-right:auto;padding: 10px;text-align: center;">
<input type="password" name="password_login" placeholder="ادخل كلمة المرور" style="display: block;max-width: 90%;width: 500px;height: 40px;border: 1px solid #CCC;border-radius: 5px;outline: none;margin-bottom: 4%;margin-left:auto;margin-right:auto;padding: 10px;text-align: center;">
<input type="submit" name="login_user" id="login-user" value="سجل الدخول">
<small style="color: #959595;display:block;position: absolute;bottom: 0;left: 0;right: 0;">Powered By <a href="https://codux.me" target="_blank" style="color: #959595;text-decoration:none">Codux Company</a></small>
<br><br><Br>
<?php
session_start();
ob_start();
if(isset($_POST['login_user'])){
    $username_login = $_POST['username_login'];
    $password_login = sha1($_POST['password_login']);
    $sql = "SELECT * FROM admins WHERE username='$username_login' AND password = '$password_login'";
    $query = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($query);
    if($num > 0) {
      $row = mysqli_fetch_array($query);
      $_SESSION['name'] = $row['name'];
      echo "<script type='text/javascript'>document.location.href='dashboard.php';</script>";
      ob_end_flush();
    } else {
      echo "
<div class='alert alert-danger' role='alert' style='text-align:center'>
Please fill in all fields with the correct information
</div>";
}
}
?>
</form>
</body>
</html>