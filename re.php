<?php
include ('conn.php');
session_start();
$c=$_SESSION['user'];
$name=$_POST['name'];
$date=$_POST['date'];
$s=$_POST['stime'];
$e=$_POST['etime'];
$des=$_POST['des'];
$q="INSERT INTO `events`(`Name`, `Description`, `Creator`, `Date`, `Stime`, `Etime`) VALUES ('$name','$des','$c','$date','$s','$e')";
$r1=mysqli_query($conn,$q);
$q1="Select * from `events` where `Name` like '$name'";
$r2=mysqli_query($conn,$q1);
$d1=mysqli_fetch_assoc($r2);
echo $de=$d1['Id'];
$q2="CREATE TABLE `$de`(`Id` INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY ,`uname` varchar(30),`feedback` varchar(500))";
$r3=mysqli_query($conn,$q2);
echo('<script>alert("Event created")</script>');
echo('<script>window.location="udash2.html"</script>');
?>
