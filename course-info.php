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
</style>
<?php
include('navbar.php');
$id = $_GET['id'];
$sql = "SELECT * FROM courses WHERE id = $id";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){
    $course_name = $row['course_name'];
    $short_desc = $row['short_desc'];
    $price = $row['price'];
    $projects = $row['projects'];
    $instructor = $row['instructor'];
    $hours = $row['hours'];
    $lang = $row['lang'];
    $long_desc = $row['long_desc'];
    $pic = $row['pic'];
    $course_week_one = $row['course_week_one'];
    $course_week_two = $row['course_week_two'];
    $course_week_three = $row['course_week_three'];
    $course_week_four = $row['course_week_four'];
    $course_week_five = $row['course_week_five'];
    $course_week_six = $row['course_week_six'];
    $course_week_seven = $row['course_week_seven'];
    $course_week_eight = $row['course_week_eight'];
    $course_week_nine = $row['course_week_nine'];
    $course_week_ten = $row['course_week_ten'];
}
?>
<div class="course-header" style="background:#3f4960;color:white;padding:10px;font-size: 20px;">
<p class="card-text" id="course-name" style="font-family: 'Almarai';font-size: 50px;font-weight: bold;padding-top: 3%;max-width: 1000px;"><?php echo "$course_name" ?></p>
<p class="card-text" style="font-family: Almarai;max-width: 700px;padding-top: 1%;"><?php echo "$short_desc" ?></p>
<h4 class="card-title" id="course-instructor" style="font-family: Almarai;font-size: 20px;padding-top: 1%;padding-bottom:5%"><i class="fas fa-chalkboard-teacher"></i> <?php echo "$instructor" ?></h4>
</div>
<div class="card" id="course-card" style="width: 25rem;position: absolute;left: 70px;top: 140px;">
    <?php echo "<img src='data:image/jpeg;base64,".base64_encode($pic)."' alt='غلاف الكورس' class='card-img-top' style='height:400px'>" ?>
<div class="card-body" style="text-align:center">
    <p class="card-text" id="course-price" style="font-family: 'Cairo';font-size: 30px;font-weight: 800;"><?php echo "$price" ?> جنيه</p>
    <button id="book-now" data-bs-toggle="modal" data-bs-target="#Booking">احجز الان</button>
    <!-- Modal 
    <div class="modal fade" id="Booking" tabindex="-1" aria-labelledby="Booking" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="BookingLabel" style="font-family:Cairo">حجز الكورس</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: 0;"></button>
        </div>
        <div class="modal-body">
            <form method="POST">
                <input type="text" name="name-booking" placeholder="اسمك بالكامل" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 5px;padding: 5px;height: 40px;">
                <input type="text" name="phone-booking" placeholder="رقم تليفونك" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 5px;padding: 5px;height: 40px;">
                <input type="text" name="course-booking" placeholder="اسم الكورس" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 5px;padding: 5px;height: 40px;" value="<?php echo "$course_name" ?>" disabled>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-family:Cairo;font-weight:600">اغلاق الفورم</button>
            <button type="submit" name="book-now" class="btn btn-primary" style="font-family:Cairo;font-weight:600">ارسال الحجز</button>
        </div>
        </form>
<?php
    ob_start();
