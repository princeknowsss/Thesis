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
            <a class="blackie" href="AdminRoomType.php"><li class= "selected"><b>ROOMS</b></li></a>
			<a class="blackie" href="AdminFacilities.php"><li><b>FACILITIES</b></li></a>
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
		<p class="main_topicfont">TYPES OF ROOMS</p>
		<br>		
        <table>
			<tr>
				<td><a href="#"><img src="IMG/SingleRoom.png" alt="SingleRoomImage" width="250" height="150"></a><br><center>Single Room</center></td>
				<td><a href="#"><img src="IMG/DoubleRoom.png" alt="DoubleRoomImage" width="250" height="150"></a><br><center>Double Room</center></td>
			</tr>
			<tr>
				<td><a href="#"><img src="IMG/TripleRoom.png" alt="TripleRoomImage" width="250" height="150"></a><br><center>Triple Room</center></td>
				<td><a href="#"><img src="IMG/TwinBeddedRoom.png" alt="TwinBeddedRoomImage" width="250" height="150"></a><br><center>Twin Bedded Room</center></td>
			</tr>
			<tr>
				<td><a href="#"><img src="IMG/QueenBedroom.png" alt="QueenBedroomImage" width="250" height="150"></a><br><center>Queen Bedroom</center></td>
				<td><a href="#"><img src="IMG/KingBedroom.png" alt="KingBedroomImage" width="250" height="150"></a><br><center>King Bedroom</center></td>
			</tr>
		</table>
    </div>
</div>

</body>
</html>