<?
session_start();

require_once 'DB.php';


$user_email = $_POST['user_email'];
$user_pass = md5($_POST['user_pass']);


$check_user = mysqli_query($connect, 
"SELECT * FROM `users` WHERE `user_email` = '$user_email' AND `user_pass` = '$user_pass'");

if(mysqli_num_rows($check_user) > 0){

	$user = mysqli_fetch_assoc($check_user);

	// print_r($user);

	$_SESSION['user'] = [
		"user_id" => $user['user_id'],
		"user_email" => $user['user_email']
	];

	header("location: ../post_job.php");

	
	// print_r($_SESSION['user']);

} else {
	$_SESSION['validation_msg'] = 'No user with this data';
	header("location: enter.php");
}

?>

