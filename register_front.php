<?
session_start();
include 'header.php';
?>

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

	label {}
</style>


<form action="register_back.php" method="POST">
<a href="enter.php">Already have account? SING IN</a>
<br>
<br>
<br>
<!-- Email -->
	<label for="user_email">User Email</label>
	<input type="email" name="user_email" id="user_email">
	<!-- Password -->
	<label for="user_pass">Password</label>
	<input type="password" name="user_pass" id="user_pass">
	<!-- Confirm Password -->
	<label for="user_pass_confirm">Confirm Password</label>
	<input type="password" name="user_pass_confirm" id="user_pass_confirm">
	<input type="submit" value="REGISTER">
	
	<div>
		<? if($_SESSION['pass_no_match']){
			echo $_SESSION['pass_no_match'];
			unset($_SESSION['pass_no_match']);
		}
		 if($_SESSION['empty_email']){
			echo $_SESSION['empty_email'];
			unset($_SESSION['empty_email']);
		} 
		 if($_SESSION['user_added']){
			echo $_SESSION['user_added'];
			unset($_SESSION['user_added']);
		} 
		 if($_SESSION['empty_pass']){
			echo $_SESSION['empty_pass'];
			unset($_SESSION['empty_pass']);
		} 
		
		?>
	</div>
</form>




<? 
include 'footer.php';
?>