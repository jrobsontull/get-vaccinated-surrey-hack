<?php include('./controllers/user_activation.php'); ?>

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
    
    <title>Verification</title>
</head>
<body>
<div class="container-div">
<!--Header nav-->
<nav class="nav-head">
    <div class="brand-logo"><span class="brand-bold">Get</span>Vaccinated</div>
    <div class="login-link"><a href="">Sign in</a></div>
</nav>
<!--End header nav-->

<div class="vertical-center verification">
	<div class="central-panel">
		<div class="center-row-item">
			<div class="box-header">Account Verification</div>
		</div>
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>
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