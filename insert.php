<?php

include 'DB.php';

// $job_title = $_POST["job_title"];
$job_company_name = $_POST["job_company_name"];
$job_salary = $_POST["job_salary"];
$job_exp = $_POST["job_exp"];
$job_location = $_POST["job_location"];
$job_duration = $_POST["job_duration"];
$job_workload = $_POST["job_workload"];
$job_tags = $_POST["job_tags"];

// SELECTED TAGS VALUES 
$i = 1;
foreach($_POST["job_tags"] as $tagkey) {
    ${'tag_name_'.$i++} = $tagkey;
}

// echo $tag_name_1;
// echo $tag_name_2;
// echo $tag_name_3;







// $sql = "INSERT INTO `tbl_card` (`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`) VALUES (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload')";


if(isset($_POST["job_title"]))
{
	$job_title = mysqli_real_escape_string($connect, $_POST["job_title"]);
	
	$sql = "INSERT INTO `tbl_card` (`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`) VALUES (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload' ,'$tag_name_1' ,'$tag_name_2' ,'$tag_name_3')";

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