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
		<? if($_SESSION['validation_msg']){
			echo $_SESSION['validation_msg'];
			unset($_SESSION['validation_msg']);
		}

		
		?>
	</div>
</form>




<? 
include 'footer.php';
?>