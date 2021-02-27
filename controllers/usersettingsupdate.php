<?php
    include('./config/usersdb.php');


global $fnameupdate, $fnamefail, $fnamenomatch;
     
     if(isset($_POST['save-changes']))
 {
    $id=$_SESSION['id'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $addressl1=$_POST['addressl1'];
    $addressl2=$_POST['addressl2'];
    $addressCity=$_POST['addressCity'];
    $addressCounty=$_POST['addressCounty'];
    $phone=$_POST['phone'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword1'];
    $newPassword2 = $_POST['newPassword2'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($usersdb,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set firstName='$fname',lastName='$lastName',email='$email' where id='$id'";
       $sql2=mysqli_query($usersdb,$update);
if($sql2)
       { 
           /*Successful*/
           $fnameupdate = echo "Update successful";
       }
       else
       {
       	   $fnamefail = echo "Failed";
           /*sorry your profile is not update*/
       }
    }
    else
    {
    	$fnamenomatch = echo "Session Expired. Please log in again";
        /*sorry your id is not match*/
        header('location:/myaccount.php');
    }
 }
?>