<?php  
 include_once("php_includes/db_conx.php");
 $userData = mysqli_query($db_conx,"select * from category_test");
 $response = array();

while($row = mysqli_fetch_assoc($userData)){

   $response[] = $row;
}

echo json_encode($response);
exit;
 ?>  

<?php
include_once("php_includes/db_conx.php");

$out = array('error' => false);

$category_test = 'read';

if(isset($_GET['category_test'])){
	$category_test = $_GET['category_test'];
}


if($category_test = 'read'){
	$sql = "select * from members";
	$query = $conn->query($sql);
	$members = array();

	while($row = $query->fetch_array()){
		array_push($members, $row);
	}

	$out['members'] = $members;
}


$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();


?>