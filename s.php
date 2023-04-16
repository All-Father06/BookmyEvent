<?php
include ('conn.php');
session_start();
$name=$_POST['user'];
$pwd=$_POST['p1'];
$pwd2=$_POST['p2'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
if(strcmp($pwd,$pwd2)==0){
    $q="INSERT INTO `user`(`emp_name`,`email`, `mob`,`pwd`) VALUES ('$name','$mail','$phone','$pwd')";
    $r1=mysqli_query($conn,$q);
    echo('<script>alert("User added")</script>');
    echo('<script>window.location="index.html"</script>');
}
else{
    echo("<script>alert('Passwords dont match')</script>");
    echo('<script>window.location="index.html"</script>');
}
?>
