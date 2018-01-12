<?php session_start(); 
	for($i=$_GET["id"];$i<$_SESSION["somathang"];$i++){ 
		$j=$i+1; 
		$_SESSION["idSkin".$i]=$_SESSION["idSkin".$j]; 
		$_SESSION["tenSkin".$i]=$_SESSION["tenSkin".$j]; 
		$_SESSION["soLuong".$i]=$_SESSION["soLuong".$j]; 
		$_SESSION["gia".$i]=$_SESSION["gia".$j]; 
	} 
		$k=$_SESSION["somathang"]; 
		unset($_SESSION["idSkin".$k]); 
		unset($_SESSION["tenSkin".$k]);; 
		unset($_SESSION["soLuong".$k]); 
		unset($_SESSION["gia".$k]); 
		$_SESSION["somathang"]--; 
		echo "<script language='javascript'>location.href='index.php?key=gh';</script>"; ?>