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

    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <title>Forgot Password</title>
</head>
<body>
<div class="container-div">
<!--Header nav-->
<nav class="nav-head">
    <div class="brand-logo"><a href="/"><span class="brand-bold">Get</span>Vaccinated</a></div>
    <div class="login-link"><a href="" id="button">Sign in</a></div>
</nav>
<!--End header nav-->

<div class="vertical-center verification">
    <div class="central-panel">
        <div class="center-row-item">
            <div class="box-header">Forgot Password</div>
        </div>
        <div class="forgot-pass">
            <div class="form-row">
                <p>Type the email address for your account here and if an account with this address exists, we will email you with a link to reset your password.</p>
            </div>
            <form id="forgot-pass" method="post" action="" onsubmit="isValidForgotPassForm()">
                <div class="form-row form-floating">
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="forgot-pass-email" id="floatingEmail" placeholder="name@example.com" onblur="validateEmail(this)">
                    <label for="floatingEmail">Email address</label>
                    <div id="emailHelp" class="form-text">Type a valid email here.</div>
                </div>
                <div class="form-row center-row-item">
                <button type="submit" name="forgot-pass" class="btn btn-outline-primary btn-block">Submit</button>
                </div>
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