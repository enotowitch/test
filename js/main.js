jQuery(document).ready(function () {

	var brandColor = '#6fda44';
	var grayLightColor = '#dedede';




	// ! search show
	$('#search-icon, #search-icon2').on('click', function () {
		$('.TEST-MAIN-banner').hide();
		$('.search').show();
	});
		// ! switch jobs and portfolios
	$('.radio-btn').on('click', function(){
		$('.radio-btn').removeClass('jobs-portfolios-radio_active');
		$(this).addClass('jobs-portfolios-radio_active');
	});



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

});
