<?php 
ob_start();
include("connect.php");
if(isset($_POST['binhchon']))
{
	
	$sl="update phuongan set SoLanChon=SoLanChon+1 where idPA=".$_POST['binhchon'];
	$kq=mysql_query($sl);
	if($kq){
	echo "<script>alert('Bình chọn thành công!');location.href='../test/trangtin2.php'</script>";
	}else {
		echo "<script>alert('Bình chọn thất bại. Vui lòng thử lại!');location.href='../test/trangtin2.php'</script>";
		}
}
?>