<?php 
	ob_start();
	session_start();
  	session_destroy();    
	echo "<script>alert('Thoát Thành Công');location.href='index.php';</script>";
	header("location:index.php");

?>