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






$update = mysqli_query($connect, "UPDATE `tbl_card` 
SET `job_title` = '$job_title', `job_company_name` = '$job_company_name', `job_salary` = '$job_salary', `job_exp` = '$job_exp', `job_location` = '$job_location', `job_duration` = '$job_duration', `job_workload` = '$job_workload', `job_tag_1` = '$tag_name_1', `job_tag_2` = '$tag_name_2', `job_tag_3` = '$tag_name_3', `job_img` = '$logo_path', `job_example_1`= '$path_example_1', `job_example_2`= '$path_example_2', `job_example_3`= '$path_example_3'
WHERE `tbl_card`.`job_post_id` = $id");

?>




<pre>
	<? 
	var_dump($_POST["job_title"]);
	
	// var_dump($job_tags);
	
	?>
</pre>



