// ! FOR POST JOB form


$(document).ready(function () {

	

	// ! number of tags selected
	var tagsNumberChosen = $('#post-job-form').find('.chosen-choices li').not('.search-field').length;

	// 

	// ! preview logo
	$('#card__input-logo').on('change', function (e) {
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
			$('label[for="card-option__post-job-example"]').empty().html('<div>1 pic</div>').css({ 'background': '#6fda44', 'width': '45px' });
		$('#post-job-submit').removeAttr('disabled');
		}
		if (e.target.files.length == 2) {
			$('label[for="card-option__post-job-example"]').empty().html('<div>2 pics</div>').css({ 'background': '#6fda44', 'width': '65px' });
		$('#post-job-submit').removeAttr('disabled');
		}
		if (e.target.files.length == 3) {
			$('label[for="card-option__post-job-example"]').empty().html('<div>3 pics</div>').css({ 'background': '#6fda44', 'width': '100px' });
		$('#post-job-submit').removeAttr('disabled');
		}

	});

	// ! ajax form to insert.php

	$('#post-job-submit').on('click', function (e) {

		e.preventDefault();

		// ! FORM DATA - AKA MULTIPART FORM DATA

		// ! FILES
		var file_data = $('#card__input-logo').prop('files')[0];

		var path_example_1 = $('#card-option__post-job-example').prop('files')[0];
		var path_example_2 = $('#card-option__post-job-example').prop('files')[1];
		var path_example_3 = $('#card-option__post-job-example').prop('files')[2];

		var form_data = new FormData();

		// ! VARS
		// top
		var job_title = $('#card__post-job-title').val();
		var job_company_name = $('#card__post-job-company-name').val();
		//  select INFO
		var job_salary = $('[name="job_salary"]').find('option:selected').val();
		var job_exp = $('[name="job_exp"]').find('option:selected').val();
		var job_location = $('[name="job_location"]').find('option:selected').val();
		var job_duration = $('[name="job_duration"]').find('option:selected').val();
		var job_workload = $('[name="job_workload"]').find('option:selected').val();
		// TAGS
		var tag_name_1 = $('.search-choice:nth-child(1) span').text();
		var tag_name_2 = $('.search-choice:nth-child(2) span').text();
		var tag_name_3 = $('.search-choice:nth-child(3) span').text();

		

		// ! FORM

		// top
		form_data.append('file', file_data);

		form_data.append('path_example_1', path_example_1);
		form_data.append('path_example_2', path_example_2);
		form_data.append('path_example_3', path_example_3);


		form_data.append('job_title', job_title);
		//  select INFO
		form_data.append('job_company_name', job_company_name);
		form_data.append('job_salary', job_salary);
		form_data.append('job_exp', job_exp);
		form_data.append('job_location', job_location);
		form_data.append('job_duration', job_duration);
		form_data.append('job_workload', job_workload);
		// TAGS
		form_data.append('tag_name_1', tag_name_1);
		form_data.append('tag_name_2', tag_name_2);
		form_data.append('tag_name_3', tag_name_3);

		$.ajax({
			url: 'insert.php',
			dataType: 'text',
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,
			type: 'POST',
			success: function (data) {

				window.location.href = 'index.php';

			}
		});

	})

	




// ! old validation
		// if (jobTitle == '' || jobCompanyName == '' || jobSalary == '0' || jobExp == '0' || jobLocation == '0' || jobDuration == '0' || jobWorkload == '0' || tagsNumberChosen < 3) {
		// 	alert('ALL FIELDS ARE REQUIRED!');
		// 	return false;
		// }

		



})







