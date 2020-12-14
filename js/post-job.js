// ! FOR POST JOB form

// ! ajax

$(document).ready(function () {

	$('#post-job-form').on('submit', function () {
		var jobTitle = $('#card__post-job-title').val();
		var jobCompanyName = $('#card__post-job-company-name').val();
		//  select INFO
		var jobSalary = $('[name="job_salary"]').find('option:selected').val();
		var jobExp = $('[name="job_exp"]').find('option:selected').val();
		var jobLocation = $('[name="job_location"]').find('option:selected').val();
		var jobDuration = $('[name="job_duration"]').find('option:selected').val();
		var jobWorkload = $('[name="job_workload"]').find('option:selected').val();
// number of tags selected
		var tagsNumberChosen = $('#post-job-form').find('.chosen-choices li').not('.search-field').length;


// ! validation
		// if (jobTitle == '' || jobCompanyName == '' || jobSalary == '0' || jobExp == '0' || jobLocation == '0' || jobDuration == '0' || jobWorkload == '0' || tagsNumberChosen < 3) {
		// 	alert('ALL FIELDS ARE REQUIRED!');
		// 	return false;
		// }

		// else {
		// $.ajax({
		// 	url: 'insert.php',
		// 	type: 'post',
		// 	data: $('#post-job-form').serialize(),
		// 	beforeSend: function () {
		// 		$('#post-job-form').after().fadeIn().html('LOADING TO SERVER');
		// 	},
		// 	success: function (data) {

		// 		$('#post-job-form')[0].reset();
		// 		$('#response').html('HERE IS ');
		// 		alert("DATA SAVED");
		// 	}
		// })
		// }


	})
})

// ! RESET inputs 



$('.post-job-reset-label').on('click', function () {
	// $(".post-job-salary-select").trigger("chosen:updated");
	// $('.search-choice').detach();
	// ??? may cause bugs 
	window.location.href = window.location.href.replace(/[\?#].*|$/, "?restart");

});
// ??? may cause bugs 
$(document).ready(function () {
	if (window.location.search.indexOf('restart') > -1) {
		setTimeout(function () {
			$('#post-job-icon').trigger('click');
		}, 100)
	}
});


// ! TEST delete


// ? TEST delete


// ! old prepend

// $('#post-job-form').on('submit', function (e) {
// 	//
// 	e.preventDefault();
// 	// find title + company name in POST JOB form
// 	var postJobTitle_txt = $('#card__post-job-title').val();
// 	var postJobCompanyName = $('#card__post-job-company-name').val();
// 	// find OPTIONS
// 	var postJobOptionSalary = $('#card-option__post-job-salary').find('.chosen-single span').text();
// 	var postJobOptionExp = $('#card-option__post-job-exp').find('.chosen-single span').text();
// 	var postJobOptionLocation = $('#card-option__post-job-location').find('.chosen-single span').text();
// 	var postJobOptionDuration = $('#card-option__post-job-duration').find('.chosen-single span').text();
// 	var postJobOptionWorkload = $('#card-option__post-job-workload').find('.chosen-single span').text();
// 	// find TAGS
// 	var choice1 = $('.chosen-choices').find('.search-choice:nth-child(1) span').text();
// 	var choice2 = $('.chosen-choices').find('.search-choice:nth-child(2) span').text();
// 	var choice3 = $('.chosen-choices').find('.search-choice:nth-child(3) span').text();
// 	// alert(choice1 + choice2 + choice3);
// 	// ! adding card to site with PREPEND
// 	$('.main-cards-inner').prepend(function () {
// 		// ! if selected tags in POST JOB = 0 alert CHOOSE 3 TAGS
// 		var chosenTags = $('#post-job-form').find('.chosen-choices li').not('.search-field').length;

// 		if (chosenTags < 3) {
// 			// todo I can add more than 3 tags it's bad;)
// 			alert('PLEASE CHOOSE 3 TAGS')
// 			// $('#post-job-form').find('.chosen-search-input').attr('value', 'PLEASE CHOOSE 3 TAGS').attr('style','width: 150px');
// 		}
// 		else {
// 			return '<div class="card card-main"><div class="card__job-title">' + postJobTitle_txt + '</div><div class="card__company-name">' + postJobCompanyName + '</div><ul><li class="card-option__salary">' + postJobOptionSalary + '</li><li class="card-option__exp">' + postJobOptionExp + '</li><li class="card-option__location">' + postJobOptionLocation + '</li><li class="card-option__duration">' + postJobOptionDuration + '</li><li class="card-option__workload">' + postJobOptionWorkload + '</li></ul><div class="card__tags"><div class="card__tag added-tag">' + choice1 + '</div><div class="card__tag added-tag">' + choice2 + '</div><div class="card__tag added-tag">' + choice3 + '</div></div><div class="card__icons card-icons"><img class="delete icon-scale" src="img/icons/delete.svg"><img class="like icon-scale" src="img/icons/like.svg"><img class="apply icon-scale" src="img/icons/apply.svg"></div></div>'
// 		}
// 	});
// 	// ! RESET
// 	$('#post-job-form').trigger("reset");


// 	// ! test



// 	// ? test

// })