<?php
	include('connect.php');
	ob_start();	
	if(isset($_POST['submit-binhluan'])){
		
		$id = $_POST['tendangnhap'] ;
		$idSin = $_POST['idSKin'] ;
		$ten = $_POST['ten'] ;
		$email = $_POST['email'] ;		
		$noiDung = $_POST['noidung'] ;
		$ngay = date('y-m-d');
		$s="insert into ykienkhachhang(idSkin, ngay, noiDung, email, id, ten) values ('$idSin','$ngay','$noiDung','$email','$id','$ten')";
		$kq = mysql_query($s);
		if($kq)
		echo "<script>alert('Bình luận thành công. Xin cảm ơn Đại Vương đã đóng góp ý kiến!');location.href='index.php?key=chitietsp&id={$_POST['idSKin']}'</script>";
	}else
		echo "<script>alert('Bình luận thất bại. Xin quý khách kiểm tra lại !');location.href='index.php?key=chitietsp&id={$_POST['idSKin']}'</script>";	
?>