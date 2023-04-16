<?php
include ('conn.php');
session_start();
echo $id=$_POST['id'];
echo $opt=$_POST['option'];
echo $opt2=$_POST['room'];
if($opt='Yes'){
if($opt2=='A'){
    $qu= "SELECT * FROM `events` WHERE Id like '$id'";
    $ds1=mysqli_fetch_assoc(mysqli_query($conn,$qu)); 
    $st=$ds1['Stime'];
    $et=$ds1['Etime'];
    $d= $ds1['Date'];
    $q="SELECT * FROM `events` WHERE Date like '$d' and Stime like'$st' and Etime like '$et' And Room like 'A'";
    $qr=mysqli_query($conn,$q);
    echo $c1=mysqli_num_rows($qr);
    if($c1 ==0){
        $q="UPDATE `events` SET `Approval`='$opt',`Room`='$opt2' WHERE Id like '$id'";
        $r1=mysqli_query($conn,$q);
        echo('<script>alert("Event apporved and room updated")</script>');
        echo('<script>window.location="req.php"</script>');
    }
    else{
        //echo('<script>alert("Room not available pls select another")</script>');
        //echo('<script>window.location="req.php"</script>');
    }
}
if($opt2=='B'){
    $qu= "SELECT * FROM `events` WHERE Id like '$id'";
    $ds1=mysqli_fetch_assoc(mysqli_query($conn,$qu)); 
    $st=$ds1['Stime'];
    $et=$ds1['Etime'];
    $d= $ds1['Date'];
    $q="SELECT * FROM `events` WHERE Date like '$d' and Stime like'$st' and Etime like '$et' And Room like 'B'";
    $qr=mysqli_query($conn,$q);
    $c1=mysqli_num_rows($qr);
    if($c1 ==0){
        $q="UPDATE `events` SET `Approval`='$opt',`Room `='$opt2' WHERE Id like '$id'";
        $r1=mysqli_query($conn,$q);
        echo('<script>alert("Event apporved and room updated")</script>');
        echo('<script>window.location="req.php"</script>');
    }
    else{
        //echo('<script>alert("Room not available pls select another")</script>');
        //echo('<script>window.location="req.php"</script>');
    }
}
if($opt2=='C'){
    $qu= "SELECT * FROM `events` WHERE Id like '$id'";
    $ds1=mysqli_fetch_assoc(mysqli_query($conn,$qu)); 
    $st=$ds1['Stime'];
    $et=$ds1['Etime'];
    $d= $ds1['Date'];
    $q="SELECT * FROM `events` WHERE Date like '$d' and Stime like'$st' and Etime like '$et' And Room like 'C'";
    $qr=mysqli_query($conn,$q);
    $c1=mysqli_num_rows($qr);
    if($c1 ==0){
        $q="UPDATE `events` SET `Approval`='$opt',`Room `='$opt2' WHERE Id like '$id'";
        $r1=mysqli_query($conn,$q);
        //echo('<script>alert("Event apporved and room updated")</script>');
        //echo('<script>window.location="req.php"</script>');
    }
    else{
        //echo('<script>alert("Room not available pls select another")</script>');
        //echo('<script>window.location="req.php"</script>');
    }
}
}
else{
    $q="UPDATE `events` SET `Approval`='$opt',`Room `=' ' WHERE Id like '$id'";
}
?>
