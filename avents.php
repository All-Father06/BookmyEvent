<?php
	include ('conn.php');
	session_start();
	?>
<!DOCTYPE html>
<head></head>
	<title>User Dashboard </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Custom CSS -->
	<style>
    body{
      overflow-y: auto;
      background-image: url("360_F_499354643_teCmnAi3OS7E82zZjTqPI6bPoP1CK3KD.jpg");
      background-size: 170%;
    background-repeat: no-repeat;
        
    }
    	.topnav {
				overflow: hidden;
				background-color: #333;
				width: 60%;
        top:55px;
        text-align:center;

			}

			.topnav i {
				font-size: 20px;
				color: #f2f2f2;
				/*margin-left:880px;*/
				float: right;
				margin-bottom: 3px;
				margin-right: 10px;
			}

			.topnav a {

				/*display: block;*/
				color: #f2f2f2;
				/*text-align: center;*/
				text-decoration: none;
				font-size: 15px;
				/*padding: 5px 0 15px 0px;*/
				/*align: center;*/
				margin-left: 10px;
				margin-top: 5px;


			}

			.topnav .icon {
				display: none;
			}

				.topnav a {
					font-size: 15px;
					margin-left: 10px;
				}

				.topnav a.icon {
					margin-left: 5px;
					/*display: block;*/
					font-size: 8px;
				}

				.topnav {
					margin-left: 22px;
					width: 100%;top:55px;text-align:center;width:				}

				.topnav i {
					font-size: 30px;
					color: #f2f2f2;
					float: right;
					margin-bottom: 15px;
					margin-top: 9px;
				}



				.inner img {
					margin: 27px;
					margin-bottom: 0px;
					width: 90%;
					height: 50px;
				}
		.container {
			padding-top: 80px;
		}

		.row {
			margin-bottom: 30px;
		}

		.left-grid, .right-grid {
			background-color: #f7f7f7;
			height: 700px;
		}

		.tall-grid {
			background-color: #e9ecef;
			height: 900px;
		}

		.wide-grid {
			background-color: #dee2e6;
			height: 500px;
      place-self: center;
      justify-content: center;
      align-items: center;
		}
        #c1{
            background-color: #b51a4e;
            color:whitesmoke;
        }
        #bt1{   
            background-color: rgb(255, 200, 0);
            border-radius: 15px;
        }
        #bt2{
            background-color: rgb(72, 255, 0);
            border-radius:15px;
        }
	</style>
</head>
<body >
    
  <div class="topnav" id="myTopnav" style="font-family:'Times New Roman';background-color: #8a1528 !important;width: 96%;color:azure;height: 50px; vertical-align: middle !important;border-radius:0px">
    <a href="https://rait.ac.in" title="LOGOUT" style="float:left; margin-right:5px;margin-top: 10px !important;font-size:20px;"><b style="color: white;">WELCOME User</b></a>
    <a href="logout.php" title="LOGOUT" style="float:right; margin-right:5px;margin-top: 12px !important;"><b  style="color: white;margin-right: 10px;font-size:20px">LOGOUT</b></a>
    <!-- <a href="student/update/updateprofile-anon.php" title="UPDATE" style="float:right;margin-right:7px;margin-top: 12px !important;"><b style="color: white;font-size:20px;">PROFILE</b></a> -->
    <a href="student/bonhafide/change_password.php" title="UPDATE" style="float:right;margin-right:7px;margin-top: 10px !important;font-size:20px"><b style="color: white;">CHANGE PASSWORD</b></a>
</div>
<div class="content">
<?php if( $_SESSION['access']=='Yes' && $_SESSION['user']!='admin'){?>
        <a href="udash2.html"><button style="position:absolute;right:0px;top:60px">Back</button></a>
        <?php } if( $_SESSION['access']=='No' && $_SESSION['user']!='admin'){?>
            <a href="udash1.html"><button style="position:absolute;right:0px;top:60px">Back</button></a>
            <?php } if($_SESSION['user']=='Admin'){?>
				<a href="admin.html"><button style="position:absolute;right:0px;top:60px">Back</button></a>
				<?php
			} ?>
    <h1 style="color:#121212;padding-top: 0px;">Ongoing Events</h1>
    <hr style="border: 2px solid #121212;border-radius:24px;">
	<?php 
	$date = date('20y-m-d');
	$user=$_SESSION['user'];
	$query2="select * from events where  Approval not like 'No'  and Creator not like '$user' and Date ='$date'";
	$res2=mysqli_query($conn,$query2);
	$c=mysqli_num_rows($res2); 
	if($c>0){
	while($row1=mysqli_fetch_assoc($res2)){ 
	?>
    <div class="container" style="left:0px;padding-top:0px;height:50px">
    <div clas="card" id="c1" style="position:absolute;left:0px;border:1px solid #121212;width:100%;height:150px;">   
    <div class="box" id="b1" style="position:absolute;left:0px;width:480px;top:1px;">
        <h5><?php echo $row1['Name'];?></h5>
        <h5>Description:</h5>
        <h7><?php echo $row1['Description'];?></h7>
    </div>
    <div class="box" id="b2" style="position:absolute;left:485px;width:380px;top:1px;">
        <h5>Room : <?php echo $row1['Room'];?></h5>
        <h5 style="padding-top: 2px;">Date: <?php echo $row1['Date'];?> </h5>
        <h5 style="padding-top:2px">Timing: <?php echo $row1['Stime'];?> - <?php echo $row1['Etime'];?></</h5>
    </div>
    <div class="box" id="b3" style="position:absolute;right:50px;width:180px;top:1px">
	<?php
	$user=$_SESSION['user']; 
	$e=$row1['Id'];
	$type=$_SESSION['type'];
                $query2="select * from `$e` where uname like '$user'";
                $res1=mysqli_query($conn,$query2);
                $r=mysqli_num_rows($res1);
                if($type!='Admin'){
                if($r!=0){
                  ?>
                  <button id="bt1" style="height:140px;width:100%;font-size: 20px;">Registered</button>
                <?php
                }else{
				?>
				<form action="r.php" method="POST">
            <button id="bt1" name='id' type="submit" value=<?php echo $row1['Id'];?> style="height:140px;width:100%;font-size: 20px;">Register</button>
				</form>
				<?php }
				}else{?>
					<div class="box" id="b4" style="position:absolute;right:240px;width:180px;top:1px">
					<form action='edit.php' method='post'>
							<button id="bt1" name="id" type="submit" value=<?php echo $row1['Id']?> style="height:140px;width:100%;font-size: 20px;">Edit</button>
						</form>
						</div>
					<div class="box" id="b3" style="position:absolute;right:50px;width:180px;top:1px">
						<form action='det.php' method='post'>
							<button id="bt1"  name="id" type="submit" value=<?php echo $row1['Id']?> style="height:140px;width:100%;font-size: 20px;">Details</button>
						</form>
								</div>   
						</div>
				<?php }
				?>
                </div>   
        </div>
        </div>
	<?php }
	}?>
</div>
</body>
</html>