<!DOCTYPE html>
<?php
session_start(); 
?>
<head></head>
	<title>User Dashboard </title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Custom CSS -->
	<style>
    body{
      overflow-y: auto;
      background-image: url("4010569.webp");
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
        <?php } 
        if( $_SESSION['access']=='No' && $_SESSION['user']!='admin'){?>?>
        `    <a href="udash1.html"><button style="position:absolute;right:0px;top:60px">Back</button></a>
            <?php } 
            if($_SESSION['user']=='Admin')
            {?>
				<a href="admin.html"><button style="position:absolute;right:0px;top:60px">Back</button></a>
			<?php
        } ?>
    <h1 style="color:#121212;padding-top: 0px;">Users</h1>
    
    <hr style="border: 2px solid #121212;border-radius:24px;">
    <div class="container" style="left:0px;padding-top:0px;height:50px">
    <table class="table table-striped table-dark">
  <thead>  
    <tr>
      <th scope="col">Participant Id</th>
      <th scope="col">Participant Name</th>
      <th scope="col">Participant Feedback</th>
    </tr>
  </thead>
  <?php
    include ('conn.php');
        $u=$_SESSION['user'];
        $t=$_POST['id'];
        $q1="SELECT * from `$t`";
        $e=mysqli_query($conn,$q1);
        $n=mysqli_num_rows($e);
        if($n>0){
while($d1=mysqli_fetch_assoc($e)){
     ?>
  <tbody>
    <tr>
      <td><?php echo $d1['Id']?></td>
      <td><?php echo $d1['uname']?></td>
      <td><?php echo $d1['feedback']?></td>
        <?php } 
        }
        ?>
  </tbody>
</table>
</div>
</body>
</html>