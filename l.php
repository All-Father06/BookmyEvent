<?php
include ('conn.php');
session_start();
$name=$_POST['user'];
$pwd=$_POST['pwd'];
$q="SELECT * FROM `user` WHERE emp_name like '$name' and pwd LIKE '$pwd'";
$r1=mysqli_query($conn,$q);
$num=mysqli_num_rows($r1);
$rs1=mysqli_fetch_assoc($r1);
if($num==1){
    echo $_SESSION['access']=$rs1['access'];
    $_SESSION['user']=$rs1['emp_name'];
    $_SESSION['type']=$rs1['type'];
    
    if($_SESSION['access']=='Yes' && $_SESSION['type']!='Admin'){
        echo('<script>window.location="udash2.html"</script>');
    }
    if($_SESSION['access']=='No' && $_SESSION['type']!='Admin'){
        echo('<script>window.location="udash1.html"</script>');}
    if($_SESSION['type']=='Admin'){
        echo('<script>window.location="admin.html"</script>');}
    }
    else{
        echo('<script>alert("Incorrect username/password")</script>');
        echo('<script>window.location="index.html"</script>');
    }
?>
