<?php
    // Database usersdb
    include('./config/usersdb.php');

    global $email_verified, $email_already_verified, $activation_error;

    // GET the token = ?token
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

?>