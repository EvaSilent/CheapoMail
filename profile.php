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
<link rel="stylesheet" href="popup.css" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="popup.js"></script>

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
				<div class="moption" id="onclick">Compose</div>
				<br>
				<div id="inbox" class="moption"> Inbox</div>
				<br>
				<div id="sentmessage" class="moption"> Sent</div>
			</div>
		</td>
	</tr>
</table>
<!-- Compose Form -->
<div id="contactdiv">
<form class="form" action="#" id="contact">
<img src="images/button_cancel.png" class="img" id="cancel"/>
<h3>Compose</h3>
<label>TO: <span>*</span></label>
<input type="text" id="name" placeholder="Recipient"/>
<label>Subject: <span>*</span></label>
<input type="text" id="subject" placeholder="Subject"/>
<label>Message:</label>
<textarea id="message" placeholder="Message......."></textarea>
<input type="button" id="send" value="Send"/>
<input type="button" id="cancel" value="Cancel"/>
<br/>
</form>
</div>

<!-- Inbox Form -->
<div id="sentdiv">
<form class="form" action="#" id="in">
<img src="images/button_cancel.png" class="img" id="cancel"/>
<h3>Inbox</h3>
<input type="button" id="cancel" value="Cancel"/>
<br/>
</form>
</div>

<!-- Sent Form -->
<div id="senddiv">
<form class="form" action="#" id="out">
<img src="images/button_cancel.png" class="img" id="cancel"/>
<h3>Sent Message</h3>
<input type="button" id="cancel" value="Cancel"/>
<br/>
</form>
</div>
</body>
</html>