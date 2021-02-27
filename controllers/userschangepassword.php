<?php
    include('./config/usersdb.php');

global $pwdSuccess, $pwdfailed, $pwdnomatch;

if(isset($_POST['update-pass']))
{
  $new_pass_1=$_POST['new_pass_1'];
  $new_pass_2=$_POST['new_pass_2'];

if($new_pass_2 == $new_pass_1 && !empty(new_pass_1))
  {
    //Encrypt
      $password_hash = password_hash($new_pass_1, PASSWORD_BCRYPT);
//BUG, password hash creates new hash every time for the same password

      //not reading or checking inputs
    //Set new password
     $email=$_SESSION['email'];    
     $sql="update users set password='$password_hash' where
email='$email'";
     $change=mysqli_query($usersdb,$sql);
     
     if($change)
     {
         //Password Successfully Changed.
         $pwdSuccess = "Success. New password =" .$new_pass_1 . " and hash =: ".$password_hash . "  ";
     }
     else
     {
         //Sorry, Something went wrong, Please Try Again. Never called
         $pwdfailed = "Something went wrong.";
     }
  }
  else
  {
      //Password do not Match. Never Called
      $pwdnomatch = "Passwords do not match";
}
}
?>