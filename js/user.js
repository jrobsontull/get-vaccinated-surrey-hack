function navigate(nav_to_bar) {
	to_nav_to_bar = $(nav_to_bar);
	// Color nav bar
	to_nav_to_bar.parent().children().each(function () {
		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected');
		}
	});
	to_nav_to_bar.addClass('selected');

	// Navigate
	current_display_blk = $(".options-display").children().each(function () {
		if ($(this).css('display') == "block") {
			return $(this);
		}
	});
	
	current_display_blk.fadeOut(function() {
		if (to_nav_to_bar.attr('id') == 'personal') {
			$('.personal').fadeIn();
		} else if (to_nav_to_bar.attr('id') == 'vaccine-centre') {
			$('.vaccine-centre').fadeIn();
		} else if (to_nav_to_bar.attr('id') == 'vaccine-slot') {
			$('.vaccine-slot').fadeIn();
		} else if (to_nav_to_bar.attr('id') == 'change-password') {
			$('.change-password').fadeIn();
		}
	});
}

function confirmDelete() {
	return confirm("Are you sure you want to delete your account?");
}