<? 
include 'header.php';
?>
<!-- !!! TEST-->
<div class="TEST-MAIN-banner" style="height: 300px; background-color: tomato">
	TEST-MAIN-banner
</div>
<!-- ??? TEST-->
<!--  -->
<!-- !!! POST JOB -->

<!-- ??? POST JOB -->
<!--  -->
<!-- !!! PROFILE -->

<!-- ??? PROFILE -->
<!--  -->
<!-- ! SEARCH -->
<?
include 'search.php';
?>
<!-- ? SEARCH -->
<!--  -->
<div class="main-cards-wrapper">
	<div class="jobs-portfolios-radio">
		<div class="jobs-portfolios-radio__jobs radio-btn jobs-portfolios-radio_active">JOBS</div>
		<a href="portfolios.php">
			<div class="jobs-portfolios-radio__portfolios radio-btn">PORTFOLIOS</div>
		</a>
	</div>
	<div class="main-cards-inner">
		<!--  -->
		<!-- ! MAIN CARD php -->
		<!-- ! PHP -->
		<?php

			
			require_once 'DB.php';
			
			$cards = mysqli_query($connect, "SELECT * from `tbl_card`");
			$cards = mysqli_fetch_all($cards, MYSQLI_ASSOC);			
			?>

		<? foreach($cards as $card): ?>

		<div class="card card-main">
			<img class="card__logo" src="<? echo $card["job_img"] ?>" alt="post-job-logo">
			<div class="card__job-title">
				<? echo $card["job_title"] ?>
			</div>
			<div class="card__company-name">
				<? echo $card["job_company_name"] ?>
			</div>
			<!-- ! card-option -->
			<ul>
				<li class="card-option__salary">
					<? echo $card["job_salary"] ?>
				</li>
				<li class="card-option__exp">
					<? echo $card["job_exp"] ?>
				</li>
				<li class="card-option__location">
					<? echo $card["job_location"] ?>
				</li>
				<li class="card-option__duration">
					<? echo $card["job_duration"] ?>
				</li>
				<li class="card-option__workload">
					<? echo $card["job_workload"] ?>
				</li>
				<li class="card-option__example card-option__example_main-card-example">Example</li>
				<div class="card card-slick" hidden>
					<img src="" data-lazy="<? echo $card["job_example_1"] ?>">
					<img src="" data-lazy="<? echo $card["job_example_2"] ?>">
					<img src="" data-lazy="<? echo $card["job_example_3"] ?>">
				</div>
			</ul>
			<!-- ! card-tags -->
			<div class="card__tags">
				<div class="card__tag">
					<? echo $card["job_tag_1"] ?>
				</div>
				<div class="card__tag">
					<? echo $card["job_tag_2"] ?>
				</div>
				<div class="card__tag">
					<? echo $card["job_tag_3"] ?>
				</div>
			</div>
			<!-- ! card-icons -->
			<div class="card__icons card-icons">
				<a style="position: absolute; right: 52px;" href="update.php?id=<? echo $card["job_post_id"]
					?></a>">update</a>
	<!-- // ! AJAX delete form W/0 SUBMIT BUTTON-->
				<form>
					<input type="hidden" name="hidden_id_delete" value="<? echo $card["job_post_id"] ?>">
					<img class="delete icon-scale delete-btn" src="img/icons/delete.svg" alt="delete">
				</form>

				<img class="like icon-scale" src="img/icons/like.svg" alt="like">
				<img class="apply icon-scale" src="img/icons/apply.svg" alt="apply">
			</div>
		</div>

		<? endforeach; ?>


		<?
			$connect-> close();
			?>
		<!-- ? PHP -->
		<!-- ? MAIN CARD php -->

		<!--  -->
	</div>
</div>
<!--  -->
<? 
	include 'footer.php';
	?>

