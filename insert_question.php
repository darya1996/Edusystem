<?php
include_once("php_includes/db_conx.php");

  $name_q = mysqli_real_escape_string($db_conx, $_REQUEST['name_q']);
  $category = mysqli_real_escape_string($db_conx, $_REQUEST['category']);
  $test = mysqli_real_escape_string($db_conx, $_REQUEST['test']);
  $right_answer = mysqli_real_escape_string($db_conx, $_REQUEST['right_answer']);
  $other_answer1 = mysqli_real_escape_string($db_conx, $_REQUEST['other_answer1']);
  $other_answer2 = mysqli_real_escape_string($db_conx, $_REQUEST['other_answer2']);

$query1 = mysqli_query($db_conx,"INSERT INTO questions_test VALUES (NULL ,'$test' ,'$name_q')");
$query2 = mysqli_query($db_conx,"SELECT * FROM questions_test WHERE question='$name_q'");
$q_id = mysqli_fetch_assoc($query2);
$n = $q_id['q_id'];
$query3 = mysqli_query($db_conx,"INSERT INTO answers_test VALUES (NULL ,'$right_answer' ,'$n', 1)");
$query4 = mysqli_query($db_conx,"INSERT INTO answers_test VALUES (NULL ,'$other_answer1' ,'$n', 0)");
$query5 = mysqli_query($db_conx,"INSERT INTO answers_test VALUES (NULL ,'$other_answer2' ,'$n', 0)");

header('Location: http://'.$_SERVER['SERVER_NAME'].'/Edu_CMS/add_questions.php');
//echo $errr . "1111111";
    
mysqli_close($db_conx);

?>