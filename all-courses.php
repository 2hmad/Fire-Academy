<!DOCTYPE html>
<html>
<head>
<title>فاير اكاديمي - طريقك للتعلم المثالي</title>
<?php include('links.php') ?>
</head>
<body>
<?php include('navbar.php') ?>
<style>
.card {
  border-radius: 10px;
}
.card:hover {
  -webkit-transform: translateY(-20px);
  transform: translateY(-20px);
  -webkit-transition: .3s ease-in-out;
  transition: all .3s ease-in-out;
}
</style>
<br>
<h3 style="font-family:cairo;text-align:center;color:#252541;font-weight:bold;margin-bottom: 4%;margin-top: 3%;">تصفح جميع الكورسات</h3>
<br>
<div class="container" style="padding-bottom: 25%;">
<div class="row">
<?php
$sql = "SELECT * FROM courses ORDER BY id DESC";
$query = mysqli_query($connect, $sql);
if (mysqli_num_rows($query) > 0) {
while($row = mysqli_fetch_array($query)){
  $course_title = $row['course_name'];
  $id = $row['id'];
  $instructor = $row['instructor'];
  $pic = $row['pic'];
    echo "
<div class='col-lg-4'>
<a href='course-info.php?id=$id'>
    <div class='card' data-wow-delay='1.5s' style='background-color: white;box-shadow: 0 0 19px 1px #dedede;text-align:right;min-height: 430px;margin-bottom:5%'>
    <img src='data:image/jpeg;base64,".base64_encode($pic)."' alt='غلاف الكورس' class='card-img-top' style='height:315px'>
      <div class='card-body'>
        <p class='card-text' style='font-family: Cairo;font-weight: 700;color:#252541;font-size:18px;width: 95%;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;'>$course_title</p>
        <div style='display: flex;align-items: center;'>
        <img src='images/user.png' style='width: 50px;height: 50px;margin-left: 3%;'>
        <div class='text-muted' style='font-family:cairo;bottom: 15px;right: 15px;font-weight: bold;font-size:15px'>$instructor</div>
        </div>
      </div>
    </div>
</a>
</div>
";
}
} else {
  echo "<img src='images/not-found.png' style='max-width: 350px;margin-right: auto;margin-left: auto;'>";
}
?>
</div>
</div>
<br><br><br><br>
<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>
</html>