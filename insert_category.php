<?php
include_once("php_includes/db_conx.php");

  $name_cat = mysqli_real_escape_string($db_conx, $_REQUEST['name_cat']);
  $image_cat = mysqli_real_escape_string($db_conx, $_REQUEST['image_cat']);

$query = mysqli_query($db_conx,"INSERT INTO category_test VALUES (NULL ,'$name_cat' ,'$image_cat')");

    header('Location: http://'.$_SERVER['SERVER_NAME'].'/Edu_CMS/admin.php');
//echo $errr . "1111111";
    
mysqli_close($db_conx);

?>