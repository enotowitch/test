<?
session_start();
include 'header.php';
?>
<!-- // ! IF USER EXISTS => show LOG OUT -->
<?if($_SESSION['user']): ?>
	<? echo "HELLO {$_SESSION['user']['user_email']}"; ?>
	<a href="log_out.php">LOG OUT</a>
<? endif; ?>


<!--  -->
<!--  -->


<form action="enter_back.php" method="POST">
<!-- // ! IF USER EXISTS => don't show REGISTER -->
<? if(!$_SESSION['user']): ?>
	<a href="register_front.php">Don't have account? SIGN UP</a>
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