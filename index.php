<!doctype html>
<html lang="en">
<head>
 	<meta http-equiv="cache-control" content="no-cache" />
 	<meta http-equiv="pragma" content="no-cache" />
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="js/index.js"></script>
 	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

 	<link href="assets/css/index.css" rel="stylesheet">
 	<link href="assets/css/footer.css" rel="stylesheet">
 	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
 	
 	<title>Get Vaccinated</title>
</head>
<body>
<div class="container-div">
<div class="vertical-center">

<div class="intro-text">
	<div id="intro-header">
		<div class="intro-title"><span class="intro-blue">Get</span>Vaccinated</div>
		<p id="short-description">We provide a service for you to fill in for cancelled appointments or make use of surplus vaccine. Register now. Save lives.</p>
	</div>
	<div id="explanation">
		<div class="how-title">How it works</div>
		<ol>
			<li>Register for an account with us.</li>
			<li>Select your local vaccine centre.</li>
			<li>We'll notify you by email or mobile when there is vaccine availble by short notice.</li>
		</ol>
	</div>
</div>

<div class="central-panel">
	<div id="register-div">
		<form id="registration" method="post" action="">
			<div class="center-row-item">
				<div class="box-header">Sign up</div>
			</div>
			<div id="register-1">
				<div class="form-row form-floating">
					<input type="email" class="form-control" aria-describedby="emailHelp" name="email-first-page" id="floatingEmail" placeholder="name@example.com" onblur="validateLostFocus(this)">
					<label for="floatingEmail">Email address</label>
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
								<?php echo $email_exist; ?>
				</div>
				<div class="form-row form-floating">
		    		<input type="password" class="form-control col-6" id="floatingPass" aria-describedby="passwordHelpBlock" name="password-first-page" placeholder="Password" onblur="validateLostFocus(this)">
		    		<label for="floatingPass">Password</label>
		    		<div id="passwordHelpBlock" class="form-text">
		    			Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		    		</div>
				</div>
				<div class="center-row-item form-row">
					<button type="button" class="btn btn-outline-primary btn-block" onclick="nextRegisterDetails()">Next</button>
				</div>
			</div>
			<div id="register-2">
				<div class="form-row">
					<label>First name</label>
					<input type="text" name="first-name" class="form-control" id="firstName" onblur="validateLostFocus(this)">
				</div>
				<div class="form-row">
					<label>Last name</label>
					<input type="text" name="last-name" class="form-control" id="lastName" onblur="validateLostFocus(this)">
				</div>
				<div class="form-row form-line-break"></div>
				<div class="form-row">
					<label class="">Address</label>
					<input type="text" class="form-control" name="address-l1" aria-describedby="line-1" onblur="validateLostFocus(this)">
					<div id="line-1" class="form-text">
		    			Street address
		    		</div>
				</div>
				<div class="form-row">
					<input type="text" class="form-control" name="address-l2" aria-describedby="line-2">
					<div id="line-2" class="form-text">
		    			Apartment, suite , unit, building, floor, etc.
		    		</div>
				</div>
				<div class="form-row no-wrap">
					<div class="form-col2">
						<input type="text" class="form-control" name="city" aria-describedby="city-help" onblur="validateLostFocus(this)">
						<div id="city-help" class="form-text">
			    			City
			    		</div>
		    		</div>
		    		<div class="form-col2">
						<select class="form-select" name="county" aria-describedby="county-help">
							<option selected disabled>Please select</option>
							<optgroup label="England">
							    <option>Bedfordshire</option>
							    <option>Berkshire</option>
							    <option>Bristol</option>
							    <option>Buckinghamshire</option>
							    <option>Cambridgeshire</option>
							    <option>Cheshire</option>
							    <option>City of London</option>
							    <option>Cornwall</option>
							    <option>Cumbria</option>
							    <option>Derbyshire</option>
							    <option>Devon</option>
							    <option>Dorset</option>
							    <option>Durham</option>
							    <option>East Riding of Yorkshire</option>
							    <option>East Sussex</option>
							    <option>Essex</option>
							    <option>Gloucestershire</option>
							    <option>Greater London</option>
							    <option>Greater Manchester</option>
							    <option>Hampshire</option>
							    <option>Herefordshire</option>
							    <option>Hertfordshire</option>
							    <option>Isle of Wight</option>
							    <option>Kent</option>
							    <option>Lancashire</option>
							    <option>Leicestershire</option>
							    <option>Lincolnshire</option>
							    <option>Merseyside</option>
							    <option>Norfolk</option>
							    <option>North Yorkshire</option>
							    <option>Northamptonshire</option>
							    <option>Northumberland</option>
							    <option>Nottinghamshire</option>
							    <option>Oxfordshire</option>
							    <option>Rutland</option>
							    <option>Shropshire</option>
							    <option>Somerset</option>
							    <option>South Yorkshire</option>
							    <option>Staffordshire</option>
							    <option>Suffolk</option>
							    <option>Surrey</option>
							    <option>Tyne and Wear</option>
							    <option>Warwickshire</option>
							    <option>West Midlands</option>
							    <option>West Sussex</option>
							    <option>West Yorkshire</option>
							    <option>Wiltshire</option>
							    <option>Worcestershire</option>
							</optgroup>
							<optgroup label="Wales">
							    <option>Anglesey</option>
							    <option>Brecknockshire</option>
							    <option>Caernarfonshire</option>
							    <option>Carmarthenshire</option>
							    <option>Cardiganshire</option>
							    <option>Denbighshire</option>
							    <option>Flintshire</option>
							    <option>Glamorgan</option>
							    <option>Merioneth</option>
							    <option>Monmouthshire</option>
							    <option>Montgomeryshire</option>
							    <option>Pembrokeshire</option>
							    <option>Radnorshire</option>
							</optgroup>
							<optgroup label="Scotland">
							    <option>Aberdeenshire</option>
							    <option>Angus</option>
							    <option>Argyllshire</option>
							    <option>Ayrshire</option>
							    <option>Banffshire</option>
							    <option>Berwickshire</option>
							    <option>Buteshire</option>
							    <option>Cromartyshire</option>
							    <option>Caithness</option>
							    <option>Clackmannanshire</option>
							    <option>Dumfriesshire</option>
							    <option>Dunbartonshire</option>
							    <option>East Lothian</option>
							    <option>Fife</option>
							    <option>Inverness-shire</option>
							    <option>Kincardineshire</option>
							    <option>Kinross</option>
							    <option>Kirkcudbrightshire</option>
							    <option>Lanarkshire</option>
							    <option>Midlothian</option>
							    <option>Morayshire</option>
							    <option>Nairnshire</option>
							    <option>Orkney</option>
							    <option>Peeblesshire</option>
							    <option>Perthshire</option>
							    <option>Renfrewshire</option>
							    <option>Ross-shire</option>
							    <option>Roxburghshire</option>
							    <option>Selkirkshire</option>
							    <option>Shetland</option>
							    <option>Stirlingshire</option>
							    <option>Sutherland</option>
							    <option>West Lothian</option>
							    <option>Wigtownshire</option>
							</optgroup>
							<optgroup label="Northern Ireland">
							    <option>Antrim</option>
							    <option>Armagh</option>
							    <option>Down</option>
							    <option>Fermanagh</option>
							    <option>Londonderry</option>
							    <option>Tyrone</option>
							</optgroup>
						</select>
						<div id="county-help" class="form-text">
			    			County
			    		</div>
		    		</div>
				</div>
				<div class="form-row no-wrap">
					<div class="form-col2">
						<input type="text" class="form-control" name="postcode" aria-describedby="postcode-help" onblur="validateLostFocus(this)">
						<div id="postcode-help" class="form-text">
			    			Postcode
			    		</div>
		    		</div>
		    		<div class="form-col2">
						<input type="text" class="form-control" name="country" aria-describedby="country-help" onblur="validateLostFocus(this)">
						<div id="country-help" class="form-text">
			    			Country
			    		</div>
		    		</div>
				</div>
				<div class="form-row form-line-break"></div>
				<div class="form-row">
					<label class="">Mobile</label>
					<input type="tel" name="mobile" class="form-control" id="mobile" onblur="validateLostFocus(this)">
				</div>
				<div class="form-row">
					<label class="">Birth date</label>
					<input type="date" name="dob" class="form-control" id="dob" onblur="validateLostFocus(this)">
				</div>
				<div class="center-row-item form-row">
					<button type="button" class="btn btn-outline-primary btn-block" onclick="prevRegisterDetails()">Previous</button>
					<button type="button" class="btn btn-outline-primary btn-block" onclick="nextRegisterDetails()">Next</button>
				</div>
			</div>
			<div id="register-3">
				<!--For POST-->
				<input type="hidden" name="email-hidden">
				<input type="hidden" name="password-hidden">
				<input type="hidden" name="f-name-hidden">
				<input type="hidden" name="l-name-hidden">
				<input type="hidden" name="address-l1-hidden">
				<input type="hidden" name="address-l2-hidden">
				<input type="hidden" name="address-city-hidden">
				<input type="hidden" name="address-county-hidden">
				<input type="hidden" name="address-postcode-hidden">
				<input type="hidden" name="address-country-hidden">
				<input type="hidden" name="mobile-hidden">
				<input type="hidden" name="dob-hidden">
				<!--Form-->
				<div class="form-row">
					<label class="">Vaccination centre</label>
					<select class="form-select" name="county" aria-describedby="county-help">
						<option selected disabled>Choose your nearest centre</option>
						<option>option 1</option>
						<option>option 2</option>
					</select>
					<div id="county-help" class="form-text">
			    		Here you can choose the vaccine centre that you will receive alerts from about available, spare, vaccine.
			    	</div>
				</div>
				<div class="form-row form-line-break"></div>
				<div class="form-row">
					<label>How do you want to be notified about available COVID vaccine?</label>
				</div>
				<div class="form-row">
                	<input type="checkbox" class="form-check-input" id="emailAlert">
                	<label class="form-check-label" for="emailAlert">Email</label>
                </div>
                <div class="form-row">
                	<input type="checkbox" class="form-check-input" id="textAlert">
                	<label class="form-check-label" for="textAlert">Text message</label>
				</div>
				<div class="form-row form-line-break"></div>
				<div class="form-row">
					<label>Have you read and do you agree to our <a href="#">Terms &amp; Conditions</a>?</label>
				</div>
				<div class="form-row">
                	<input type="checkbox" class="form-check-input" id="tandc">
                	<label class="form-check-label" for="emailAlert">Agree</label>
				</div>
				<div class="form-row">
			    	<div class="g-recaptcha" data-sitekey="6Lda7E0aAAAAAK35uEGsvY_wjxCPKNNCCmxMW8EE"></div>
				</div>
				<div class="center-row-item form-row">
					<button type="button" class="btn btn-outline-primary btn-block" onclick="prevRegisterDetails()">Previous</button>
					<button type="submit" name="register" class="btn btn-outline-secondary btn-block" id="register-btn" disabled>Register</button>
				</div>
			</div>
		</form>
		<div class="center-row-item form-row">
			<p>Already registered? Sign in <span class="login-txt" onclick="loginPage()">here</span></p>
		</div>
			<?php echo $success_msg; ?>
	</div>
	<div id="login">
		<form id="sign-in" method="post" action="">
			<div class="center-row-item"><div class="box-header">Sign in</div></div>
			<div class="form-row">
				<label class="">Email address</label>
				<input type="email" class="form-control">
			</div>
			<div class="form-row">
				<label class="">Password</label>
		    	<input type="password" class="form-control" id="password" aria-describedby="forgot-pass">
		    	<div id="forgot-pass" class="form-text">
			    	<a href="#">Forgot password?</a>
			    </div>
			</div>
			<div class="form-row">
			     <div class="g-recaptcha" data-sitekey="6Lda7E0aAAAAAK35uEGsvY_wjxCPKNNCCmxMW8EE"></div>
			</div>
			<div class="center-row-item">
				<button type="submit" name="login" class="btn btn-outline-primary btn-block">Log in</button>
			</div>
			<?php echo $wrongPwdErr; ?>
			<?php echo $accountNotExistErr; ?>
			<?php echo $emailPwdErr; ?>
			<?php echo $verificationRequiredErr; ?>
		</form>

<!-- Add logic in JS to index.php for login page for regex -->
		<div class="center-row-item form-row"><p>Back to <span class="login-txt" onclick="backToRegister()">registration</span></p></div>
	</div>

</div>

<!--Move to PHP eventually-->
<div class="footer">
	<ul>
		<li>About Us</li>
		<li>Report an Issue</li>
		<li>Support Us</li>
		<li>Share</li>
	</ul>
</div>

</div>

</div>

</body>
</html>