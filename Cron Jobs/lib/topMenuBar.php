<?php
	
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}
		if ($_SESSION['sessionStatus'] === "online") 
		{
?>
			<div id="menuNavBloc">
				<div id="menuNavSubBlocOne">
					<b id="menuNavSubBlocOneContent"><?= $_SESSION['userName'] ?></b>
				</div>

				<div id="menuNavSubBlocTwo">
					<b id="menuNavSubBlocTwoContent"><a href="#">My Tasks</a></b>
				</div>

				<div id="menuNavSubBlocThree">
					<b id="menuNavSubBlocThreeContent"><a href="index.php?action=addANewTask">Add a new task</a></b>
				</div>

				<div id="menuNavSubBlocFour">
					<b id="menuNavSubBlocFourContent"><a href="index.php?action=logout">Logout</a></b>
				</div>
			</div>	
<?php
		}

?>