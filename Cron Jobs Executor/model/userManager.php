<?php
	require_once('Manager.php');

	class userManager extends Manager
	{

		public function executor($currentDate, $currentTime)
		{
			$db = $this->dbConnect();
			$executor = $db -> prepare('SELECT * FROM crontask WHERE taskDate = ? AND taskTime = ?');
			$executor -> execute(array($currentDate, $currentTime));
			return $executor;
		}
		
	}


?>