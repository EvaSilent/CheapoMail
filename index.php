<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="validate.js"></script>
<script type="text/javascript" src="jquery.ui.shake.js"></script>
<link rel="icon" href="images/mail.png" sizes="32x32" type="image/png">     
<link rel="stylesheet" href="styles.css" type="text/css" />
<title>Cheapo Mail</title>

</head>
<body>
<?php session_start(); ?>
	<div id="profile">
     	<?php
   	if(isset($_SESSION['user_name'])){
			?>
	<a href='logout.php'>Logout</a>
		<?php } ?>
	</div>
</body>
<?php 
if(empty($_SESSION['user_name'])){?>
<div class="container" id="login_form">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Cheapo Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="user_name"  name="user_name"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password"  name="password"/>
			</div>
		        <div class="err" id="add_err"></div>
			<div>
					<input type="submit" value="Log in" id="login"  />
				<a href="#">Lost your password?</a>
				<a href="#">Register</a>
			</div>
		</form><!-- form -->
		<div class="button">
			
		</div><!-- button -->
	</section><!-- content -->
</div>
<?php }?>
<!-- container -->
</html>