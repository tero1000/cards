<?php
session_start();
if($_SESSION['username'] == 'username') {
 include "connect.php";
 print("<html>");
 $conn = connect_db();
 $sql = "DELETE FROM Addresses WHERE id=" . $_GET['id'];
 // print $sql;
 $result = mysqli_query($conn, $sql);
 print("Delete completed.");
 print("</html>");
 mysqli_close($conn);
}
?>
