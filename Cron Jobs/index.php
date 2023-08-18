<?php

	require('controller/controller_admin.php');

	if (isset($_GET['action'])) 
	{
		
				if ($_GET['action'] == "home") 
				{
					$controls_admin = new Controls_Admin();
					$controls_admin -> home();
				}

				if ($_GET['action'] == "submitThisClientForm") 
				{
					$companyName = $_POST['companyName'];
					$email = $_POST['userEmail'];
					$userName = $_POST['userName'];
					$password = $_POST['password'];
					$repeatPassword = $_POST['repeatPassword'];
					$websiteLink = $_POST['websiteLink'];
					$targetPage = $_POST['targetPage'];
				 	$controls_admin = new Controls_Admin();
				 	$controls_admin -> submitThisClientForm($companyName, $email, $userName, $password, $repeatPassword, $websiteLink, $targetPage);
				} 

				if ($_GET['action'] == "wrongPasswordToCreateAccount") 
				{
				 	$controls_admin = new Controls_Admin();
				 	$controls_admin -> wrongPasswordToCreateAccount();
				}

				if ($_GET['action'] == "loginPage") 
				{

				 	$controls_admin = new Controls_Admin();
				 	$controls_admin -> loginPage();
				}

				if($_GET['action'] == "loginThisClient") 
				{
					$email = $_POST['userEmail'];
					$password = $_POST['password'];

				 	$controls_admin = new Controls_Admin();
				 	$controls_admin -> loginThisClient($email, $password);
				} 

				if($_GET['action'] == "dashboard") 
				{
				 	$controls_admin = new Controls_Admin();
				 	$controls_admin -> dashboard();
				}


				if ($_GET['action'] == "deleteThisTask") 
				{
				 	$taskIdToDelete = $_GET['taskId'];
					$controls_admin = new Controls_Admin();
					$controls_admin -> deleteThisTask($taskIdToDelete);
				} 

				if ($_GET['action'] == "addANewTask") 
				{
					$controls_admin = new Controls_Admin();
					$controls_admin -> addANewTask();
				} 

				if ($_GET['action'] == "addThisTask") 
				{
					$taskLink = $_POST['taskLink'];
					$taskDate = $_POST['taskDate'];
					$taskTime = $_POST['taskTime'];
					
					echo $taskLink . "<br>" . $taskDate . "<br>" . $taskTime;
					$controls_admin = new Controls_Admin();
					$controls_admin -> addThisTask($taskLink, $taskDate, $taskTime);
				} 




				if($_GET['action'] == "logout") 
				{
				 	$controls_admin = new Controls_Admin();
				 	$controls_admin -> logout();
				}



	}


	else
	{
		$controls_admin = new Controls_Admin();
		
		$controls_admin -> home();
	}

?>