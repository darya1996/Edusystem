<?php

include_once("php_includes/check_login_status.php");

if($_SESSION['userType'] == 'admin'){
   // $img = 'img/profile/admin/'.$_SESSION['userid'] . '.jpg';
    $img = 'img/profile/default_pic.png';
}else if($_SESSION['userType'] == 'student'){
    $img = 'img/profile/default_pic.png';
}


?>
<!--button><a href='logout.php'>Logout</a></button-->


    <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="col-md-offset-2">
                    <img src="<?php echo $img ?>" class="img-circle" alt="User Image">
                </div>
                <div class="col-md-offset-2">
                   <br> <p style="color:white;"> Welcome, <?php echo $_SESSION['userid']; ?></p>
                </div>
            </div>
        
        <ul class="sidebar-menu">
            <li type='circle'>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
		    <li type='circle'><a href="add_questions.php"><i class="fa fa-dashboard"></i> <span>Add Questions</span></a></li>
		    <li type='circle'><a href="add_test.php"><i class="fa fa-dashboard"></i> <span>Add Test</span></a></li>
            <li type='circle'><a href="student_result_admin.php"><i class="fa fa-dashboard"></i> <span>Student's Score</span></a></li>
              </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>

       

    