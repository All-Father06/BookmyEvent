<?php
include ('conn.php');
session_start();
$u=$_SESSION['user'];
$a=$_SESSION['access'];
$i=$_POST['id'];
$q0="Select * from `events` where `Id` like '$i'";
$r0=mysqli_fetch_assoc(mysqli_query($conn,$q0));
echo $r=$r0['Registered'];
echo $c=$r0['Capacity'];
if($r != $c){
$q="UPDATE `events` SET `Registered`=`Registered`+1 where `Id` ='$i'";
$r1=mysqli_query($conn,$q);
$q2="INSERT INTO `$i`(`uname`) VALUES ('$u')";
$r3=mysqli_query($conn,$q2);
echo('<script>alert("Registered")</script>');
if($a=='Yes'){
    echo('<script>window.location="udash2.html"</script>');
}
else{
    echo('<script>window.location="udash1.html"</script>');
}
}
else{
    echo('<script>alert("Event capacity reached did not register")</script>');
    if($a=='Yes'){
        echo('<script>window.location="udash2.html"</script>');
    }
    else{
        echo('<script>window.location="udash1.html"</script>');
    }
}
?>
