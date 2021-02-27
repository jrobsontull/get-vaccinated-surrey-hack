<?php include('./controllers/usersignin.php'); ?>

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
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Sign In</title>
</head>
<body>
<div class="container-div">
<!--Header nav-->
<nav class="nav-head">
    <div class="brand-logo"><span class="brand-bold">Get</span>Vaccinated</div>
</nav>
<!--End header nav-->

<div class="vertical-center verification">
    <div class="central-panel">
        <div class="center-row-item">
            <div class="box-header">Sign In</div>
        </div>
        <div class="forgot-pass">
            <div class="form-row">
                <p>Sign in to update your contact details, change your local vaccination centre or acccept available vaccination slots.</p>
            </div>
            <form id="sign-in" method="post" action="">
                <div class="form-row form-floating">
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="forgot-pass-email" id="floatingEmail" placeholder="name@example.com" onblur="validateEmail(this)">
                    <label for="floatingEmail">Email address</label>
                    <div id="emailHelp" class="form-text">Type a valid email here.</div>
                </div>
                <div class="form-row form-floating">
		    		<input type="password" class="form-control col-6" id="floatingPass" aria-describedby="passwordHelpBlock" name="password-first-page" placeholder="Password" onblur="validateLostFocus(this)">
		    		<label for="floatingPass">Password</label>
		    		<div id="passwordHelpBlock" class="form-text">Type you password here.</div>
				</div>
                <div class="form-row center-row-item">
                <button type="submit" name="submit" class="btn btn-outline-primary btn-block">Submit</button>
                </div>
            <?php echo $wrongPwdErr; ?>
            <?php echo $accountNotExistErr; ?>
            <?php echo $emailPwdErr; ?>
            <?php echo $verificationRequiredErr; ?>
            </form>
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