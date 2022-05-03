<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="CSS/LoginForm.css">
	
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>HOTEL SYSTEM</h2>
		<center><img class="margins" src="IMG/Logo.png" alt="Logo" width="175" height="175"></center>
		<hr class="colorBlack">
        <ul>
            <a class="blackie" href="AdminLoginForm.php"><li class="twomodules selected">ADMIN</li></a>
            <a class="blackie" href="GuestLoginForm.php"><li class= "twomodules">GUEST</li></a>
        </ul> 
    </div>
    <div class="main_content">
		<br>
		<form>
			<table >
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr>
				<tr>
					<td align="center"><input type="text" id="username" name="username" placeholder="Input username..."></td>
				</tr>
				<tr>
					<td align="center"><br><br><input type="password" id="password" name="password" placeholder="Input password..."></td>
				</tr>
				<tr>
					<td align="left"><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="rememberme" name="rememberme" value="rememberme">
					<label>Remember Me</label>
					<!--<input type="submit" value="Submit">-->
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forget your password? <a href="#">Click here</a>
					</td>
				</tr>
				<tr>
					<td align="right">
						<input type="button" value="Sign In">&nbsp;&nbsp;<br><br>
					</td>
				</td>
			</table>
			&nbsp;&nbsp;
			<img style="border: 2px solid black;" src="IMG/HotelBackground.png" width="500" height="600">
		</form>
    </div>
</div>

</body>
</html>