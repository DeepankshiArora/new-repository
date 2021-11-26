<?php
 if(!isset($_SESSION)) 
 { 
session_start();
 }
include "auth.php";
 include "header_voter.php";
 include "connection.php";
?>
<br><br><br>
<center><h2> Welcome 
<?php
 echo $_SESSION['SESS_NAME'];
?> 
</center>
</h2>
<html>
<body>
 <body style="background:url(bglogin.jpg);background-repeat:norepeat;background-size:100% 100%">
</body>
</html>
<?php
 $username = $_SESSION['SESS_NAME'];
 
$query = 'SELECT status 
 FROM voters 
 WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = 
"VOTED"';
 if ($result = mysqli_query($con,$query)) 
 {
 if (mysqli_num_rows($result) > 0)
 {
 $sql = mysqli_query($con, 'SELECT voted from voters WHERE 
username="'.$_SESSION['SESS_NAME'].'"');
 $row = mysqli_fetch_assoc($sql);
 echo "YOU HAVE VOTED FOR : " . " " . $row['voted'];
 }
 else
 {
 echo "You have not voted yet. Please submit your vote!";
 }
 }
?>
