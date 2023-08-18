<!DOCTYPE html>
<html>
<head>
	<title>Cron Jobs</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="view/home/images/logo.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Sans">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel">
	<!--<link rel="stylesheet" href="view/home/w3.css">-->
	<link rel="stylesheet" type="text/css" href="view/home/style.css?version=1.0">
</head>
<body>
	
	<div id="headerTitleBloc">
		<center><h1 id="headerTitle">Cron Jobs</h1></center>
	</div>


	<div id="mainBloc">

		<form id="submitForm" method="POST" action="index.php?action=submitThisClientForm">
			<div id="submitFormDiv">
				<label for="companyName">YOUR COMPANY NAME</label>
				<input type="text" name="companyName" placeholder="Your company name here...">
				<br><br>

				<label for="userName">YOUR USERNAME</label>
				<input type="text" name="userName" placeholder="Your username name here...">
				<br><br>

				<label for="userName">YOUR EMAIL</label>
				<input type="email" name="userEmail" placeholder="Your email address here...">
				<br><br>

				<label for="password">YOUR PASSWORD</label>
				<input type="password" name="password" placeholder="Your password here...">
				<br><br>

				<label for="repeatPassword">RETYPE YOUR PASSWORD</label>
				<input type="password" name="repeatPassword" placeholder="Retype your password here...">
				<br><br>

				<label for="websiteLink">YOUR WEBSITE URL</label>
				<input type="text" name="websiteLink" placeholder="Your website link here...">
				<br><br>

				<label for="targetPage">YOUR TARGET PAGE</label>
				<input type="text" name="targetPage" placeholder="Your target page here...">
				<br><br>

				<input id="submitThisClientFormButton" type="submit" name="send" value="Submit">
			</div>
		</form>
		
	</div>
	
	<br>

	<center>
		<div id="loginNow">
		<b>Already an account ? <a style="text-decoration: none; color: blue;" href="index.php?action=loginPage">Login Now !</a></b> 
	</center>
	</div>
	<script type="text/javascript" src="view/home/main.js"></script>
</body>
</html>