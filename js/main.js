jQuery(document).ready(function () {

	var brandColor = '#6fda44';
	var grayLightColor = '#dedede';

	// ! post-job show
	// $('#post-job-icon, #post-job-icon2').on('click', (function () {
	// 	$('#profile').hide();
	// 	$('.TEST-MAIN-banner').hide();
	// 	$('.search').hide();
	// 	$('#post-job').show();
	// }))
	// ! profile show
	// $('#profile-icon, #profile-icon2').on('click', (function () {
	// 	$('.two-cards-flex__employer').hide();
	// 	$('.TEST-MAIN-banner').hide();
	// 	$('.search').hide();
	// 	$('#post-job').hide();
	// 	$('#profile').show();
	// 	$('.two-cards-flex__applicant').show();
	// 	$('.app-emp-radio__applicant').css({ 'color': '#fff', 'background-color': brandColor });
	// 	$('.app-emp-radio__employer').css({ 'color': '#000', 'background-color': grayLightColor });
	// }))
	// ! search show
	$('#search-icon, #search-icon2').on('click', function () {
		$('.TEST-MAIN-banner').hide();
		$('#post-job').hide();
		$('#profile').hide();
		$('.search').show();
	})
	// todo

	// // ! radio__employer
	// $('.app-emp-radio__employer').on('click', function () {
	// 	$('.two-cards-flex__employer').show();
	// 	$('.two-cards-flex__applicant').hide();
	// 	$(this).css({ 'color': '#fff', 'background-color': brandColor });
	// 	$('.app-emp-radio__applicant').css({ 'color': '#000', 'background-color': grayLightColor });
	// })
	// // ! radio__applicant
	// $('.app-emp-radio__applicant').on('click', function () {
	// 	$('.two-cards-flex__applicant').show();
	// 	$('.two-cards-flex__employer').hide();
	// 	$(this).css({ 'color': '#fff', 'background-color': brandColor });
	// 	$('.app-emp-radio__employer').css({ 'color': '#000', 'background-color': grayLightColor });
	// })
	// ! card hide
	// $(document).on('click', '.delete', function () {
	// 	$(this).closest('.card').hide();
	// })
	// 
	// ! chosen

	$(".post-job-tags-select").chosen({ 'width': '245px', 'max_selected_options': '3', });
	$(".post-job-country-select").chosen({ 'width': '100px', 'max_selected_options': '1', });
	$(".post-job-salary-select").chosen({ 'width': '75px', 'max_selected_options': '1', });
	$(".post-job-exp-select").chosen({ 'width': '95px', 'max_selected_options': '1', });
	$(".post-job-duration-select").chosen({ 'width': '75px', 'max_selected_options': '1', });
	$(".post-job-workload-select").chosen({ 'width': '95px', 'max_selected_options': '1', });





	// ! delete







	// TODO
	// ! input-logo-label hover



});
