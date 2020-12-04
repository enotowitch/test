<?
session_start();
include 'header.php';
?>

<?if($_SESSION['user']): ?>
	<? echo "HELLO {$_SESSION['user']['user_email']}"; ?>
	<a href="log_out.php">LOG OUT</a>
<? endif; ?>

<?if(!$_SESSION['user']): ?>
	<a href="enter.php">SIGN IN</a>
<? endif; ?>

<?if(!$_SESSION['user']): ?>
	<a href="register_front.php">REGISTER</a>
<? endif; ?>

<!--  -->
<!--  -->


<!-- !!! STYLE !!! -->
<style>
	form {
		display: flex;
		flex-direction: column;
		align-items: center;
		margin: 0 auto;
		max-width: 500px;
	}

	input {
		border: 2px solid red;
		width: 200px;

	}

	
</style>


<form action="enter_back.php" method="POST">
<a href="register_front.php">Don't have account? REGISTER</a>
<br>
<br>
<br>
<!-- Email -->
	<label for="user_email">User Email</label>
	<input type="email" name="user_email" id="user_email">
<!-- Password -->
	<label for="user_pass">Password</label>
	<input type="password" name="user_pass" id="user_pass">

	<input type="submit" value="SIGN IN">
	
	<div>
		<? if($_SESSION['no_user_in_db']){
			echo $_SESSION['no_user_in_db'];
			unset($_SESSION['no_user_in_db']);
		}
		//  if($_SESSION['empty_email']){
		// 	echo $_SESSION['empty_email'];
		// 	unset($_SESSION['empty_email']);
		// } 
		//  if($_SESSION['user_added']){
		// 	echo $_SESSION['user_added'];
		// 	unset($_SESSION['user_added']);
		// } 
		//  if($_SESSION['empty_pass']){
		// 	echo $_SESSION['empty_pass'];
		// 	unset($_SESSION['empty_pass']);
		// } 
		
		?>
	</div>
</form>




<? 
include 'footer.php';
?>