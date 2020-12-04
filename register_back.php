<?
session_start();

require_once 'DB.php';

$user_email = $_POST['user_email'];
$user_pass = $_POST['user_pass'];
$user_pass_confirm = $_POST['user_pass_confirm'];

// validation

if($user_pass !== $user_pass_confirm){

	$_SESSION['pass_no_match'] = 'Passwords do not match!';
	header("location: register_front.php");

}else if(trim($user_email) == ""){

	$_SESSION['empty_email'] = 'Please enter email!';
	header("location: register_front.php");

}
else if($user_pass == "" && $user_pass_confirm == ""){

	$_SESSION['empty_pass'] = 'Please enter password!';
	header("location: register_front.php");

}
else {

	$user_pass = md5($user_pass);

	$insert_user = mysqli_query($connect, "INSERT INTO `users` 
	(`user_id`, `user_email`, `user_pass`) 
	VALUES 
	(NULL, '$user_email', '$user_pass')");

	$_SESSION['user_added'] = 'Registered succesfully!';
	header("location: register_front.php");
}

?>
