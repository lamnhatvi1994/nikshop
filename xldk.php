<?php 
include_once("connect.php");
ob_start();
$ten=$_POST["ten"];
$id = $_POST["id"];
$password = $_POST["password"];
$diaChi = $_POST["diaChi"];
$dienThoai = $_POST["dienThoai"];
$email = $_POST["email"];

$s="insert into user(ten,id,password,diaChi,dienThoai,email) values ('$ten','$id','$password ','$diaChi','$dienThoai','$email');";
	$kq=mysql_query($s);
	if($kq)
	{
	echo "<script>alert('Đăng ký thành công!');location.href='../test/index.php'</script>";
	}
	else {
	echo "<script>alert('Đăng ký thất bại. ID đã có người sử dụng!');location.href='../test/index.php'</script>";
	}
?>
