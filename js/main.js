jQuery(document).ready(function () {

	var brandColor = '#6fda44';
	var grayLightColor = '#dedede';

	// ! post-job show
	$('#post-job-icon, #post-job-icon2').on('click', (function () {
		$('#profile').hide();
		$('.TEST-MAIN-banner').hide();
		$('.search').hide();
		$('#post-job').show();
	}))
	// ! profile show
	$('#profile-icon, #profile-icon2').on('click', (function () {
		$('.two-cards-flex__employer').hide();
		$('.TEST-MAIN-banner').hide();
		$('.search').hide();
		$('#post-job').hide();
		$('#profile').show();
		$('.two-cards-flex__applicant').show();
		$('.app-emp-radio__applicant').css({ 'color': '#fff', 'background-color': brandColor });
		$('.app-emp-radio__employer').css({ 'color': '#000', 'background-color': grayLightColor });
	}))
	// ! search show
	$('#search-icon, #search-icon2').on('click', function () {
		$('.TEST-MAIN-banner').hide();
		$('#post-job').hide();
		$('#profile').hide();
		$('.search').show();
	})
	// todo

	// ! radio__employer
	$('.app-emp-radio__employer').on('click', function () {
		$('.two-cards-flex__employer').show();
		$('.two-cards-flex__applicant').hide();
		$(this).css({ 'color': '#fff', 'background-color': brandColor });
		$('.app-emp-radio__applicant').css({ 'color': '#000', 'background-color': grayLightColor });
	})
	// ! radio__applicant
	$('.app-emp-radio__applicant').on('click', function () {
		$('.two-cards-flex__applicant').show();
		$('.two-cards-flex__employer').hide();
		$(this).css({ 'color': '#fff', 'background-color': brandColor });
		$('.app-emp-radio__employer').css({ 'color': '#000', 'background-color': grayLightColor });
	})
	// ! card hide
	$(document).on('click', '.delete', function () {
		$(this).closest('.card').hide();
	})
	// 
	// ! chosen

	$(".post-job-tags-select").chosen({ 'width': '245px', 'max_selected_options': '3', });
	$(".post-job-country-select").chosen({ 'width': '100px', 'max_selected_options': '1', });
	$(".post-job-salary-select").chosen({ 'width': '75px', 'max_selected_options': '1', });
	$(".post-job-exp-select").chosen({ 'width': '95px', 'max_selected_options': '1', });
	$(".post-job-duration-select").chosen({ 'width': '75px', 'max_selected_options': '1', });
	$(".post-job-workload-select").chosen({ 'width': '95px', 'max_selected_options': '1', });





	// ! delete

	// ! FOR POST JOB form


	$('#post-job-form').on('submit', function (e) {
		//
		e.preventDefault();
		// find title + company name in POST JOB form
		var postJobTitle = $('#card__post-job-title').val();
		var postJobCompanyName = $('#card__post-job-company-name').val();
		// find OPTIONS
		var postJobOptionSalary = $('#card-option__post-job-salary').find('.chosen-single span').text();
		var postJobOptionExp = $('#card-option__post-job-exp').find('.chosen-single span').text();
		var postJobOptionLocation = $('#card-option__post-job-location').find('.chosen-single span').text();
		var postJobOptionDuration = $('#card-option__post-job-duration').find('.chosen-single span').text();
		var postJobOptionWorkload = $('#card-option__post-job-workload').find('.chosen-single span').text();
		// find TAGS
		var choice1 = $('.chosen-choices').find('.search-choice:nth-child(1) span').text();
		var choice2 = $('.chosen-choices').find('.search-choice:nth-child(2) span').text();
		var choice3 = $('.chosen-choices').find('.search-choice:nth-child(3) span').text();
		// alert(choice1 + choice2 + choice3);
		$('.main-cards-inner').prepend(function () {
			// ! if selected tags in POST JOB = 0 alert CHOOSE 3 TAGS
			var chosenTags = $('#post-job-form').find('.chosen-choices li').not('.search-field').length;
			console.log(chosenTags);
			if (chosenTags < 3) {
				alert('PLEASE CHOOSE 3 TAGS')
				// $('#post-job-form').find('.chosen-search-input').attr('value', 'PLEASE CHOOSE 3 TAGS').attr('style','width: 150px');
			}
			else {
				return '<div class="card card-main"><div class="card__job-title">' + postJobTitle + '</div><div class="card__company-name">' + postJobCompanyName + '</div><ul><li class="card-option__salary">' + postJobOptionSalary + '</li><li class="card-option__exp">' + postJobOptionExp + '</li><li class="card-option__location">' + postJobOptionLocation + '</li><li class="card-option__duration">' + postJobOptionDuration + '</li><li class="card-option__workload">' + postJobOptionWorkload + '</li></ul><div class="card__tags"><div class="card__tag added-tag">' + choice1 + '</div><div class="card__tag added-tag">' + choice2 + '</div><div class="card__tag added-tag">' + choice3 + '</div></div><div class="card__icons card-icons"><img class="delete icon-scale" src="img/icons/delete.svg"><img class="like icon-scale" src="img/icons/like.svg"><img class="apply icon-scale" src="img/icons/apply.svg"></div></div>'
			}
		});
		// RESET
		$('#post-job-form').trigger("reset");
		// ! test


		// ? test

	})





	// TODO
	// ! input-logo-label hover



});
