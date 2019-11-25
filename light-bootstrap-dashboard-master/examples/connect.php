<?php
	$dsn = 'mysql:host=localhost;dbname=qlttnn';
	$username = 'root';
	$passwd = '';

	try
	{
		$db = new PDO($dsn, $username, $passwd);
		echo "Connected";
	}
	catch(PDOException $e)
	{
		$error = $e->getMessage();
		echo $error;
	}
?>