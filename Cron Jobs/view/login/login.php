<!DOCTYPE html>
<html>
<head>
	<title>Cron Jobs - login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="view/login/images/logo.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Sans">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel">
	<!--<link rel="stylesheet" href="view/login/w3.css">-->
	<link rel="stylesheet" type="text/css" href="view/login/style.css?version=1.0">
	<link rel="stylesheet" type="text/css" href="lib/css/menuBarStyle.css?version=1.0">
</head>
<body>
	
	<div id="headerTitleBloc">
		<center><h1 id="headerTitle">Cron Jobs - login</h1></center>
	</div>


	<div id="mainBloc">

		<form id="submitForm" method="POST" action="index.php?action=loginThisClient">
			<div id="submitFormDiv">
				<label for="userName">YOUR EMAIL</label>
				<input type="email" name="userEmail" placeholder="Your email address here..." autocomplete="off">
				<br><br>

				<label for="password">YOUR PASSWORD</label>
				<input type="password" name="password" placeholder="Your password here..." autocomplete="off">
				<br><br>

				<input id="submitThisClientFormButton" type="submit" name="send" value="Login">
			</div>
		</form>
		
	</div>

	<br><br>
	<center>
		<div id="loginNow">
		<b>Don't have any account ? <a style="text-decoration: none; color: blue;" href="index.php?action=home">Create Now !</a></b> 
	</center>

	<script type="text/javascript" src="view/login/main.js"></script>
</body>
</html>