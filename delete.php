<?
header("location: index.php");

require_once 'DB.php';

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM `tbl_card` WHERE `tbl_card`.`job_post_id` = $id");

?>