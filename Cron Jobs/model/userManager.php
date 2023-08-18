<?php
	require_once('Manager.php');

	class userManager extends Manager
	{

		public function home()
		{
			$db = $this->dbConnect();
			$home = $db -> prepare('INSERT INTO db() VALUES()');
			$home -> execute(array());
			return $home;
		}

		public function submitThisClientForm($companyName, $email, $userName, $password, $websiteLink, $targetPage)
		{
			$db = $this->dbConnect();
			$submitThisClientForm = $db -> prepare('INSERT INTO user_client(userCompanyName, userName, userEmail, userPassword,	userWebsite,userTargetTask) VALUES(?, ?, ?, ?, ?, ?)');
			$submitThisClientForm -> execute(array($companyName, $userName, $email, $password, $websiteLink, $targetPage));
			return $submitThisClientForm;
		}

		public function getTaskForCronTask($email, $userName, $password)
		{
			$db = $this->dbConnect();
			$getTaskForCronTask = $db -> prepare('SELECT * FROM user_client WHERE userName = ? AND userEmail = ? AND userPassword = ?');
			$getTaskForCronTask -> execute(array($userName, $email, $password));
			return $getTaskForCronTask;
		}

		public function addTaskIntoCronTask($userIdForTask, $userTargetTask)
		{
			$taskStatus = 0;
			$db = $this->dbConnect();
			$getTaskForCronTask = $db -> prepare('INSERT INTO crontask(userId, taskLink, taskStatus) VALUES(?, ?, ?)');
			$getTaskForCronTask -> execute(array($userIdForTask,$userTargetTask, $taskStatus));
			return $getTaskForCronTask;
		}

		public function loginThisClient($email, $password)
		{
			$db = $this->dbConnect();
			$loginThisClient = $db -> prepare('SELECT * FROM user_client WHERE userEmail = ? AND userPassword = ?');
			$loginThisClient -> execute(array($email, $password));
			return $loginThisClient;
		}

		public function getAllTasksForDashboard($userId)
		{
			$db = $this -> dbConnect();

			$userManager = new userManager();
			$getAllTasksForDashboard = $db->prepare('SELECT * FROM crontask WHERE userId = ?');
			$getAllTasksForDashboard -> execute(array($userId));
			return $getAllTasksForDashboard; 
		}

		public function deleteThisTask($taskIdToDelete)
		{
			$db = $this -> dbConnect();

			$userManager = new userManager();
			$deleteThisTask = $db->prepare('DELETE FROM crontask WHERE id = ?');
			$deleteThisTask -> execute(array($taskIdToDelete));
			return $deleteThisTask;
		}

		public function addThisTask($userId, $taskLink, $taskDate, $taskTime)
		{
			$taskStatus = 0;
			$db = $this -> dbConnect();
			$userManager = new userManager();
			$addThisTask = $db->prepare('INSERT INTO crontask(userId, taskLink, taskDate, taskTime, taskStatus) VALUES(?, ?, ?, ?, ?)');
			$addThisTask -> execute(array($userId, $taskLink, $taskDate, $taskTime, $taskStatus));
			return $addThisTask;
		}
		
	}


?>