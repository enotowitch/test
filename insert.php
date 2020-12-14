<?php
// header("location: index.php");

require_once 'DB.php';

$job_title = $_POST["job_title"];
$job_company_name = $_POST["job_company_name"];
$job_salary = $_POST["job_salary"];
$job_exp = $_POST["job_exp"];
$job_location = $_POST["job_location"];
$job_duration = $_POST["job_duration"];
$job_workload = $_POST["job_workload"];

$job_tags = $_POST["job_tags"];



$path_logo = 'uploads/' . $_FILES['post_job_imgs']['name'];
move_uploaded_file($_FILES['post_job_imgs']['tmp_name'], $path_logo);

$path_examples = 'uploads/' . $_FILES['post_job_examples']['name'];
move_uploaded_file($_FILES['post_job_examples']['tmp_name'], $path_examples);



// SELECTED TAGS VALUES 
$i = 1;
foreach($_POST["job_tags"] as $tagkey) {
    ${'tag_name_'.$i++} = $tagkey;
}
// SELECTED EXAMPLE IMGS 
$e = 1;
foreach($_FILES['post_job_examples']['name'] as $imgkey) {
    ${'img_name_'.$e++} = $imgkey;
}

echo $img_name_1;



$insert = mysqli_query($connect, "INSERT INTO `tbl_card` 
(`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`, `job_img`, `job_examples`) VALUES 
         (NULL, '$job_title', '$job_company_name', 'POSTED', '$job_salary', '$job_exp', '$job_location', '$job_duration', '$job_workload' ,'$tag_name_1' ,'$tag_name_2' ,'$tag_name_3','$path_logo','$path_examples')");


?>

<!-- <pre>
<?
print_r ($_FILES);
?>
</pre> -->