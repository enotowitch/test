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
	<section hidden class="search">
		<div class="two-cards-bg">
			<div class="search__body">
				<!--  -->
				<div class="search__topics">
					<!--  -->
					<!-- ! search__design -->
					<div class="search__topic">
						<span>DESIGN</span>
					</div>
					<!-- ? search__design -->
					<!--  -->
					<!-- ! search__dev -->
					<div class="search__topic">
						<span>DEV</span>
					</div>
					<!-- ? search__dev -->
					<!-- ! search__marketing -->
					<div class="search__topic">
						<span>MARKETING</span>
					</div>
					<!-- ? search__marketing -->
					<!-- ! search__writing -->
					<div class="search__topic">
						<span>WRITING</span>
					</div>
					<!-- ? search__writing -->
					<!-- ! search__admin -->
					<div class="search__topic">
						<span>ADMIN</span>
					</div>
					<!-- ? search__admin -->
					<!-- ! search__legal -->
					<div class="search__topic">
						<span>LEGAL</span>
					</div>
					<!-- ? search__legal -->
				</div>
				<!--  -->
				<!--  -->
				<!-- todo TAGS -->
				<!--  -->
				<!--  -->
				<!-- ! search__tags DESIGN-->
				<div class="search__tags search__tags_design">
					<div class="card__tag card__tag_active">All DESIGN</div>
					<div class="card__tag">animation</div>
					<div class="card__tag">anime</div>
					<div class="card__tag">art</div>
					<div class="card__tag">brand</div>
					<div class="card__tag">CAD</div>
					<div class="card__tag">cartoonist</div>
					<div class="card__tag">character</div>
					<div class="card__tag">children's</div>
					<div class="card__tag">comic</div>
					<div class="card__tag">creative</div>
					<div class="card__tag">design</div>
					<div class="card__tag">direction</div>
					<div class="card__tag">editorial</div>
					<div class="card__tag">fashion</div>
					<div class="card__tag">graphic</div>
					<div class="card__tag">illustration</div>
					<div class="card__tag">img edit</div>
					<div class="card__tag">layout</div>
					<div class="card__tag">motion</div>
					<div class="card__tag">photo</div>
					<div class="card__tag">presentation</div>
					<div class="card__tag">realistic</div>
					<div class="card__tag">social</div>
					<div class="card__tag">storyboard</div>
					<div class="card__tag">UX / UI</div>
					<div class="card__tag">video</div>
					<div class="card__tag">VR / AR</div>
				</div>
				<!-- ? search__tags DESIGN-->
				<!--  -->
				<!-- ! search__tags DEV-->
				<div class="search__tags search__tags_dev">
					<div class="card__tag">All DEV</div>
					<div class="card__tag">QA</div>
					<div class="card__tag">CMS</div>
					<div class="card__tag">database</div>
					<div class="card__tag">desktop</div>
					<div class="card__tag">ecommerce</div>
					<div class="card__tag">full stack</div>
					<div class="card__tag">game dev</div>
					<div class="card__tag">mobile</div>
					<div class="card__tag">product</div>
					<div class="card__tag">management</div>
					<div class="card__tag">prototype</div>
					<div class="card__tag">software</div>
					<div class="card__tag">research</div>
					<div class="card__tag">front-end</div>
					<div class="card__tag">back-End</div>
				</div>
				<!-- ? search__tags DEV-->
				<!--  -->
				<!--  -->
				<div class="search__input">
					<label for="search__input">
						<svg class="search__input-icon" width="19" height="18" viewBox="0 0 19 18" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M5.57157 11.7143C4.64363 10.4471 4.143 8.77669 4.143 7.08931C4.143 2.86533 7.11548 0 11.3394 0C15.5634 0 18.4287 2.86533 18.4287 7.08931C18.4287 11.3133 15.5634 14.2857 11.3394 14.2857C9.65207 14.2857 7.98161 13.7851 6.71443 12.8571L1.57157 18L0.428715 16.8571L5.57157 11.7143ZM11.3394 12.3929C14.264 12.3929 16.643 10.0139 16.643 7.08931C16.643 4.16474 14.264 1.78574 11.3394 1.78574C8.41488 1.78574 6.0359 4.16474 6.0359 7.08931C6.0359 10.0139 8.41492 12.3929 11.3394 12.3929Z" />
						</svg>
					</label>
					<input id="search__input" type="text">
				</div>
			</div>
		</div>
	</section>
	<!-- ? SEARCH -->
	<!--  -->
	<div class="main-cards-wrapper">
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
				<img class="card__logo" src="https://tinyurl.com/yyccy644" alt="worker-logo">
				<div class="card__job-title"><? echo $card["job_title"] ?></div>
				<div class="card__company-name"><? echo $card["job_company_name"] ?></div>
				<!-- ! card-option -->
				<ul>
					<li class="card-option__salary"><? echo $card["job_salary"] ?></li>
					<li class="card-option__exp"><? echo $card["job_exp"] ?></li>
					<li class="card-option__location"><? echo $card["job_location"] ?></li>
					<li class="card-option__duration"><? echo $card["job_duration"] ?></li>
					<li class="card-option__workload"><? echo $card["job_workload"] ?></li>
					<li class="card-option__example card-option__example_main-card-example">Example</li>
				</ul>
				<!-- ! card-tags -->
				<div class="card__tags">
					<div class="card__tag"><? echo $card["job_tag_1"] ?></div>
					<div class="card__tag"><? echo $card["job_tag_2"] ?></div>
					<div class="card__tag"><? echo $card["job_tag_3"] ?></div>
				</div>
				<!-- ! card-icons -->
				<div class="card__icons card-icons">
					<a style="position: absolute; right: 52px;" href="update.php?id=<? echo $card["job_post_id"] ?>">update</a>
					<a href="delete.php?id=<? echo $card["job_post_id"] ?>"><img class="delete icon-scale" src="img/icons/delete.svg" alt="delete"></a>
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
			<!-- ! MAIN CARD html EXAMPLE-->
			<div class="card card-main">
				<img class="card__logo" src="https://tinyurl.com/yyccy644" alt="worker-logo">
				<div class="card__job-title">Job title duis ad fugiat do do adipisic</div>
				<div class="card__company-name">Company name id do deserunt officia qui velit non pariatur ut.</div>
				<!-- ! card-option -->
				<ul>
					<li class="card-option__salary">$95k-125k</li>
					<li class="card-option__exp">5-10 years</li>
					<li class="card-option__location">Worldwide</li>
					<li class="card-option__duration">Permanent</li>
					<li class="card-option__workload">150-200 h/mo</li>
					<li class="card-option__example card-option__example_main-card-example">Example</li>
				</ul>
				<!-- ! card-tags -->
				<div class="card__tags">
					<div class="card__tag">animation</div>
					<div class="card__tag">presentation</div>
					<div class="card__tag">illustration</div>
				</div>
				<!-- ! card-icons -->
				<div class="card__icons card-icons">
					<img class="delete icon-scale" src="img/icons/delete.svg" alt="delete">
					<img class="like icon-scale" src="img/icons/like.svg" alt="like">
					<img class="apply icon-scale" src="img/icons/apply.svg" alt="apply">
				</div>
			</div>
			<!-- ? MAIN CARD html EXAMPLE -->
			<!--  -->
		</div>
	</div>
	<!--  -->
	<? 
	include 'footer.php';
	?>