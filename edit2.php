<?php
include ('conn.php');
session_start();
$n=$_SESSION['user'];
echo $id=$_POST['Id'];
echo $name=$_POST['name'];
echo $date=$_POST['date'];
echo $st=$_POST['stime'];
echo $et=$_POST['etime'];
echo $des=$_POST['des'];

$q="UPDATE `events` SET `Name`='$name',`Description`='$des',`Date`='$date',`Stime`='$st',`Etime`='$et' WHERE `Id`='$id'";
$r1=mysqli_query($conn,$q);
echo('<script>alert("Event updated")</script>');
if($n!='Admin'){
    echo('<script>window.location="udash2.html"</script>');
}
else{
    echo('<script>window.location="admin.html"</script>');
}
?>  
