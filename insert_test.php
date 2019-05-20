<?php
include_once("php_includes/db_conx.php");

  $name_test = mysqli_real_escape_string($db_conx, $_REQUEST['name_test']);
  $category = mysqli_real_escape_string($db_conx, $_REQUEST['category']);
  $description_test = mysqli_real_escape_string($db_conx, $_REQUEST['description_test']);

$query = mysqli_query($db_conx,"INSERT INTO tests VALUES (NULL ,'$category' ,'$name_test', '$description_test')");

    header('Location: http://'.$_SERVER['SERVER_NAME'].'/Edu_CMS/admin.php');
//echo $errr . "1111111";
    
mysqli_close($db_conx);

?>