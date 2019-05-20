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
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title">Student's Result</h3></div>
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
 <table class="table table-striped">
 <thead>
    <tr>
        <th>Name of test</th>
        <th>Score</th>
        <th>Date</th>
    </tr>
 </thead>
 <tbody>
 <?php
    $id=$_SESSION['userid'];
    $q3 = "SELECT sid FROM student WHERE username = '".$id."'";
    $id_st1 = mysqli_query($conn,$q3);
    $id_st2 = mysqli_fetch_assoc($id_st1);
    $stud = $id_st2['sid'];
    $userData = mysqli_query($db_conx,"select * from test_results where student=$stud");
    while($row = mysqli_fetch_assoc($userData)){
        $test_id = $row['id_test'];
        $test_name = mysqli_query($db_conx, "select test_name from tests where test_id = $test_id");
        $test_n = mysqli_fetch_assoc($test_name);
        echo "<tr><td>".$test_n['test_name']."</td><td>".$row['score']."</td><td>".$row['date']."</td></tr>";
     }
 ?>
 </tbody>
 </table>
 </div>
    </body></html>