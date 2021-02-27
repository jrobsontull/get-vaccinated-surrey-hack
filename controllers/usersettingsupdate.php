<?php
    include('./config/usersdb.php');


global $fnameupdate;
    

$token = $_SESSION['token'];
//Final update settings

    if(isset($_POST["save-changes"])) {
        $firstName     = $_POST["firstName"];
        $lastName      = $_POST["lastName"];
        $email         = $_POST["email"];
        $addressl1     = $_POST["addressl1"];
        $addressl2     = $_POST["addressl2"];
        $addressCity   = $_POST["addressCity"];
        $addressPostcode = $_POST["addressPostcode"];
        $addressCountry = $_POST["addressCountry"];
        $phone         = $_POST["phone"];
//        $birthDate     = $_POST["dob-hidden"];

  if(!empty($firstName) || !empty($lastName) || !empty($email) || !empty($addressl1) || !empty($addressCity) || !empty($addressPostcode) || !empty($addressCountry) || !empty($password) || !empty($phone) || !empty($password)){

if($firstName != $_SESSION['firstName']){
        $update = mysqli_query($usersdb, "UPDATE users SET firstName = '".$_SESSION['firstName']."' WHERE '".$_SESSION['token']."' = '$token' ");
                       if($update){
                           $fnameupdate = '<div class="alert alert-success">You have successfully updated your first name.</div>';
                       }else{
 
                       }
}
}
  /*      $email_check_query = mysqli_query($usersdb, "SELECT * FROM users WHERE email = '{$email}' ");
  


  }

$checkInputs = "<div class='alert alert-danger' role='alert'>
                        You are missing a required field. Please try again
                    </div>"


        // check if email already exist

        $rowCount = mysqli_num_rows($email_check_query);


        // PHP validation
        // Verify if form values are not empty - leaving out address, do not know what is required.
        if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($password) && !empty($birthDate)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exists!
                    </div>
                ';
            } else {

                    // Generate random activation token
                    $token = md5(rand().time());

                    // Password hash
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);
                    // Query 
                    $sql = "INSERT INTO users (firstName, lastName, email, addressl1, addressl2, addressCity, addressCounty, addressPostcode, addressCountry, phone, password, birthDate, token, is_active,
                    date_time) VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$addressl1}', '{$addressl2}', '{$addressCity}', '{$addressCounty}', '{$addressPostcode}', '{$addressCountry}', '{$phone}', '{$password_hash}', '{$birthDate}',
                    '{$token}', '0', now())";
                    // Create mysql query
                    $sqlQuery = mysqli_query($usersdb, $sql);
                    
                    if(!$sqlQuery){
                        die("MySQL query failed!" . $sql . mysqli_error($usersdb));
                    } 
                    if($sqlQuery) {
                        $success_msg = 'Click on the activation link to verify your email. <br><br>
                          <a href="../verification.php?token='.$token.'"> Click here to verify email</a>
                        ';
            }
        } 
}
}
 






        $countRow = mysqli_num_rows($sqlQuery);

if(!empty($_GET['token'])){
       $token = $_GET['token'];
    } else {
        $token = "";
    }

    if($token != "") {
        $sqlQuery = mysqli_query($usersdb, "SELECT * FROM users WHERE token = '$token' ");
        $countRow = mysqli_num_rows($sqlQuery);

        if($countRow == 1){
            while($rowData = mysqli_fetch_array($sqlQuery)){
                $is_active = $rowData['is_active'];
                  if($is_active == 0) {
                     $update = mysqli_query($usersdb, "UPDATE users SET is_active = '1' WHERE token = '$token' ");
                       if($update){
                           $email_verified = '<div class="alert alert-success">You have successfully verified your account.</div>
                           <p>You can now sign in if you need to update your contact details, change your local vaccination centre or acccept available vaccination slots.</p>';
                       }
                  } else {
                        $email_already_verified = '<div class="alert alert-danger">User email already verified!</div>
                        <p>You have already activated your user account. You can now click the sign in button to continue to your account.</p>
                        ';
                  }
            }
        } else {
            $activation_error = '<div class="alert alert-danger">Activation error!</div>
            <p>A fatal error occured. Please report the issue with your account.</p>
            ';
        }
    }
*/
?>