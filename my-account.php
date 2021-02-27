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
    <script type="text/javascript" src="js/user.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/user.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <title>My Account</title>
</head>
<body>
<div class="container-div">
<!--Header nav-->
<?php include('./header.php'); ?>
<!--End header nav-->
<div class="my-account-page">
    <div class="nav-bar">
        <div class="option-boxes">
            <div id="vaccine-slot" class="selected" onclick="navigate(this)"><p>Vaccine slots</p><span class="arrow"></span></div>
            <div id="vaccine-centre" onclick="navigate(this)"><p>Change vaccine centre</p><span class="arrow"></span></div>
            <div id="personal" onclick="navigate(this)"><p>Change personal details</p><span class="arrow"></span></div>
        </div>
    </div>
    <div class="options-display">
        <div class="vaccine-slot">
            <p>more settings here</p>
        </div>
        <div class="vaccine-centre">
            <p>settings here</p>
        </div>
        <div class="personal">
            <form id="personal-details" method="post" action="">
                <div class="form-row">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="form-row">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="name@example.com">
                </div>
                <div class="form-row">
                    <label>First name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-row">
                    <label>Last name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-row">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Street address">
                <input type="text" class="form-control" placeholder="Apt, building, etc">
                <input type="text" class="form-control" placeholder="Street address">
                <input type="text" class="form-control" placeholder="City">
                <select type="text" class="form-control">
                    <option>County</option>
                </select>
                <input type="text" class="form-control" placeholder="Country">
                <label>Mobile</label>
                <input type="text" class="form-control">
                <label>Alerts</label>
                <input type="checkbox" class="form-check-input" id="emailAlert">
                <label class="form-check-label" for="emailAlert">Email</label>
                <input type="checkbox" class="form-check-input" id="textAlert">
                <label class="form-check-label" for="textAlert">Text message</label>
                <button type="submit" class="btn btn-outline-primary">Save changes</button>
            </form>
            <form name="delete" method="post" action="" onsumbit="">
                <button type="submit" class="btn btn-outline-danger">Delete account</button>
            </form>
        </div>
    </div>
</div>

</div>
</body>