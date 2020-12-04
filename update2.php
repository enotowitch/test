<?
header("location: index.php");

require_once 'DB.php';

$id = $_REQUEST['hidden_id'];

$job_title = $_POST["job_title"];
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

echo $tag_name_1;
echo $tag_name_2;


$update = mysqli_query($connect, "UPDATE `tbl_card` 
SET `job_title` = '$job_title', `job_company_name` = '$job_company_name', `job_salary` = '$job_salary', `job_exp` = '$job_exp', `job_location` = '$job_location', `job_duration` = '$job_duration', `job_workload` = '$job_workload', `job_tag_1` = '$tag_name_1', `job_tag_2` = '$tag_name_2', `job_tag_3` = '$tag_name_3' 
WHERE `tbl_card`.`job_post_id` = $id");

?>




<pre>
	<? 
	var_dump($_POST["job_title"]);
	
	// var_dump($job_tags);
	
	?>
</pre>



