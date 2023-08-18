<?php

require_once('model/userManager.php');

class Controls_Admin
{		

	function executor($currentDate, $currentTime)
	{	
		$userManager = new userManager();
		$executor = $userManager -> executor($currentDate, $currentTime);

		$totalResult = $executor -> rowCount();

		echo $currentDate . "<br>";

		echo $currentTime . "<br>";

		echo $totalResult . " result found !";

		if ($totalResult > 0) 
		{
			echo "executing task"; 
			
			while ($row = $executor -> fetch()) 
			{
				$taskLink = $row['taskLink'];
				
				//include_once('view/taskExecutor/taskExecutor.php');
				header("location: " . $taskLink);
			}
		}

		else
		{
			echo "no tasks to execute";

		}	
	}
}

?>