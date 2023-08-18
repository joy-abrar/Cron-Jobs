<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}

	if ($_SESSION['sessionStatus'] === "online") 
	{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Cron Jobs - Add Task</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="icon" href="view/addANewTask/images/logo.png">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Sans">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel">
			<!--<link rel="stylesheet" href="view/dashboard/w3.css">-->
			<link rel="stylesheet" type="text/css" href="view/addANewTask/style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="lib/css/menuBarStyle.css?version=1.0">
		</head>
		<body>

			<?php
				include_once('lib/topMenuBar.php');
			?>
			
			<div id="headerTitleBloc">
				<center><h2 id="headerTitle">Cron Jobs - Add A Task</h2></center>
			</div>


			<div id="mainBloc">
				<form id="addtaskFormBloc" method="POST" action="index.php?action=addThisTask">
					<h4><label>Task Link: </label></h4>
					<h5><input type="text" name="taskLink"></h5>

					<h4><label>Schedule Date: </label></h4>
					<h5><input type="date" name="taskDate"></h5>

					<h4><label>Schedule Time: </label></h4>
					<h5><input type="time" name="taskTime"></h5>

					<input type="submit" name="submit" value="Add Task">
				</form>
			</div>
			<script type="text/javascript" src="view/addANewTask/main.js"></script>
		</body>
		</html>

<?php

	}

	else
	{
		header("location: index.php?action=home");
	}
?>