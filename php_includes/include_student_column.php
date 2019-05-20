<?php

include_once("php_includes/check_login_status.php");

if($_SESSION['userType'] == 'admin'){
   // $img = 'img/profile/admin/'.$_SESSION['userid'] . '.jpg';
    $img = 'img/profile/default_pic.png';
}else if($_SESSION['userType'] == 'student'){
    $img = 'img/profile/default_pic.png';
    if(file_exists ( $img )){

    }else{
        $img = 'img/profile/student/unknown.png';
    }
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
                <div class="col-md-offset-0"><br>
                    <p style="color:white;text-align:center;"> Welcome, <?php echo $_SESSION['userid']; ?></p>
                </div>
           </div>
        
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
		    <li><a href="Student_profile.php"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                        <li><a href="student_result.php"><i class="fa fa-dashboard"></i> <span>Past Result</span></a></li>
            <li><a href="tests.php"><i class="fa fa-cogs"></i> <span>Tests and Quizz</span></a></li>
	        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>

       

    