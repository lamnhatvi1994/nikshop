<?php
session_start();
/* ------------------------------------------------Xử lý cập nhật giỏ hàng------------------------------------------------ */
if(isset($_POST['capnhat'])){
		for($i=1;$i<=$_SESSION["somathang"];$i++){ 
			if($_POST["SL".$i]==""){$_SESSION["soLuong".$i]=1;
			}else{ 
				$_SESSION["soLuong".$i]=$_POST["SL".$i]; 
				} 
		} 
			echo "<script language='javascript'>location.href='index.php';</script>";
	}
?>