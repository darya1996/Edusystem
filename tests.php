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
    include_once("php_includes/db_conx.php");
    $userData = mysqli_query($db_conx,"select * from category_test");
    while($row = mysqli_fetch_assoc($userData)){
        echo "<div class='categories'>";
        echo "<div class='category-name'><a href='src_tests.php?id=".$row['category_id']."'>".$row['category_name']."</a></div>".
        "<div class='category-img'><a href='src_tests.php?id=".$row['category_id']."'><img src='".$row['category_img']."'></a></div></div>";
     }
 ?>
 </div>
    </body></html>