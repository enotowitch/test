// ! PROFILE

$(document).ready(function () {

	$('.profile-employer-card__label').click(function () {
		$('.profile-employer-card__label').removeClass('profile-employer-card__label_active');
		$(this).addClass('profile-employer-card__label_active');
	});

	// ! delete

	// ! FOR POST JOB



	$('.post-job-reset-label').on('click', function () {
		$('.search-choice').detach();

	})
	// ! delete



});





