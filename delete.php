<?
// header("location: index.php");

require_once 'DB.php';

$post_id = $_REQUEST['hidden_id_delete'];

$delete = mysqli_query($connect, "DELETE FROM `tbl_card` WHERE `tbl_card`.`job_post_id` = '$post_id'");

?>