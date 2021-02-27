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