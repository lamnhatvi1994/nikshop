<?php include_once('connect.php') ;
	session_start();
	ob_start();
	if(isset($_POST['idUser'])){
		if(isset($_POST['tenmoi'])){
		$id = $_POST['idUser'];
		$tenmoi = $_POST['tenmoi'];
		$sl = "UPDATE user SET ten = '$tenmoi' where idUser = '$id'";
		$kq = mysql_query($sl);
		$d=mysql_fetch_array($kq);
		$_SESSION['ten'] = $tenmoi;
		header("location:index.php?key=tttk");		
		}		
		if(isset($_POST['diaChimoi'])){
		$id = $_POST['idUser'];
		$diaChimoi = $_POST['diaChimoi'];
		$sl = "UPDATE user SET diaChi = '$diaChimoi' where idUser = '$id'";
		$kq = mysql_query($sl);
		$d=mysql_fetch_array($kq);
		header("location:index.php?key=tttk");
		}
		if(isset($_POST['dienThoaimoi'])){
		$id = $_POST['idUser'];
		$dienThoaimoi = $_POST['dienThoaimoi'];
		$sl = "UPDATE user SET dienThoai = '$dienThoaimoi' where idUser = '$id'";
		$kq = mysql_query($sl);
		$d=mysql_fetch_array($kq);
		header("location:index.php?key=tttk");
		}
		if(isset($_POST['emailmoi'])){
		$id = $_POST['idUser'];
		$emailmoi = $_POST['emailmoi'];
		$sl = "UPDATE user SET email = '$emailmoi' where idUser = '$id'";
		$kq = mysql_query($sl);
		$d=mysql_fetch_array($kq);
		header("location:index.php?key=tttk");
		}
	}
?>
