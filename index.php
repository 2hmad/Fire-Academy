<!DOCTYPE html>
<html>
<head>
<title>فاير اكاديمي - طريقك للتعلم المثالي</title>
<?php include('links.php') ?>
</head>
<body>
<style>
.card {
  border-radius: 10px;
}
.courses:hover {
  -webkit-transform: translateY(-20px);
  transform: translateY(-20px);
  -webkit-transition: .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.instructor:hover {
  -webkit-transform: translateY(-20px);
  transform: translateY(-20px);
  -webkit-transition: .3s ease-in-out;
  transition: all .3s ease-in-out;
}
@media (max-width: 1024px) {
 .instructor {
   margin-right:auto;
   margin-left: auto;
 }
}
@media (max-width: 576px) {
  .instructor {
   margin-right:auto;
   margin-left: auto;
 }
}
@media (max-width: 768px) {
  .instructor {
   margin-right:auto;
   margin-left: auto;
 }
}
@media (max-width: 991px) {
  .instructor {
   margin-right:auto;
   margin-left: auto;
 }
}
</style>
<button onclick="topFunction()" id="backTop" title="Go to top"><i class="fas fa-hand-point-up" style="font-size: 30px;"></i></button>
<nav class="navbar navbar-expand-lg navbar-fixed-top" style="position: fixed;width: 100%;top: 0;right: 0;z-index:1">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/icon.png" alt="" style="width: 45px;height: 45px;padding: 8px;border-radius: 50px;background: white;">
      <span style="font-family:'Cairo', Sans-serif;font-weight: bold;color:#252541;">فاير اكاديمي</span>
    </a>
    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#latest-courses" style="color:#252541;font-family: Cairo;font-weight: bold;">الاقسام المتاحة</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#common-courses" style="color:#252541;font-family: Cairo;font-weight: bold;">الدورات الاكثر طلباً</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#instructors" style="color:#252541;font-family: Cairo;font-weight: bold;">المحاضرين</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container container-home">
<div class="header-home" style="margin-top: 5%;">
<button onclick="topFunction()" id="backTop" title="Go to top"><i class="fas fa-hand-point-up" style="font-size: 30px;"></i></button>
    <h3 class="text1" style="font-family: Cairo;font-weight:900;font-size:55px;padding-top: 150px;color:#252541;line-height: 2em;">من اجل تعليم افضل</h3>
    <span class="text2" style="font-family: Cairo;font-weight:800;font-size:22px;color:#252541;">ابدأ دلوقتي اتعلم في فاير اكاديمي في المجال المناسب</span>
    <br><br>
    <a href="all-courses.php"><button id="show-all-courses" style="background-color: #052b86;margin-left:0;margin-right:0;border:1px solid #052b86;color:white;height: 55px;">تصفح جميع الكورسات</button></a>
</div>
</div>
<br>
<div id="latest-courses" style="padding:10px;">
<div class="container">
  <div class="row">
<div class="col-lg">
  <h3 style="font-family: Cairo;padding-bottom: 2%;padding-top: 2%;color:#252541">الاقسام المتاحة</h3>
</div>
<div class="col-lg" style="text-align: left;display:flex">
<div class="next" style="display: inline;margin-right: 55%;">
      <i class="fas fa-long-arrow-alt-right" style="font-size:45px;margin-left: 50px;"></i>
</div>
<div class="prev" style="display: inline;">
      <i class="fas fa-long-arrow-alt-left" style="font-size:45px;"></i>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="latest-courses-slider" style="direction: ltr;">

  <a href="#">
    <div class="card" style="direction:rtl;background: rgb(255 128 83 / 34%);text-align:right;min-height: 420px;padding: 21px;border-radius: 15px;">
      <div style="background: #ff906a;max-width: 70px;padding: 10px;margin-right: 5%;margin-top: 5%;border-radius: 7px;">
      <img src="images/programming.png" alt="كورسات فاير اكاديمي" style="max-width:45px">
      </div>
      <Br><br>
      <div class="card-body">
        <p class="card-text" style="font-family: Cairo;font-weight: bold;color: #fd561c;font-size: 21px;">البرمجة</p>
        <p class="card-text" style="color:#5b6477;font-weight:bold;font-size:1.1rem">كورسات تعليم تصميم وتطوير المواقع الالكتروني ، وتطوير تطبيقات الهاتف المحمول وإلخ</p>
      </div>
    </div>
  </a>

  <a href="#">
    <div class="card" style="direction:rtl;background:rgb(255 60 104 / 34%);text-align:right;min-height: 420px;padding: 21px;border-radius: 15px;">
      <div style="background: rgb(255, 60, 104);max-width: 70px;padding: 10px;margin-right: 5%;margin-top: 5%;border-radius: 7px;">
      <img src="images/design.png" alt="كورسات فاير اكاديمي" style="max-width:45px">
      </div>
      <Br><br>
      <div class="card-body">
        <p class="card-text" style="font-family: Cairo;font-weight: bold;color: rgb(255, 60, 104);font-size: 21px;">التصميم</p>
        <p class="card-text" style="color:#5b6477;font-weight:bold;font-size:1.1rem">كورسات تعليم التصميم والتحريك والتنفيذ وتعديل الفيديوهات وغيرها</p>
      </div>
    </div>
  </a>

  <a href="#">
    <div class="card" style="direction:rtl;background:rgb(0 184 99 / 34%);text-align:right;min-height: 420px;padding: 21px;border-radius: 15px;">
      <div style="background: rgb(0, 184, 99);max-width: 70px;padding: 10px;margin-right: 5%;margin-top: 5%;border-radius: 7px;">
      <img src="images/commercial.png" alt="كورسات فاير اكاديمي" style="max-width:45px">
      </div>
      <Br><br>
      <div class="card-body">
        <p class="card-text" style="font-family: Cairo;font-weight: bold;color: rgb(0, 184, 99);font-size: 21px;">التسويق</p>
        <p class="card-text" style="color:#5b6477;font-weight:bold;font-size:1.1rem">كورسات تعلم التسويق والتسويق الالكتروني</p>
      </div>
    </div>
  </a>

  <a href="#">
    <div class="card" style="direction:rtl;background:rgb(167 113 233 / 34%);text-align:right;min-height: 420px;padding: 21px;border-radius: 15px;">
      <div style="background: rgb(167, 113, 233);max-width: 70px;padding: 10px;margin-right: 5%;margin-top: 5%;border-radius: 7px;">
      <img src="images/business.png" alt="كورسات فاير اكاديمي" style="max-width:45px">
      </div>
      <Br><br>
      <div class="card-body">
        <p class="card-text" style="font-family: Cairo;font-weight: bold;color: rgb(167, 113, 233);font-size: 21px;">الاعمال</p>
        <p class="card-text" style="color:#5b6477;font-weight:bold;font-size:1.1rem">كورسات الاعمال والتاهيل لسوق العمل  مثل المبيعات والموارد البشرية وادارة المشروعات وغيرها</p>
      </div>
    </div>
  </a>

</div>
</div>
</div>
<br><br>
<div id="common-courses" style="padding:10px;">
<div class="container">
<h3 style="font-family: Cairo;padding-bottom: 2%;padding-top: 2%;">اشهر الدورات</h3>
<div class="row">
<?php
$sql = "SELECT * FROM courses ORDER BY id DESC LIMIT 4";
$query = mysqli_query($connect, $sql);
if (mysqli_num_rows($query) > 0) {
while($row = mysqli_fetch_array($query)){
  $course_title = $row['course_name'];
  $id = $row['id'];
  $instructor = $row['instructor'];
  $pic = $row['pic'];
    echo "
    <div class='col-lg-3'>
    <a href='course-info.php?id=$id'>
        <div class='card courses' data-wow-delay='1.5s' style='background-color: white;box-shadow: 0 0 19px 1px #dedede;text-align:right;min-height: 430px;margin-bottom:5%'>
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
  echo "<span style='text-align: center;font-family: Cairo;color: #232e4e;font-weight: bold;'>لا توجد كورسات متاحة في الوقت الحالي</span>";
}
?>
</div>
</div>
<br><br>
<a href="all-courses.php"><button id="show-all-courses">تصفح جميع الكورسات</button></a>
</div>
<br><br>
<div id="instructors" style="padding:10px;padding-bottom:3%">

<div class="container">
<h3 style="font-family: Cairo;padding-bottom: 2%;padding-top: 2%;">الخبراء والمُعلمين</h3>
<div class="row">
<?php
$sql = "SELECT * FROM instructors ORDER BY id DESC LIMIT 5";
$query = mysqli_query($connect, $sql);
if (mysqli_num_rows($query) > 0) {
while ($row = mysqli_fetch_array($query)) {
    $id = $row['id'];
    $name = $row['name'];
    $role = $row['role'];
    $description = $row['description'];
    $inst_pic = $row['inst_pic'];
echo "
<div class='col-lg-3'>
<a href='profile.php?id=$id'>
    <div class='card instructor' style='overflow:hidden;background: white;box-shadow: 0 0 19px 1px #dedede;text-align:right;max-width:240px;min-height: 365px;margin-bottom:5%'>
      <img src='data:image/jpeg;base64,".base64_encode($inst_pic)."' class='card-img-top' alt='محاضرين فاير اكاديمي' style='height: 245px;'>
      <div class='card-body'>
        <p class='card-text' style='font-family: Cairo;font-weight: 700;color:#252541;font-size:18px'>$name</p>
        <div style='display: flex;align-items: center;'>
        <div class='text-muted' style='font-family:cairo;bottom: 15px;right: 15px;font-weight: bold;font-size: 15px;width: 95%;height: 50px;text-overflow: ellipsis;white-space: normal;overflow: hidden;color:none'>$description</div>
        </div>
      </div>
    </div>
</a>
</div>
";
}
} else {
  echo "<span style='text-align: center;font-family: Cairo;color: #232e4e;font-weight: bold;'>لا يوجد مُحاضرين متاحين في الوقت الحالي</span>";
}
?>
</div>
</div>
<br><br>
<a href="instructors.php"><button id="show-all-courses">تصفح جميع المُحاضرين</button></a>
</div>
<br><br>
<?php include('scripts.php') ?>
<script type="text/javascript">
  $(".navbar ul a").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
});
</script>
<script>
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('.header-home');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-expand-lg").css('background-color', '#3970f1');
          $(".nav-link").css('color', 'white');
       } else {
          $('.navbar-expand-lg').css('background-color', 'transparent');
          $(".nav-link").css('color', '#252541');
       }
   });
    }
});
</script>
</div>
<?php include('footer.php') ?>
</body>
</html>