<?php
   
    // Database usersdb
    include('../config/usersdb.php');

    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['sign-in'])) {
        $email_signin        = $_POST['email'];
        $password_signin     = $_POST['password'];

        // clean data happens in JS 

        // Query if email exists in db
        $sql = "SELECT * From users WHERE email = '{$email_signin}' ";
        $query = mysqli_query($usersdb, $sql);
        $rowCount = mysqli_num_rows($query);

        // If query fails, show the reason 
        if(!$query){
           die("SQL query failed: " . mysqli_error($usersdb));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            // Check if email exist
            echo "Test";
            if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        User account does not exist.
                    </div>';
            } else {
                // Fetch user data and store in php session
                while($row = mysqli_fetch_array($query)) {
                    $id            = $row['id'];
                    $firstName     = $row['firstName'];
                    $lastName      = $row['lastName'];
                    $email         = $row['email'];
                    $addressl1     = $row["addressl1"];
        			$addressl2     = $row["addressl2"];
        			$addressCity   = $row["addressCity"];
        			$addressPostcode = $row["addressPostcode"];
        			$addressCountry = $row["addressCountry"];
                    $phone   	   = $row['phone'];
                    $password1      = $row['password'];
                    $birthDate	   = $row['birthDate'];
                    $token         = $row['token'];
                    $is_active     = $row['is_active'];
                }

                // Verify password
                $password = password_verify($password_signin, $password1);

                // Allow only verified user
                if($is_active == '1') {
                    if($email_signin == $email && $password_signin == $password) {
                       header("Location: ./my-account.html");

                    $_SESSION['id'] = $id;
                    $_SESSION['firstName'] = $firstName;
                    $_SESSION['lastName'] = $lastName;
                    $_SESSION['email'] = $email;
                    $_SESSION["addressl1"] = $addressl1;
                    $_SESSION["addressl2"] = $addressl2;
                    $_SESSION["addressCity"] = $addressCity;
                    $_SESSION["addressPostcode"] = $addressPostcode;
                    $_SESSION["addressCountry"] = $addressCountry;
                    $_SESSION['phone'] = $phone;
                    $_SESSION['password'] = $password;
                    $_SESSION['birthDate'] = $birthDate;
                    $_SESSION['token'] = $token;
                    } else {
                        $emailPwdErr = '<div class="alert alert-danger">
                                Either email or password is incorrect.
                            </div>';
                    }
                } else {
                    $verificationRequiredErr = '<div class="alert alert-danger">
                            Account verification is required for login.
                        </div>';
                }

            }

        } else {
            if(empty($email)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Email not provided.
                    </div>";
            }
            
            if(empty($password)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Password not provided.
                        </div>";
            }            
        }
            echo $wrongPwdErr;
            echo $accountNotExistErr;
            echo $emailPwdErr;
            echo $verificationRequiredErr;
    }

?>