<?php
header("location: index.php");

require_once 'DB.php';

$job_title = $_POST["job_title"];
$job_company_name = $_POST["job_company_name"];
$job_salary = $_POST["job_salary"];
$job_exp = $_POST["job_exp"];
$job_location = $_POST["job_location"];
$job_duration = $_POST["job_duration"];
$job_workload = $_POST["job_workload"];

// AJAX TAGS
$tag_name_1 = $_POST['tag_name_1'];
$tag_name_2 = $_POST['tag_name_2'];
$tag_name_3 = $_POST['tag_name_3'];

$user_id = $_POST['user_id'];




// AJAX FILE

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





// 

$insert = mysqli_query($connect, "INSERT INTO `tbl_card` 
(`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`, `job_img`, `job_example_1`, `job_example_2`, `job_example_3`, `user_id`) VALUES 
         (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload' ,'$tag_name_1' ,'$tag_name_2' ,'$tag_name_3','$logo_path','$path_example_1','$path_example_2','$path_example_3','$user_id')");



// ! old files
// $path_logo = 'uploads/' . $_FILES['post_job_imgs']['name'];
// move_uploaded_file($_FILES['post_job_imgs']['tmp_name'], $path_logo);

// // ! Path for uploading example 1
// $path_example_1 = 'uploads/' . $_FILES['post_job_examples']['name'][0];
// move_uploaded_file($_FILES['post_job_examples']['tmp_name'][0], $path_example_1);
// // ! Path for uploading example 2
// $path_example_2 = 'uploads/' . $_FILES['post_job_examples']['name'][1];
// move_uploaded_file($_FILES['post_job_examples']['tmp_name'][1], $path_example_2);
// // ! Path for uploading example 3
// $path_example_3 = 'uploads/' . $_FILES['post_job_examples']['name'][2];
// move_uploaded_file($_FILES['post_job_examples']['tmp_name'][2], $path_example_3);


?>

<!-- <pre>
<? print_r ($_FILES['post_job_examples']['name'][1]); ?>
</pre> -->


