<?php
	// Get token if it exists
    if (!empty($_GET['token'])){
        $token = $_GET['token'];
    } else {
        $token = "";
    }

	// Check if user exists already
	if (!empty($_GET['state'])) {
		$state = $_GET['state'];

		if ($state == 'exists') {
			$header_txt = "This account already exists!";
			$message = '<div class="alert alert-danger">A user account with this email already exists. Please log in as that user or create a new account.</div>';
		} elseif ($state == 'success') {
			$header_txt = "You have now registered!";
			$message = '<div class="alert alert-success">You will receive an email with further instructions to activate your account.</div><p>For now though, you can click <a href="../verification.php?token='.$token.'">this link</a> to activate your account.</p>';
		}
	} else {
		$header_txt = "A big whoopsie has occured!";
		$message = '<div class="alert alert-danger">Please contact the support team.</div>';
	}
?>