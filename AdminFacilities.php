<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="CSS/AdminCSS.css">
	
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>HOTEL SYSTEM</h2>
		<center><img class="margins" src="IMG/Logo.png" alt="Logo" width="175" height="175"></center>
		<h3 align="center">ADMIN</h3>
		<hr class="colorBlack">
        <ul>
            <a class="blackie" href="AdminRoomType.php"><li><b>ROOMS</b></li></a>
			<a class="blackie" href="AdminFacilities.php"><li class= "selected"><b>FACILITIES</b></li></a>
            <a class="blackie" href="AdminServices.php"><li><b>SERVICES</b></li></a>
			<a class="blackie" href="AdminMaintenanceOfFees.php"><li><b>MAINTENANCE OF FEES</b></li></a>
			<a class="blackie" href="AdminGuestList.php"><li><b>GUEST LIST</b></li></a>
			<a class="blackie" href="AdminExtendSchedule.php"><li><b>EXTEND SCHEDULE</b></li></a>
			<a class="blackie" href="AdminReports.php"><li><b>REPORTS</b></li></a>
			<a class="blackie" href="AdminAboutUs.php"><li><b>ABOUT US</b></li></a>
        </ul> 
        <div class="login">
          <a href="AdminLoginForm.php">LOGOUT</a>
      </div>
    </div>
    <div class="main_content">
		<p class="main_topicfont">FACILITIES</p>
		<br>
		<table>
			<tr>
				<td><a href="#"><img src="IMG/WaitingLounge.png" alt="WaitingLoungeImage" width="250" height="150"></a><br><center>Waiting Lounge</center></td>
				<td><a href="#"><img src="IMG/GamingArea.png" alt="GamingAreaImage" width="250" height="150"></a><br><center>Gaming Area</center></td>
				<td><a href="#"><img src="IMG/BanquetArea.png" alt="BanquetAreaImage" width="250" height="150"></a><br><center>Banquet Area</center></td>
			</tr>
			<tr>
				<td><a href="#"><img src="IMG/Bar.png" alt="BarImage" width="250" height="150"></a><br><center>Bar</center></td>
				<td><a href="#"><img src="IMG/SwimmingPool.png" alt="SwimmingPoolImage" width="250" height="150"></a><br><center>Swimming Pool</center></td>
				<td><a href="#"><img src="IMG/Sauna.png" alt="SaunaImage" width="250" height="150"></a><br><center>Sauna</center></td>
			</tr>
			<tr>
				<td><a href="#"><img src="IMG/Restaurant.png" alt="RestaurantImage" width="250" height="150"></a><br><center>Restaurant</center></td>
				<td><a href="#"><img src="IMG/CarkParking.png" alt="CarParkingImage" width="250" height="150"></a><br><center>Car Parking</center></td>
				<td><a href="#"><img src="IMG/FitnessArea.png" alt="FitnessAreaImage" width="250" height="150"></a><br><center>Fitness Area</center></td>
			</tr>
		</table>
    </div>
</div>

</body>
</html>