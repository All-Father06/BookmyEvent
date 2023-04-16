<?php
session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Event Creation</title>
  </head>
  <?php
  include ('conn.php');
  $id=$_POST['id'];
  $q="SELECT * FROM `events` where `Id` like '$id'";
  $res=mysqli_fetch_assoc(mysqli_query($conn,$q));
  $name=$res['Name'];
  $des=$res['Description'];
  $date=$res['Date'];
  $st=$res['Stime'];
  $et=$res['Etime'];
  $_SESSION['user'];
  ?>
  <body>
    <!-- Navbar -->
    <!-- Page Content -->
	<?php if( $_SESSION['access']=='Yes' && $_SESSION['user'] !='Admin'){?>
        <a href="udash2.html"><button style="positionolute;right:0px;top:60px">Back</button></a>
        <?php } if( $_SESSION['access']=='No' && $_SESSION['user'] !='Admin'){?>
            <a href="udash1.html"><button style="pos:absition:absolute;right:0px;top:60px">Back</button></a>
            <?php } if($_SESSION['user'] =='Admin'){?>
				<a href="admin.html"><button style="position:absolute;right:0px;top:60px">Back</button></a>
				<?php
			} ?>
    <div class="container" style="align-self: center;position:absolute;left:20%;top:10%">
      <form class="card" style="align-self: center;position: absolute ;left:20%" action="edit2.php" method="POST">
		<h1  style="color: #fff;">Edit the Event</h1>
        <label style="color: #fff;">Event Name: <input id="name" name="name" type="text"  value="<?php echo $name?>"></label>
	
		<br>
        <label style="color: #fff;">Date: <input id="date" name="date" type="date"  value="<?php echo $date?>"></label>
		<br>
        <label style="color: #fff;">Start Time: <input id="stime" name="stime"type="time"  value="<?php echo $st?>"></label>
		<br>
		<label style="color: #fff;">End Time: <input id="etime" name="etime"type="time"  value="<?php echo $et?>">
    </label>
		<br>
        <label style="color: #fff;">Description:</h3>
			<br>
        <textarea id="des" name="des" rows="10" cols="50" ><?php echo $des?></textarea>
		<br>
        <button name="Id" type="submit" value=<?php echo $id?>>Update Event</button>
	  </form>
    </div>
    <!-- CSS Styling -->
    <style>
      
      

		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
            background-image: url("74-745665_event-management-system.jpg");
            align-self: center;		}

		.container {
			max-width: 2000px;
			margin: 0 auto;
			padding: 20px;
            height:500px;
            align-self: center;
            align-content: center;
            
		}

		.card {
			background-color: #b51a4e;
			box-shadow: 0 2px 4px rgba(181, 103, 103, 0.2);
			margin-bottom: 20px;
			padding: 20px;
			border-radius: 4px;
			display: flex;
			flex-direction: column;
            height: 500px;
            color:#fff;
            width:750px;
            align-self: center;
            align-content: center;
            align-items: center;
            box-shadow: 0 0 5px 0 ;
      		background: inherit;
      		backdrop-filter: blur(10px);
		}

		.card h2 {
			font-size: 20px;
			margin-bottom: 10px;
            align-self: center;
		}

		.card p {
			font-size: 16px;
			margin-bottom: 10px;
		}

		.card img {
			width:200px;
            height: 100px;
			margin-bottom: 10px;
            align-self: center;
		}

		.card button {
			background-color: #ff7789;
			border: none;
			color: #fff;
			padding: 10px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 4px;
			align-self: flex-end;
		}

		.card button:hover {
			background-color: #3e8e41;
		}
        .topnav {
				overflow: hidden;
				background-color: #811d3a;
				width: 60%;
        top:55px;
        text-align:center;

			}

			.topnav i {
				font-size: 20px;
				color: #f2f2f2;
				margin-left:880px;
				float: right;
				margin-bottom: 3px;
				margin-right: 10px;
			}

			.topnav a {

				display: block;
				color: #f2f2f2;
				text-align: center;
				text-decoration: none;
				font-size: 15px;
				padding: 5px 0 15px 0px;
				align: center;
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
					display: block;
					font-size: 8px;
				}

				.topnav {
					margin-left: 22px;
					width: 100%;top:55px;text-align:center;width:				
                }

				.topnav i {
					font-size: 30px;
					color: #f2f2f2;
					float: right;
					margin-bottom: 15px;
					margin-top: 9px;
				}
	</style>

</html>
