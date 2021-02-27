<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php

	include('usersdb.php');

if ($usersdb->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

<table border="1" align="center">
<tr>
  <td>First Name</td>
  <td>Surname</td>
  <td>Email</td>
  <td>Address L1</td>
  <td>Address L2</td>
  <td>City</td>
  <td>Postcode</td>
  <td>County</td>
  <td>Country</td>
  <td>Phone</td>
  <td>Password</td>
  <td>Birth Date</td>
  <td>Token</td>
  <td>Verified?</td>
  <td>Date registered</td>
</tr>

<?php

$query = mysqli_query($usersdb, "SELECT * FROM users")
   or die (mysqli_error($usersdb));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['firstName']}</td>
    <td>{$row['lastName']}</td>
    <td>{$row['email']}</td>
    <td>{$row['addressl1']}</td>
    <td>{$row['addressl2']}</td>
    <td>{$row['addressCity']}</td>
    <td>{$row['addressPostcode']}</td>
    <td>{$row['addressCounty']}</td>
    <td>{$row['addressCountry']}</td>
    <td>{$row['phone']}</td>
    <td>{$row['password']}</td>
    <td>{$row['birthDate']}</td>
    <td>{$row['token']}</td>
    <td>{$row['is_active']}</td>
    <td>{$row['date_time']}</td>
   </tr>\n";

}

?>
</table>
</body>
</html>