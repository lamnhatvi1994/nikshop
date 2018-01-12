<?php
	include_once("connect.php");
	if(isset($_GET['idskin']))
	$idSKin = $_GET['idskin'];	
	$s="DELETE FROM skin WHERE idSKin = $idSKin";
	$kq=mysql_query($s);
	if($kq)
	{
	echo "<script>alert('Skin đã biến mất hoàn toàn !');location.href='../test/index.php?key=qlskin'</script>";
	}
	else 
	{
	echo "<script>alert('Skin chưa bị xóa he he!. Vui lòng thử lại!');location.href='../test/index.php?key=qlskin'</script>";
	}
?>