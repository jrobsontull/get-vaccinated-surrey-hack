<?php
    include('./config/usersdb.php');


global $fnameupdate, $fnamefail, $fnamenomatch;
//init variables
$id = $firstName = $lastName = $email = $addressl1 = $addressl2 = $addressCity = $addressCity = $phone = "";
     
     if(isset($_POST['save-changes']))
 {
    $id=$_SESSION['id'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $addressl1=$_POST['addressl1'];
    $addressCity=$_POST['addressCity'];
    $addressCounty=$_POST['addressCounty'];
    $phone=$_POST['phone'];
    $token=$_SESSION['token']; //returns extra " for some reason. Issue affects ALL variables you place after where, including ID and email

    $select= "SELECT * from users where id='$id'";
    $sql = mysqli_query($usersdb,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
       $update = "UPDATE users set firstName='$firstName' ,lastName='$lastName', email='$email', addressl1='$addressl1', addressCity='$addressCity', addressCounty='$addressCounty', phone='$phone' WHERE token='$token'"; //bit after WHERE returns extra ", so SQL will not pass.
       $sql2=mysqli_query($usersdb,$update);
       echo $update;
if($sql2)
       { 
           /*Successful*/
           $fnameupdate = "Update successful";
       }
       else
       {
       	//   $fnamefail = "Failed ";
           /*Profile not updated*/
       }
    }
    else
    {
    	$fnamenomatch = "Session Expired. Please log in again";
        /*sorry your id is not match*/
        header('location:/myaccount.php');
    }
}
echo $fnameupdate;
echo $fnamefail;
echo $fnamenomatch;
?>