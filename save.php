<?php
session_start();
if($_SESSION['username'] == 'username') {
 include "connect.php";
 print("<html>");
 $conn = connect_db();
 $sql = "INSERT INTO Addresses(name,street_address,zip,city,state,country)
VALUES('" . $_POST['name'] .
 "','" . $_POST['street_address'] . "','" . $_POST['zip'] . "','" .
$_POST['city'] . "','" . $_POST['state'] . "','" .
$_POST['country'] ."');";
 // print $sql;
 $result = mysqli_query($conn, $sql);
 print("Save completed.");
 print("</html>");
 mysqli_close($conn);
}
?>

