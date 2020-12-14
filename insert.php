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

$job_tags = $_POST["job_tags"];


// ! Path for uploading logo - IN POST JOB
$path_logo = 'uploads/' . $_FILES['post_job_imgs']['name'];
move_uploaded_file($_FILES['post_job_imgs']['tmp_name'], $path_logo);
// ! Path for uploading example 1
$path_example_1 = 'uploads/' . $_FILES['post_job_examples']['name'][0];
move_uploaded_file($_FILES['post_job_examples']['tmp_name'][0], $path_example_1);
// ! Path for uploading example 2
$path_example_2 = 'uploads/' . $_FILES['post_job_examples']['name'][1];
move_uploaded_file($_FILES['post_job_examples']['tmp_name'][1], $path_example_2);
// ! Path for uploading example 3
$path_example_3 = 'uploads/' . $_FILES['post_job_examples']['name'][2];
move_uploaded_file($_FILES['post_job_examples']['tmp_name'][2], $path_example_3);



// SELECTED TAGS VALUES 
$i = 1;
foreach($_POST["job_tags"] as $tagkey) {
    ${'tag_name_'.$i++} = $tagkey;
}


$insert = mysqli_query($connect, "INSERT INTO `tbl_card` 
(`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`, `job_img`, `job_example_1`, `job_example_2`, `job_example_3`) VALUES 
         (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload' ,'$tag_name_1' ,'$tag_name_2' ,'$tag_name_3','$path_logo','$path_example_1','$path_example_2','$path_example_3')");


?>

<!-- <pre>
<? print_r ($_FILES['post_job_examples']['name'][1]); ?>
</pre> -->