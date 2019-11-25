<?php
	include("connect.php");
	include("function_base.php");

	try
	{
		if(isset($_POST['ma_khoa']) and isset($_POST['ten_khoa']) and isset($_POST['ngon_ngu']))
		{

			$ma_kh = $_POST['ma_khoa'];
			$ten_kh = $_POST['ten_khoa'];
			$nn =  $_POST['ngon_ngu'];

			$a = "INSERT into course values('$ma_kh','$ten_kh','$nn')";
			mysqli_query($a);
			chuyentrang("add_kh.php");
		}

	}catch(Exception $e)

	{
		$error = $e->getMessage();
		echo $error;	
	}

	
	// else
	// 	tranngtruoc();
?>