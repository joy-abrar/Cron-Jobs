<?php

require_once('model/userManager.php');

class Controls_Admin
{		
	function home()
	{
		//$userManager = new userManager();
		include_once("view/home/home.php");
	}

	function submitThisClientForm($companyName, $email, $userName, $password, $repeatPassword, $websiteLink, $targetPage)
	{
		if ($password === $repeatPassword) 
		{
			
			$userManager = new userManager();
			$submitThisClientForm = $userManager -> submitThisClientForm($companyName, $email, $userName, $password, $repeatPassword, $websiteLink, $targetPage);

			$getTaskForCronTask = $userManager -> getTaskForCronTask($email, $userName, $password);	

			$numberOfResults = $getTaskForCronTask -> rowCount();

			if ($numberOfResults == 1) 
			{
				while($rows = $getTaskForCronTask -> fetch())
				{
					$userIdForTask = $rows['id'];
					$userTargetTask = $rows['userTargetTask'];

					echo $userTargetTask;
				}
				
				$addTaskIntoCronTask = $userManager -> addTaskIntoCronTask($userIdForTask, $userTargetTask);
			}
						
			header("location: index.php?action=loginPage");
		}

		else
		{
			header("location: index.php?wrongPasswordToCreateAccount");
		}
		
	}

	function wrongPasswordToCreateAccount()
	{
		if ($password === $repeatPassword) 
		{	
			include_once("view/wrongPassword/wrongPassword.php");
		}

		else
		{
			header("location: index.php?wrongPasswordToCreateAccount");
		}
		
	}

	function loginPage()
	{

	include_once('view/login/login.php');
		
	}

	function loginThisClient($email, $password)
	{	
		if (session_status() === PHP_SESSION_NONE) 
		{
			session_start();
		}
		$userManager = new userManager();
		$loginThisClient = $userManager -> loginThisClient($email, $password);
	
		$numberOfResult = $loginThisClient -> rowCount();

		$userId = null;
		
		if ($numberOfResult === 1) 
		{
			while ($rows = $loginThisClient -> fetch()) 
			{	
				$_SESSION['sessionStatus'] = "online";

				$_SESSION['userId'] = $rows['id'];
				$_SESSION['userCompanyName'] = $rows['userCompanyName'];
				$_SESSION['userName'] = $rows['userName'];
				$_SESSION['userEmail'] = $rows['userEmail'];
				$_SESSION['userPassword'] = $rows['userPassword'];
				$_SESSION['userWebsite'] = $rows['userWebsite'];
				$_SESSION['userTargetTask'] = $rows['userTargetTask'];
			
				
			}
			header('location: index.php?action=dashboard');
		}

		
	}

	function dashboard()
	{	
		if (session_status() === PHP_SESSION_NONE) 
		{
			session_start();
		}
		$userId = $_SESSION['userId'];

		$userManager = new userManager();
		$getAllTasksForDashboard = $userManager -> getAllTasksForDashboard($userId);

		include_once('view/dashboard/dashboard.php');	
	}

	function deleteThisTask($taskIdToDelete)
	{	
		$userManager = new userManager();
		$deleteThisTask = $userManager -> deleteThisTask($taskIdToDelete);

		header('location: index.php?action=dashboard');	
	}

	function addANewTask()
	{	
		include_once('view/addANewTask/addANewTask.php');	
	}

	function addThisTask($taskLink, $taskDate, $taskTime)
	{	
		if (session_status() === PHP_SESSION_NONE) 
		{
			session_start();
		}

		$userId = $_SESSION['userId'];
		
		$userManager = new userManager();
		$addThisTask = $userManager -> addThisTask($userId, $taskLink, $taskDate, $taskTime);
		
		header("location: index.php?action=dashboard");	
	}


	function logout()
	{
		if (session_status() === PHP_SESSION_NONE) 
		{
			session_start();
		}
		$_SESSION['sessionStatus'] = null;
		session_unset();
		session_destroy();
		header("location: index.php");
	}

}

?>