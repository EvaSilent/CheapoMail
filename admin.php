<?php
include('login.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Cheapo Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="validate.js"></script>
<script type="text/javascript" src="jquery.ui.shake.js"></script>
<link rel="icon" href="images/mail.png" sizes="32x32" type="image/png">     
<link rel="stylesheet" href="cheapo.css" type="text/css" />
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<table>
	

	<tr id="content_row">
		<td id="colm">
	        <div id="menu">					
				<br>
				<div id="compose" class="moption">Compose</div>
				<br>
				<div id="inbox" class="moption"> Inbox</div>
				<br>
				<div id="sentmessage" class="moption"> Sent</div>
			</div>
		</td>
		
		
		
	</tr>
</table>
</body>
</html>