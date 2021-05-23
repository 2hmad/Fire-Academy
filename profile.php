<!DOCTYPE html>
<html>
<head>
<title>فاير اكاديمي - طريقك للتعلم المثالي</title>
<?php include('links.php') ?>
</head>
<body>
<style>
    .navbar-expand-lg {
        background-color: #3970f1;
    }
    p {
        font-size: 18px !important;
        font-family: 'Almarai' !important;
    }
    @media (max-width: 1024px) {
        .instructor {
            text-align: center;
        }
    }
    @media (max-width: 576px) {
        .instructor {
            text-align: center;
        }
    }
    @media (max-width: 768px) {
        .instructor {
            text-align: center;
        }
    }
    @media (max-width: 991px) {
        .instructor {
            text-align: center;
        }
    }
</style>
<?php
include('navbar.php');
$id = $_GET['id'];
$sql = "SELECT * FROM instructors WHERE id = $id";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){
    $name = $row['name'];
    $role = $row['role'];
    $description = $row['description'];
    $inst_pic = $row['inst_pic'];
}
?>
<div class="course-header" style="background:#3f4960;color:white;padding:10px;font-size: 20px;">
<br>
<div class="container" style="max-width:95%">
    <div class="row">
        <div class="col-lg instructor">
            <?php echo "<img src='data:image/jpeg;base64,".base64_encode($inst_pic)."' alt='غلاف الكورس' id='instructor-pic' style='margin-bottom:3%;margin-left: 1%;float: right;width: 200px;height:200px;border-radius:50%'>" ?>
            <p class="card-text" id="course-name" style="font-family: 'Almarai';font-size: 40px!important;font-weight: bold;padding-top: 2%;"><?php echo "$name" ?></p>
            <p class="card-text" style="font-family: Almarai;max-width: 700px;"><?php echo "$role" ?></p>
        </div>
        <div class="col-lg-3" style="text-align: center;">
            <span style="font-size: 55px;"><i class="fas fa-graduation-cap" style="font-size: 45px;"></i> <?php
             $sql = "SELECT COUNT(*) AS total FROM courses WHERE instructor = '$name'";
             $query = mysqli_query($connect, $sql);
             $data = mysqli_fetch_assoc($query);
             if($query !== "") {
                echo "<span style='font-family:cursive'>$data[total]</span>";
             } else {
                echo "<span>0</span>";
             }
             ?>
             </span>
             <span style="display: block;font-family: 'Cairo';font-size: 17px;">عدد الكورسات</span>
        </div>
    </div>
</div>
</div>
<div class="instructor-info" style="padding:20px;max-width: 66.6%;min-height: 300px;">
<br><br>
<h3 style="font-family:Cairo"><i class="fas fa-info" style="margin-left: 0.5%;"></i> تفاصيل المحاضر</h3>
<div style="font-family: 'Almarai';line-height: 2em;font-size: 17px;margin-top:3%">
    <?php echo $description ?>
</div>
</div>
<br><br>
<h4 style="font-family:Cairo">الدورات المقدمة</h4>
<div class="container" style="max-width: 90%;">
<div class="row">
<?php
$sql = "SELECT * FROM courses WHERE instructor = '$name'";
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
<br><br><br>

<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>
</html>