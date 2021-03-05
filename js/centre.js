// Sign in page
function nextPin(element) {
	$(element).next().focus();
}

function validPin() {
	valid = true;
	$('.pin-code').children().each(function() {
		if (!$(this).val()) {
			$('#passwordHelpBlock').addClass('invalid-pin');
			valid = false;
		} else {
			$('#passwordHelpBlock').addClass('valid-pin');
		}
	});
	if (!valid) {
		$('#passwordHelpBlock').html('Pin is incomplete.');
		$('#passwordHelpBlock').removeClass('valid-pin');
		$('#passwordHelpBlock').addClass('invalid-pin');
	} else {
		$('#passwordHelpBlock').html('Looks good!');
		$('#passwordHelpBlock').removeClass('invalid-pin');
		$('#passwordHelpBlock').addClass('valid-pin');
	}
}

// Dashboard
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
		if (to_nav_to_bar.attr('id') == 'vaccine-notifications') {
			$('.vaccine-notifications').fadeIn();
		} else if (to_nav_to_bar.attr('id') == 'vaccine-appointments') {
			$('.vaccine-appointments').fadeIn();
		} else if (to_nav_to_bar.attr('id') == 'details') {
			$('.details').fadeIn();
		}
	});
}