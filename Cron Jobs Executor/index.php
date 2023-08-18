<?php

	require('controller/controller_admin.php');

	if (isset($_GET['action'])) 
	{

	}


	else
	{
		
		$currentDate = date("Y-m-d");
		$currentTime = date("h:i:s");
		
		$controls_admin = new Controls_Admin();
		$controls_admin -> executor($currentDate, $currentTime);
	}

?>