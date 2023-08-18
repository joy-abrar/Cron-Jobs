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
			<title>Cron Jobs - Dashboard</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="icon" href="view/dashboard/images/logo.png">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin Sans">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel">
			<!--<link rel="stylesheet" href="view/dashboard/w3.css">-->
			<link rel="stylesheet" type="text/css" href="view/dashboard/style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="lib/css/menuBarStyle.css?version=1.0">
		</head>
		<body>

			<?php
				include_once('lib/topMenuBar.php');
			?>
			
			<div id="headerTitleBloc">
				<center><h2 id="headerTitle">Cron Jobs - Dashboard</h2></center>
			</div>

			<table>
				<tbody>
				<tr>
					<?php
						while ($rows2 = $getAllTasksForDashboard -> fetch())
						{

					?>
							<td><?= $rows2['taskLink']; ?> | </td>
							
							<td><?= $rows2['taskDate'] . " " . $rows2['taskTime']; ?> | </td>
							<td><?php 
									if ($rows2['taskStatus'] == 0) 
									{
								?>
										<td>Not Completed | </td>
								<?php
									} 

									if ($rows2['taskStatus'] == 1) 
									{
								?>
										<td>Completed | </td>
								<?php
									}
								?>	
							<td><a href="index.php?action=deleteThisTask&taskId=<?= $rows2['id'] ?>">Delete</a></td>
					<?php
						}	

					?>	

							
				</tr>
				</tbody>
				

			</table>

			<div id="mainBloc">
			</div>
			<script type="text/javascript" src="view/dashboard/main.js"></script>
		</body>
		</html>

<?php

	}

	else
	{
		header("location: index.php?action=home");
	}
?>