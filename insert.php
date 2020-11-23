<?php

include 'DB.php';

// $job_title = $_POST["job_title"];
$job_company_name = $_POST["job_company_name"];
$job_salary = $_POST["job_salary"];
$job_exp = $_POST["job_exp"];
$job_location = $_POST["job_location"];
$job_duration = $_POST["job_duration"];
$job_workload = $_POST["job_workload"];


// $sql = "INSERT INTO `tbl_card` (`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`) VALUES (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload')";


if(isset($_POST["job_title"]))
{
	$job_title = mysqli_real_escape_string($connect, $_POST["job_title"]);
	
	$sql = "INSERT INTO `tbl_card` (`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`) VALUES (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload')";

	if(mysqli_query($connect, $sql))
	{
echo'data added to DB';
	}
}

// if($connect->query($sql))
// {
// echo "data SAVED";
// }
// print_r($job_2);
// print_r($_POST);
?>