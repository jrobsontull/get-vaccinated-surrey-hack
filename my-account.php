<?php include('./config/usersdb.php');
include('./controllers/usersettingsupdate.php');
include('./controllers/userschangepassword.php');


if (!isset($_SESSION['id']))
{
    header("Location: ./sign-in");
    die();
}
?>
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
    
    <title>My Account</title>
</head>
<body>
<div class="container-div">
<!--Header nav-->
<nav class="nav-head">
    <div class="brand-logo"><a href="/"><span class="brand-bold">Get</span>Vaccinated</a></div>
    <div class="login-link signed-in"><a href="/controllers/usersignout.php" id="button">Sign out</a></div>
</nav>
<!--End header nav-->
<div class="my-account-page">
    <div class="nav-bar">
        <div class="option-boxes">
            <div id="vaccine-slot" class="selected" onclick="navigate(this)"><p>Vaccine slots</p><span class="arrow"></span></div>
            <div id="vaccine-centre" onclick="navigate(this)"><p>Change vaccine centre</p><span class="arrow"></span></div>
            <div id="personal" onclick="navigate(this)"><p>Change personal details</p><span class="arrow"></span></div>
            <div id="change-password" onclick="navigate(this)"><p>Change password</p><span class="arrow"></span></div>
        </div>
    </div>
    <div class="options-display">
        <div class="vaccine-slot">
            <p>You currently have <strong>no available</strong> vaccine slots. Revist this page once you receive an email or text notification of availability.</p>
            <form name="usr-vac-slot" method="post" action="">
                <div class="form-row center-row-item vac-slt-form-btns">
                    <button type="button" class="btn vac-slot-btn btn-outline-success accept btn-block" disabled>Confirm appointment</button>
                    <button type="button" class="btn btn-outline-secondary vac-slot-btn deny btn-block" disabled>Not available</button>
                </div>
            </form>
        </div>
        <div class="vaccine-centre">
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
        </div>
        <div class="personal">
            <form id="personal-details" method="post" action="controllers/usersettingsupdate.php">
                <div class="form-row">
                     <?php echo $fnameupdate;?>
                     <?php echo $fnamefail;?>
                    <?php echo $fnamenomatch;?>
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="name@example.com" value ="<?php echo $_SESSION['email'];?>">
                </div>
                <div class="form-row">
                    <label>First name</label>
                    <input type="text" class="form-control" name="firstName" value ="<?php echo $_SESSION['firstName'];?>">
                </div>
                <div class="form-row">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="lastName" value ="<?php echo $_SESSION['lastName'];?>">
                </div>
                <div class="form-row">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Street address" name="addressl1" value ="<?php echo $_SESSION['addressl1'];?>" aria-describedby="line-1">
                    <div id="line-1" class="form-text">
                        Street address
                    </div>
                </div>
                <div class="form-row">
                    <input type="text" class="form-control" name="addressl2" placeholder="Apt, building, etc" value ="<?php echo $_SESSION['addressl2'];?>" aria-describedby="line-2">
                    <div id="line-2" class="form-text">
                        Apartment, suite , unit, building, floor, etc.
                    </div>
                </div>
                <div class="form-row no-wrap">
                    <div class="form-col2">
                        <input type="text" class="form-control" placeholder="City" name="addressCity" value ="<?php echo $_SESSION['addressCity'];?>" aria-describedby="city-help" onblur="validateLostFocus(this)">
                        <div id="city-help" class="form-text">
                            City
                        </div>
                    </div>
                    <div class="form-col2">
                        <select type="text" name="addressCounty" class="form-control" value ="<?php echo $_SESSION['addressCounty'];?>" aria-describedby="county-help">
                            <?php include('./assets/html/counties.php'); ?>
                        </select>
                        <div id="county-help" class="form-text">
                            County
                        </div>
                    </div>
                </div>
                <div class="form-row no-wrap">
                    <div class="form-col2">
                        <input type="text" class="form-control" placeholder="Country" name="addressCountry" value ="postcode here" aria-describedby="postcode-help">
                        <div id="postcode-help" class="form-text">
                            Postcode
                        </div>
                    </div>
                    <div class="form-col2">
                        <input type="text" class="form-control" placeholder="Country" name="addressCountry" value ="<?php echo $_SESSION['addressCountry'];?>" aria-describedby="country-help">
                        <div id="country-help" class="form-text">
                            Country
                        </div>
                    </div>
                </div>
                <div class="form-row form-line-break"></div>
                <div class="form-row">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $_SESSION['phone'];?>">
                </div>
                <div class="form-row">
                    <label class="">Birth date</label>
                    <input type="date" name="dob" class="form-control" id="dob" disabled>
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
                    <p>Once you've finished making changes, click this button to update your details.</p>
                </div>
                <div class="form-row center-row-item">
                    <button type="submit" name="save-changes"class="btn btn-outline-primary btn-block">Save changes</button>
                </div>
            </form>
            <div class="form-row form-line-break"></div>
            <div class="form-row">
                <p>Use the button below to delete your account. To continue using our service, you will have to re-register.</p>
            </div>
            <form name="delete" method="post" action="" onsumbit="confirmDelete()">
                <div class="form-row center-row-item">
                        <button type="submit" class="btn btn-outline-danger btn-block">Delete account</button>
                </div>
            </form>
        </div>
        <div class="change-password">
            <form name="change-pass" method="post" action="" onsumbit="">
                <div class="form-row">
                    <label>Current password</label>
                    <input name="current-pass" type="password" class="form-control">
                </div>
                <div class="form-row">
                    <label>New password</label>
                    <input name="new-pass-1" type="password" class="form-control">
                </div>
                <div class="form-row">
                    <label>Repeat new password</label>
                    <input name="new-pass-2" type="password" class="form-control">
                </div>
                <button type="submit" name="update-pass" class="btn btn-outline-primary">Save changes</button>
                     <?php echo $pwdSuccess;?>
                     <?php echo $pwdfailed;?>
                    <?php echo $pwdnomatch;?>
                    <?php echo $pwdSame;?>
            </form>
        </div>
    </div>
</div>

</div>
</body>