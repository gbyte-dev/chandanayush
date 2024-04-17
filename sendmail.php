<?php 
include("mail.php");
 $email=$_POST['email'];
 $service=$_POST['service'];
 $doctor=$_POST['doctor'];
 $name=$_POST['name'];
 $date=$_POST['date'];
 $time=$_POST['time'];
sendmail($email,$service,$doctor,$name,$date,$time);
header('Location: http://chandanayushhospital.com/index.php');

?>