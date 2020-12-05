<?
session_start();
include 'header.php';
?>




<form action="register_back.php" method="POST">
<a href="enter.php">Already have account? SING IN</a>
<br>
<br>
<br>
<!-- Email -->
	<label for="user_email">User Email</label>
	<input class="reg-input" type="email" name="user_email" id="user_email">
	<!-- Password -->
	<label for="user_pass">Password</label>
	<input class="reg-input" type="password" name="user_pass" id="user_pass">
	<!-- Confirm Password -->
	<label for="user_pass_confirm">Confirm Password</label>
	<input class="reg-input" type="password" name="user_pass_confirm" id="user_pass_confirm">
	<input class="reg-input-submit" type="submit" value="SIGN UP">
	
	<div>
		<? if($_SESSION['validation_msg']){
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