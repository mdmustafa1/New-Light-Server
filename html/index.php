<?php
$host = "mysql_server";
$user = "radhu";
$password = "radhu";
$db= "mysql_db";
  try
	{	
  
	$conn = new PDO("mysql:host=$host;dbname=$db" , $user , $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);	
	echo "YOU ARE CONNECTED SUCCESSFULLY!!" ;	
	}catch(PDOException $e ){

	echo "CONNECTION FAILED !! TRY AGAIN :( " . $e->getMessage();		
	}

?>
