<?
session_start();
include 'header.php';
?>
<!-- // ! IF USER EXISTS => show LOG OUT -->
<?if($_SESSION['user']): ?>
	<? echo "HELLO {$_SESSION['user']['user_email']}"; ?>
	<a href="log_out.php">LOG OUT</a>
<? endif; ?>
<!-- // ! IF NO USER => show SIGN IN -->
<?if(!$_SESSION['user']): ?>
	<a href="enter.php">SIGN IN</a>
<? endif; ?>
<!-- // ! IF NO USER => show REGISTER -->
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
<!-- // ! IF USER EXISTS => don't show REGISTER -->
<? if(!$_SESSION['user']): ?>
	<a href="register_front.php">Don't have account? REGISTER</a>
<? endif; ?>

<br>
<br>
<br>
<!-- // ! Email -->
	<label for="user_email">User Email</label>
	<input type="email" name="user_email" id="user_email">
<!-- // ! Password -->
	<label for="user_pass">Password</label>
	<input type="password" name="user_pass" id="user_pass">

	<input type="submit" value="SIGN IN">
	
	<div>
		<? 
		if($_SESSION['validation_msg']){
			echo $_SESSION['validation_msg'];
			unset($_SESSION['validation_msg']);
		}
		?>
	</div>
</form>


<!-- ! CURRENT HEADER STYLE  -->
<style>
	#sign-in-icon,#sign-in-icon2{
		fill: #6fda44;
	}
	.sign-in{
		color: #6fda44;
	}
	</style>
	<!-- ? CURRENT HEADER STYLE  -->

<? 
include 'footer.php';
?>