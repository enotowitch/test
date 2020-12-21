// ! POST JOB form

// ! ajax

$(document).ready(function () {

	
// ! preview logo
$(document).on('change','#card__input-logo' ,function (e) {
	var preview = URL.createObjectURL(e.target.files[0]);
	$('label[for="card__input-logo"]').html('<img class="card__logo" src="' + preview + '" alt="NO">');
	$('label[for="card__input-logo"]').css({ 'border': 'none' });
})

// ! preview examples - IF > 3 examples disable FORM submit
$('#card-option__post-job-example').on('change', function (e) {
	if (e.target.files.length > 3) {
		$('label[for="card-option__post-job-example"]').empty().html('<div>3 pics max!</div>').css({ 'background': 'tomato', 'width': '100px' });
		$('#post-job-submit').attr('disabled', 'disabled');
	}
	if (e.target.files.length == 1) {
		$('label[for="card-option__post-job-example"]').empty().html('<div>1/3 pic</div>').css({ 'background': '#6fda44', 'width': '49px' });
	$('#post-job-submit').removeAttr('disabled');
	}
	if (e.target.files.length == 2) {
		$('label[for="card-option__post-job-example"]').empty().html('<div>2/3 pics</div>').css({ 'background': '#6fda44', 'width': '69px' });
	$('#post-job-submit').removeAttr('disabled');
	}
	if (e.target.files.length == 3) {
		$('label[for="card-option__post-job-example"]').empty().html('<div>3/3 pics</div>').css({ 'background': '#6fda44', 'width': '100px' });
	$('#post-job-submit').removeAttr('disabled');
	}

});




	// ! OLD
// number of tags selected
		var tagsNumberChosen = $('#post-job-form').find('.chosen-choices li').not('.search-field').length;


// ! validation
		// if (jobTitle == '' || jobCompanyName == '' || jobSalary == '0' || jobExp == '0' || jobLocation == '0' || jobDuration == '0' || jobWorkload == '0' || tagsNumberChosen < 3) {
		// 	alert('ALL FIELDS ARE REQUIRED!');
		// 	return false;
		// }

		


	})


