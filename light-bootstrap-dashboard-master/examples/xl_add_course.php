<?php
	$ma_khoa = $_POST['ma_kh'];
	$ten_khoa = $_POST['ten_kh'];
	$nn = $_POST['ngon_ngu'];

	$con = mysqli_connect("localhost", "root","","qlttnn");
	echo "abc";
	$sql = "insert into course values('$ma_khoa', '$ten_khoa', '$nn')";
    $qr = mysqli_query($con,$sql);

    if($qr)
    {
    	header("location: ../danhsachkhoahoc.php");
    }
?>