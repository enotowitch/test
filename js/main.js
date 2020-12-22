jQuery(document).ready(function () {

	var brandColor = '#6fda44';
	var grayLightColor = '#dedede';




	// ! search show
	$('#search-icon, #search-icon2').on('click', function () {
		$('.TEST-MAIN-banner').hide();
		$('.search').show();
	});
	// ! switch jobs and portfolios
	$('.radio-btn').on('click', function () {
		$('.radio-btn').removeClass('jobs-portfolios-radio_active');
		$(this).addClass('jobs-portfolios-radio_active');
	});

	// ! chosen

	$(".post-job-tags-select").chosen({ 'width': '245px', 'max_selected_options': '3', });
	$(".post-job-country-select").chosen({ 'width': '100px', 'max_selected_options': '1', });
	$(".post-job-salary-select").chosen({ 'width': '75px', 'max_selected_options': '1', });
	$(".post-job-exp-select").chosen({ 'width': '95px', 'max_selected_options': '1', });
	$(".post-job-duration-select").chosen({ 'width': '75px', 'max_selected_options': '1', });
	$(".post-job-workload-select").chosen({ 'width': '95px', 'max_selected_options': '1', });

	// ! slick

	$(document).on('click', '.card-option__example_main-card-example', function () {
		$(this).next('.card-slick').show().slick({ lazyLoad: 'ondemand', infinite: true, speed: 500, fade: true, cssEase: 'linear' }).append('<img class="icon-scale close-slick" src="img/icons/delete.svg">');
	});

	$(document).on('click', '.close-slick', function () {
		$(this).closest('.card-slick').hide();
	});

	// ! AJAX DELETE 

	$(document).on('click', '.delete-btn', function (e) {
		e.preventDefault();

		var this_card = $(e.target).closest('.card');

		var hidden_id_delete = this_card.find('input[name="hidden_id_delete"]').val();
var user_id = this_card.find('#user_id_index').val();
		

		$.ajax({
			url: 'delete.php',
			type: 'POST',
			data: { hidden_id_delete:hidden_id_delete,user_id:user_id },
			success: function (data) {

				this_card.empty().append('<div class="animate-delete"></div>');
				this_card.find('.animate-delete').animate({ 'width': '100%' }, 100);

				setTimeout(function () {
					window.location.href = 'index.php';
				}, 500);

			},
		});
	})

		$(document).on('click', '.post-job-reset-label', function () {
			document.location.reload();
		})


	// ! update AJAX on the SAME PAGE

$(document).on('click', '.update-btn', function(e){
	// e.preventDefault();

	var hidden_id_update = $(e.target).closest('.card').find('input[name="hidden_id_update"]').val();
	var this_card = $(e.target).closest('.card');

	$('.card').hide();
	$('.two-cards-flex__cross').hide();
	$('.two-cards-flex__arrow').hide();

	this_card.show();
	this_card.css({'box-shadow':'1px 4px 5px rgba(111, 218, 68, .5), 1px -2px 5px rgba(111, 218, 68, .5)', 'font-style':'italic'})

		$.ajax({
		url: "update_same_page.php",
		type: "POST",
		dataType: "text",
		data: {hidden_id_update:hidden_id_update},
		success: function (data) {

			this_card.html(data);
		},
	});


});



});