if(isset($_POST['book-now'])) {
    $full_name = $_POST['name-booking'];
    $phone_booking = $_POST['phone-booking'];
    $course_booking = $_POST['course-booking'];
if($full_name !== "" && $phone_booking !== "") {
    require('sendgrid-php/vendor/autoload.php');  

    $api_key = "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";
    $email = new \SendGrid\Mail\Mail();

    $email->setFrom("support@codux.me", $full_name);
    $email->setSubject($course_booking);
    $email->addTo("fireacademy.eg@gmail.com", "Fire Academy");
    $email->addContent("text/plain", "Full Name: $full_name
Phone number: $phone_booking
Course name: $course_booking");
        
    $sendgrid = new \SendGrid($api_key);
        
    if($sendgrid->send($email)){
        header('Location: done.html');
        ob_end_flush();
    } else {
        echo "<div class='alert alert-danger' role='alert'>برجاء ملئ جميع البيانات بالشكل الصحيح</div>";
    }
}
}
?>
        </div>
    </div>
    </div>-->
    <br><br>
    <div id="course-contain">
        <p style="font-weight: 900;text-align: right;font-family: 'Almarai';">هذا الكورس يحتوي علي :</p>
        <span style="text-align: right;font-family:'Cairo';display: block;padding:.4rem 0"><i class="fas fa-desktop"></i> عدد ساعات الدورة <?php echo $hours ?> ساعة</span>
        <span style="text-align: right;font-family:'Cairo';display: block;padding:.4rem 0"><i class="fas fa-file"></i> انجاز عدد <?php echo $projects ?> مشروع</span>
        <span style="text-align: right;font-family:'Cairo';display: block;padding:.4rem 0"><i class="fas fa-certificate"></i> شهادة اتمام الدورة التدريبية</span>
        <span style="text-align: right;font-family:'Cairo';display: block;padding:.4rem 0"><i class="fas fa-language"></i> باللغة <?php echo "$lang" ?></span>
    </div>
</div>
</div>
<div class="course-info" style="padding:20px;max-width: 66.6%;min-height: 600px;">
    <h3 style="font-family:Cairo"><i class="fas fa-info" style="margin-left: 0.5%;"></i> تفاصيل الدورة التدريبية</h3>
    <p style="font-family:Cairo;font-weight: bold;padding-top:2%">الهدف من الدورة التدريبية</p>
    <p style="font-family: 'Almarai';line-height: 2em;font-size: 17px;">
    <?php echo $long_desc ?>
    </p>
</div>

<div id="course-content" style="padding:15px;background: #fdfdfd">
<br><br>
<div class="container" style="max-width:100%">
    <div class="row">
        <div class="col-lg-7">
            <div class="card" style="box-shadow: 0px 0px 8px 0px #d1d1d1;">
                <h2 class="card-title" style="border-bottom:1px solid #CCC;padding:10px;font-family:Cairo;font-weight:bold;padding-top: 1%;padding-bottom: 2%;"><?php echo "$course_name" ?></h2>
                <ul style="list-style: none;padding-left: 0;">
                    <?php
                    if($course_week_one !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع الاول : $course_week_one</p></li></div>";
                    }
                    if($course_week_two !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع الثاني : $course_week_two</p></li></div>";
                    }                
                    if($course_week_three !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع الثالث : $course_week_three</p></li></div>";
                    }                
                    if($course_week_four !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع الرابع : $course_week_four</p></li></div>";
                    }                
                    if($course_week_five !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع الخامس : $course_week_five</p></li></div>";
                    }                
                    if($course_week_six !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع السادس : $course_week_six</p></li></div>";
                    }                
                    if($course_week_seven !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع السابع : $course_week_seven</p></li></div>";
                    }                
                    if($course_week_eight !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع الثامن : $course_week_eight</p></li></div>";
                    }                
                    if($course_week_nine !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع التاسع : $course_week_nine</p></li></div>";
                    }                
                    if($course_week_ten !== "") {
                        echo "<div class='content-week' style='border-bottom: 1px solid #CCC;padding:10px;font-size: 20px;font-family:Cairo><li id='list-weeks'><p>الاسبوع العاشر : $course_week_ten</p></li></div>";
                    }                

                    ?>
                </ul>
            </div>
        </div>
        <div class="col-lg">
            <div class="instructor-info">
<?php
$sql = "SELECT * FROM instructors WHERE name = '$instructor'";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)) {
    $id = $row['id'];
    $name = $row['name'];
    $role = $row['role'];
    $description = $row['description'];
    $inst_pic = $row['inst_pic'];
}
?>
            <a href="profile.php?id=<?php echo$id ?>" style="color:black">
            <ul class="list-inline" style="list-style: none;display: flex;align-items: center;">
                <li>
                <?php
                    echo "<img src='data:image/jpeg;base64,".base64_encode($inst_pic)."' alt='محاضر كورس فاير اكاديمي' style='width:200px;height:200px;border-radius:200px;border: 1px solid #e9e9e9;'>";
                ?>
                </li>
                <li style="padding-right: 3%;">
                <h3 style="font-family:'Cairo';font-weight:700;color:#252541"><?php echo "$name" ?></h3>
                <span style="font-family:'Almarai'"><?php echo "$role" ?></span>
                </li>
            </ul>
            <?php echo "<div style='font-family: Almarai;color: #8894a4;font-weight: 700;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;height: 67px;'>$description</div>" ?>
            </a>
            </div>
        </div>
    </div>
</div>
<br><br>
</div>

<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>
</html>