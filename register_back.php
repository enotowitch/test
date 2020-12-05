<?
session_start();

require_once 'DB.php';

$user_email = $_POST['user_email'];
$user_pass = $_POST['user_pass'];
$user_pass_confirm = $_POST['user_pass_confirm'];

// ! validation
// ! 1
if($user_pass !== $user_pass_confirm){

	$_SESSION['validation_msg'] = 'Passwords do not match!';
	header("location: register_front.php");
// ! 2
}else if(trim($user_email) == ""){

	$_SESSION['validation_msg'] = 'Please enter email!';
	header("location: register_front.php");
// ! 3
}else if($user_pass == "" && $user_pass_confirm == ""){

	$_SESSION['validation_msg'] = 'Please enter password!';
	header("location: register_front.php");

}
// ! OK
else {
// ! insert user to DB
	$user_pass = md5($user_pass);

	$insert_user = mysqli_query($connect, "INSERT INTO `users` 
	(`user_id`, `user_email`, `user_pass`) 
	VALUES 
	(NULL, '$user_email', '$user_pass')");

	$_SESSION['validation_msg'] = 'Registered succesfully!';

}

// ! insert user to SESSION

$check_user = mysqli_query($connect, 
"SELECT * FROM `users` WHERE `user_email` = '$user_email' AND `user_pass` = '$user_pass'");

if(mysqli_num_rows($check_user) > 0){

	$user = mysqli_fetch_assoc($check_user);

	// print_r($user);

	$_SESSION['user'] = [
		"user_id" => $user['user_id'],
		"user_email" => $user['user_email']
	];

	header("location: ../profile.php");
}

?>
