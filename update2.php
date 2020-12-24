<?

require_once 'DB.php';

$id = $_REQUEST['hidden_id'];

$job_title = $_POST["job_title"];
$job_company_name = $_POST["job_company_name"];
$job_salary = $_POST["job_salary"];
$job_exp = $_POST["job_exp"];
$job_location = $_POST["job_location"];
$job_duration = $_POST["job_duration"];
$job_workload = $_POST["job_workload"];



// ! AJAX TAGS
$tag_name_1 = $_POST['tag_name_1'];
$tag_name_2 = $_POST['tag_name_2'];
$tag_name_3 = $_POST['tag_name_3'];




// ! AJAX FILE

// ! Path for uploading logo - IN POST JOB
$logo_path = 'uploads/' . $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);

// ! 1
$path_example_1 = 'uploads/' . $_FILES['path_example_1']['name'];
move_uploaded_file($_FILES['path_example_1']['tmp_name'], 'uploads/' . $_FILES['path_example_1']['name']);
// ! 2
$path_example_2 = 'uploads/' . $_FILES['path_example_2']['name'];
move_uploaded_file($_FILES['path_example_2']['tmp_name'], 'uploads/' . $_FILES['path_example_2']['name']);
// ! 3
$path_example_3 = 'uploads/' . $_FILES['path_example_3']['name'];
move_uploaded_file($_FILES['path_example_3']['tmp_name'], 'uploads/' . $_FILES['path_example_3']['name']);



// ! VALIDATION 

$error_fields = [];
// ! job_title
if(!$job_title){
	$error_fields[] = 'update_job_title';
}
// ! job_company_name
if(!$job_company_name){
	$error_fields[] = 'update_job_company_name';
}
// ! CHECK if tags = 3
if(!($tag_name_3)){
	$error_fields[] = 'tags_not_3';
}
// 
// 
// 
// ! IF ERRORS
if(!empty($error_fields)){
	$response = [
		'type' => false,
		'fields' => $error_fields
	];

	echo json_encode($response);

	return;
} 





// ! if no NEW LOGO and EXAMPLES => don't update, keep OLD
if(!$_FILES['file']['name'] && !$_FILES['path_example_3']['name']){

	$update = mysqli_query($connect, "UPDATE `tbl_card` 
	SET `job_title` = '$job_title',
	 `job_company_name` = '$job_company_name',
	 `job_salary` = '$job_salary',
	 `job_exp` = '$job_exp',
	 `job_location` = '$job_location',
	 `job_duration` = '$job_duration',
	 `job_workload` = '$job_workload',
	 `job_tag_1` = '$tag_name_1',
	 `job_tag_2` = '$tag_name_2',
	 `job_tag_3` = '$tag_name_3'
	--  `job_img` = '$logo_path',
	--  `job_example_1`= '$path_example_1',
	--  `job_example_2`= '$path_example_2',
	--  `job_example_3`= '$path_example_3'
	WHERE `tbl_card`.`job_post_id` = '$id'");

$response = [
	'type' => true,
	'msg' => 'JOB POST UPDATED!'
];

echo json_encode($response);

	return;
}


// ! if no NEW LOGO => don't update, keep OLD
if(!$_FILES['file']['name']){

	$update = mysqli_query($connect, "UPDATE `tbl_card` 
	SET `job_title` = '$job_title',
	 `job_company_name` = '$job_company_name',
	 `job_salary` = '$job_salary',
	 `job_exp` = '$job_exp',
	 `job_location` = '$job_location',
	 `job_duration` = '$job_duration',
	 `job_workload` = '$job_workload',
	 `job_tag_1` = '$tag_name_1',
	 `job_tag_2` = '$tag_name_2',
	 `job_tag_3` = '$tag_name_3',
	--  `job_img` = '$logo_path',
	 `job_example_1`= '$path_example_1',
	 `job_example_2`= '$path_example_2',
	 `job_example_3`= '$path_example_3'
	WHERE `tbl_card`.`job_post_id` = '$id'");

$response = [
	'type' => true,
	'msg' => 'JOB POST UPDATED!'
];

echo json_encode($response);

	return;
}
// ! if no NEW EXAMPLES => don't update, keep OLD
if(!$_FILES['path_example_3']['name']){
	
	$update = mysqli_query($connect, "UPDATE `tbl_card` 
	SET `job_title` = '$job_title',
	 `job_company_name` = '$job_company_name',
	 `job_salary` = '$job_salary',
	 `job_exp` = '$job_exp',
	 `job_location` = '$job_location',
	 `job_duration` = '$job_duration',
	 `job_workload` = '$job_workload',
	 `job_tag_1` = '$tag_name_1',
	 `job_tag_2` = '$tag_name_2',
	 `job_tag_3` = '$tag_name_3',
	 `job_img` = '$logo_path'
	--  `job_example_1`= '$path_example_1',
	--  `job_example_2`= '$path_example_2',
	--  `job_example_3`= '$path_example_3'
	WHERE `tbl_card`.`job_post_id` = '$id'");

$response = [
	'type' => true,
	'msg' => 'JOB POST UPDATED!'
];

echo json_encode($response);

	return;
}
//
//
// ! IF ALL PICS ARE NEW => FULL UPDATE
else{

	$response = [
		'type' => true,
		'msg' => 'JOB POST UPDATED!'
	];

	// ! FULL UPDATE
	$update = mysqli_query($connect, "UPDATE `tbl_card` 
	SET `job_title` = '$job_title', `job_company_name` = '$job_company_name', `job_salary` = '$job_salary', `job_exp` = '$job_exp', `job_location` = '$job_location', `job_duration` = '$job_duration', `job_workload` = '$job_workload', `job_tag_1` = '$tag_name_1', `job_tag_2` = '$tag_name_2', `job_tag_3` = '$tag_name_3', `job_img` = '$logo_path', `job_example_1`= '$path_example_1', `job_example_2`= '$path_example_2', `job_example_3`= '$path_example_3'
	WHERE `tbl_card`.`job_post_id` = '$id'");

echo json_encode($response);
}




?>




