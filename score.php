<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Student Profile</li>
</ul>

    <section style="min-height: 559px;" class="content">
        <script>
$(document).ready(function(){
    $('.tab-content').slimScroll({
        height: '300px'
    });
});
$(document).ready(function(){
    $('#coursList').slimScroll({
        height: '250px'
    });
});
</script>
<style>
.tab-content {
   padding:15px;
}
.box .box-body .fc-widget-header {
    background: none;
}
.popover{
    max-width:450px;   
}
</style>
<!--connnecting to database -->
<?php

  $conn=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($conn,"edusystem");
//  session_start();
 
  //Check whether the session variable SESS_MEMBER_ID is present or not
  //if(!isset($_SESSION['sess_username']) || (trim($_SESSION['sess_username']) == '')) {
  //header("location: index.php");
  //exit();
//}
?> 

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title">Tests and Quizz</h3></div>
</div>

<div class="stu-master-create">
    <style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>
<script>
$(function () {
  $('[data-toggle="popover"]').popover({placement: function() { return $(window).width() < 768 ? 'bottom' : 'right'; }})
})
</script>
<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
   </div>
 </div>
 </section>           
 <div class="test-catalog">
 <?php
  $label = 'id_test';
  $id_test = $_GET[ $label ];
  $q0 = $_POST['0'];
  $q1 = $_POST['1'];
  $q2 = $_POST['2'];

  if($q0==''||$q1==''||$q2=='')
  {
    echo '<h1><p align = center> Извините: Вы должны ответить на все вопросы</p></h1>';
  }
  else
  {
    $score = 0;
    if($q0 == 1) $score++;
    if($q1 == 1) $score++;
    if($q2 == 1) $score++;
    
    $score = $score / 3 * 100;
    $score = number_format($score, 1);
    if($score < 50) {
        echo "<h1>Извините, вы не сдали тест. Пройдите материал еще раз! </h1>";
    }
    else {
        echo "<h1>Вы набрали $score % из 100% . Поздравляем!</h1>";
    }
    $id=$_SESSION['userid'];
    $q3 = "SELECT sid FROM student WHERE username = '".$id."'";
    $id_st1 = mysqli_query($conn,$q3);
    $id_st2 = mysqli_fetch_assoc($id_st1);
    $stud = $id_st2['sid'];
    $date = date("Y-m-d H:i");
    $strSQL = "INSERT INTO test_results VALUES (NULL, '$stud', '$id_test', '$score', '$date')";
    $rs = mysqli_query($conn,$strSQL);
  }
 ?>
 </div>

</body></html>