<!DOCTYPE html>
<html lang="ar">
    <head>
        <title>لوحة التحكم | فاير اكاديمي</title>
        <?php ob_start();include('links.php'); ?>
        <style>
            input {
              padding: 10px;
            }
            .fr-box {
              width: 90%;
              margin-right: auto;
              margin-left: auto;
              margin-bottom:3%
            }
            input[type="file"] {
                display: block;
            }
        </style>
    </head>
<body style="background:#f5f5f5;direction: rtl;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background:rgb(57, 112, 241);width: 100%;top: 0;right: 0;">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="../images/icon.png" alt="Fire Academy" style="width: 45px;height: 45px;background: white;padding: 8px;border-radius: 50px;">
      <span style="font-family:'Cairo', Sans-serif;font-weight: bold;">فاير اكاديمي</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="font-family: Cairo;font-weight: bold;"><i class="fas fa-user"></i> مرحباً, <?php echo $_SESSION['name'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="font-family: Cairo;font-weight: bold;"><i class="fas fa-door-open"></i> تسجيل الخروج</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg">
            <form method="POST" enctype="multipart/form-data" style="background: white;padding: 20px;text-align: center;margin-top: 18%;border-radius: 10px;box-shadow: 0px 0px 11px 1px #CCC;">
                <h3 style="text-align:center;font-family: Cairo;font-weight:bold">اضافة بيانات كورس</h3>
                <br>
                <input type="text" name="course-name" placeholder="اسم الكورس" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-short-desc" placeholder="ملخص عن الكورس ( 13 كلمة فقط )" id="input" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="number" name="course-price" placeholder="سعر الكورس" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <select name="course-instructor" style="margin-bottom: 3%;min-height: 46px;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                  <option value="">-- اختر المُحاضر --</option>  
                  <?php
                  $sql = "SELECT * FROM instructors";
                  $query = mysqli_query($connect, $sql);
                  while ($row = mysqli_fetch_array($query)) {
                    $name = $row['name'];
                    echo "<option>$name</option>";
                  }
                  ?>
                </select>
                <input type="number" name="course-hours" placeholder="عدد ساعات الدورة" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="number" name="course-projects" placeholder="عدد المشاريع" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <select name="course-lang" style="margin-bottom: 3%;min-height: 46px;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                  <option value="">-- اختر اللغة --</option>  
                  <option value="العربية">اللغة العربية</option>
                  <option value="الانجليزية">اللغة الانجليزية</option>
                </select>
                <textarea name="course-desc" id="editor" placeholder="وصف للكورس" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;"></textarea>
                <input class="input-file" name="course-cover" type="file">
                <input type="text" name="course-week1" placeholder="عنوان الاسبوع الاول" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week2" placeholder="عنوان الاسبوع الثاني" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week3" placeholder="عنوان الاسبوع الثالث" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week4" placeholder="عنوان الاسبوع الرابع" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week5" placeholder="عنوان الاسبوع الخامس" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week6" placeholder="عنوان الاسبوع السادس" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week7" placeholder="عنوان الاسبوع السابع" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week8" placeholder="عنوان الاسبوع الثامن" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week9" placeholder="عنوان الاسبوع التاسع" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="course-week10" placeholder="عنوان الاسبوع العاشر" style="margin-bottom: 3%;max-width: 204px;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="submit" name="post-course" class="btn btn-outline-dark" value="اضافة بيانات كورس" style="font-family:cairo;font-weight:bold;display:block;margin-right:auto;margin-left:auto">
<?php
if(empty($_SESSION['name'])){
  echo "<script type='text/javascript'>document.location.href='index.php';</script>";
}
if (isset($_POST['post-course'])) {
  $course_name = $_POST['course-name'];
  $course_short_desc = $_POST['course-short-desc'];
  $course_price = $_POST['course-price'];
  $course_instructor = $_POST['course-instructor'];
  $course_hours = $_POST['course-hours'];
  $course_projects = $_POST['course-projects'];
  $course_lang = $_POST['course-lang'];
  $course_desc = $_POST['course-desc'];
  $course_pic = addslashes(file_get_contents($_FILES['course-cover']['tmp_name']));
  $course_week_one = $_POST['course-week1'];
  $course_week_two = $_POST['course-week2'];
  $course_week_three = $_POST['course-week3'];
  $course_week_four = $_POST['course-week4'];
  $course_week_five = $_POST['course-week5'];
  $course_week_six = $_POST['course-week6'];
  $course_week_seven = $_POST['course-week7'];
  $course_week_eight = $_POST['course-week8'];
  $course_week_nine = $_POST['course-week9'];
  $course_week_ten = $_POST['course-week10'];

  $sql = "INSERT INTO courses (course_name, short_desc, price, instructor, hours, projects, lang, long_desc, pic,course_week_one, course_week_two, course_week_three, course_week_four, course_week_five, course_week_six, course_week_seven, course_week_eight, course_week_nine, course_week_ten) VALUES ('$course_name', '$course_short_desc', '$course_price', '$course_instructor', '$course_hours', '$course_projects', '$course_lang', '$course_desc', '$course_pic','$course_week_one', '$course_week_two', '$course_week_three', '$course_week_four', '$course_week_five', '$course_week_six', '$course_week_seven', '$course_week_eight', '$course_week_nine', '$course_week_ten')";
  $query = mysqli_query($connect, $sql);
  echo "<div class='alert alert-success'>تم اضافة بيانات الكورس</div>";
}
?>
            </form>
        </div>
        <div class="col-lg">

        <form method="POST" enctype="multipart/form-data" style="background: white;padding: 20px;text-align: center;margin-top: 18%;border-radius: 10px;box-shadow: 0px 0px 11px 1px #CCC;">
                <h3 style="text-align:center;font-family: Cairo;font-weight:bold">اضافة بيانات مُحاضر</h3>
                <br>
                <input type="text" name="instructor-name" placeholder="اسم المعلم" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <input type="text" name="instructor-role" placeholder="الوظيفة" id="input" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;">
                <textarea name="instructor-desc" id="editor" placeholder="ملخص عنه" style="margin-bottom: 3%;width: 90%;outline: none;border: 1px solid #CCC;border-radius: 8px;"></textarea>
                <input type="file" name="instructor-pic" style="font-family:cairo;">
                <input type="submit" name="post-instructor" class="btn btn-outline-dark" value="اضافة بيانات معلم" style="font-family:cairo;font-weight:bold;display:block;margin-right:auto;margin-left:auto">
<?php
if (isset($_POST['post-instructor'])) {
  $instructor_name = $_POST['instructor-name'];
  $instructor_role = $_POST['instructor-role'];
  $instructor_desc = $_POST['instructor-desc'];
  $instructor_pic = addslashes(file_get_contents($_FILES['instructor-pic']['tmp_name']));
  $sql = "INSERT INTO instructors (name, role, description, inst_pic) VALUES ('$instructor_name', '$instructor_role', '$instructor_desc', '$instructor_pic')";
  $query = mysqli_query($connect, $sql);
  echo "<div class='alert alert-success'>تم اضافة بيانات المُحاضر</div>";
}
?>
        </form>
        </div>
    </div>
</div>
<br><br><br>
<?php include('scripts.php') ?>
</body>
</html>