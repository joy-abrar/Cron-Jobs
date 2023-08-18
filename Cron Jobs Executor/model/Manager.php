<?php 
	class Manager 
	{ 
		protected function dbConnect() 
		{ 
			/*
			$host_name = 'db5009805072.hosting-data.io'; 
			$database = 'dbs8311472'; 
			$user_name = 'dbu1341373'; 
			$password = 'Allahuakbar__1'; 
			$db = null; 
			*/

			$host_name = 'localhost'; 
			$database = 'cronjobs'; 
			$user_name = 'root'; 
			$password = ''; 
			$db = null;

			try 
			{ 
				$db = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password);
				return $db; 
			} 
			catch (PDOException $e) 
			{ 
				echo "Erreur!: " . $e->getMessage() . "<br/>"; 
				die(); 
			} 
		} 
	}

