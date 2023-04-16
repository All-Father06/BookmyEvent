<?php
include ('conn.php');
session_start();
echo $id=$_POST['id'];
echo $opt=$_POST['option'];
$q="UPDATE `user` SET `access`='$opt' WHERE emp_id like '$id'";
$r1=mysqli_query($conn,$q);
echo('<script>alert("Access updated")</script>');
echo('<script>window.location="uac.php"</script>');
?>
