<?php
ob_start();
session_start();
include('connect.php');  
?>
<?php
/* -------------------------------------------------Xử lý đăng nhập------------------------------------------------- */
if(isset($_POST['id']) && ($_POST['password'])){
	$id = $_POST['id'];
	$password = $_POST['password'];
	$sl = "select* from user where id = '$id' and password = '$password'";
	$kq = mysql_query($sl);
	$d = mysql_fetch_array($kq);		
	if(mysql_num_rows($kq)==1){
		$_SESSION['idUser']=$d['idUser'];
		$_SESSION['ten']=$d['ten'];
		$_SESSION['id']=$d['id'];
		$_SESSION['diaChi']=$d['diaChi'];
		$_SESSION['dienThoai']=$d['dienThoai'];
		$_SESSION['email']=$d['email'];
		$_SESSION['quyen']=$d['authority'];
		$_SESSION['flag']=1;		
		header("location:index.php");
	}else
		echo '<b style="color:red; font-size:30px;"> Có biến Đại Vương ơi! ID hay Pass sai dzồi :)) </b>';		
}
?>
<?php 
/* ------------------------------------------------Xử lý tìm kiếm theo tên skin------------------------------------------------ */
if(isset($_GET['key'])){
		$tenskin = $_GET['key'];
		$sl = "select* from skin where tenSkin = '$tenskin'";
		$kq = mysql_query($sl);
		$d = mysql_fetch_array($kq);
		$id = $d['idSkin'];
		if(mysql_num_rows($kq)>0){
			header("location:index.php?key=chitietsp&id='$id'");
		}else
			echo "<b style='color:red; font-size:30px;'> Làm gì có SKIN này! Mốt mới có. Nhập lại đi Đại Vương:)) </b>
			</br> </br> </br>
			<a style='color:blue; font-size:30px;' href='tk1.php'> Trở về trang tìm kiếm</a>
			";
}	
?>

<?php
/* -------------------------------------------------Xử lý tìm kiếm theo tên tướng---------------------------------------------- */	
if(isset($_GET['key'])){
	$tentuong = $_GET['key'];
	$sl = "select* from tuong where tenTuong = '$tentuong'";
	$kq = mysql_query($sl);
	$d = mysql_fetch_array($kq);
	$id = $d['idTuong'];
	if(mysql_num_rows($kq)>0)
{
	header("location:index.php?key=dssp&idtuong={$d['idTuong']}");
}else
	echo "<b style='color:red; font-size:30px;'> Có biến rồi Đại Vương. Chưa có TƯỚNG này. Đại Vương nhập lại đi  :)) </b>
	</br> </br> </br>
	<a style='color:blue; font-size:30px;' href='tk1.php'> Trở về trang tìm kiếm</a>
	";	
}	
?>

<?php
/* ------------------------------------------------Xử lý giỏ hàng------------------------------------------------ */
if (!isset($_SESSION["somathang"])) $_SESSION["somathang"]=0;	
	if(isset($_GET['idSkin'])){			
		$flag = 0; // flag = 0 thì mặt hàng ko có trong giỏ			
		for($i=1; $i<= $_SESSION['somathang']; $i++){
			if($_GET['idSkin'] == $_SESSION['idSkin'.$i]){
			$_SESSION['soLuong'.$i] += $_GET['soLuong'];
			$flag = 1; // flag = 1 thì  mặt hàng có trong giỏ hàng
			break;
			}
		}header("location:index.php");
		if($flag == 0){
			$idSkin = $_GET['idSkin'];
			$sl1 = "select* from skin where idSkin = '$idSkin' ";
			$kq1= mysql_query($sl1);
			if (mysql_num_rows($kq1)>0){
				while($d1 = mysql_fetch_array($kq1)){
					$_SESSION['somathang']++;
					$j = $_SESSION['somathang'];
					$_SESSION['idSkin'.$j] = $d1['idSkin'];
					$_SESSION['tenSkin'.$j] = $d1['tenSkin'];
					$_SESSION['soLuong'.$j] = $_GET["soLuong"];
					$_SESSION['gia'.$j] = $d1['gia'];
				}
			}		
		}
	}
	
?>

<?php
/* ------------------------------------------------Xử lý cập nhật giỏ hàng------------------------------------------------ */
if(isset($_POST['capnhat'])){
		for($i=1;$i<=$_SESSION["somathang"];$i++){ 
			if($_POST["SL".$i]==""){$_SESSION["soLuong".$i]=1;
			}else{ 
				$_SESSION["soLuong".$i]=$_POST["SL".$i]; 
				} 
		} 
			echo "<script language='javascript'>location.href='index.php?key=gh';</script>";
	}
?>

<?php
/* ------------------------------------------------Xử lý lưu đơn hàng------------------------------------------------ */
if(isset($_POST['dathang'])){
	if (($_POST['tenKH'])=="" || ($_POST['ngaygiao'])=="" || ($_POST['diadiem'])==""){
		echo "<script>alert('Vui lòng điền đầy đủ thông tin');
		location.href= 'index.php?key=ttdh'</script>";
	}else{	
			$tenKH=$_POST['tenKH'];
			$ngaydat=date('y-m-d');
			$ngaygiao=$_POST['ngaygiao'];
			$diadiem=$_POST['diadiem'];
			$k=time();			
			$s="insert into donhang(idDH,thoidiemdathang,thoidiemgiaohang,tennguoinhan,diadiemgiaohang) values ('$k','$ngaydat','$ngaygiao','$tenKH','$diadiem')";
			$kq=mysql_query($s);
		}
	// INSERT DONHANGCHITIET
			for($i=1;$i<=$_SESSION["somathang"];$i++){						
			$s1="insert into ct_donhang(idDH,idSkin,soLuong,gia) values ('$k','".$_SESSION["idSkin".$i]."','".$_SESSION["soLuong".$i]."','".$_SESSION["gia".$i]."')";
			$kq=mysql_query($s1);
		}
	$_SESSION["somathang"]=0;
	 	
	echo "<script>alert('Đơn hàng của Đại Vương đã hoàn tất! Bọn em sẽ liên hệ với Đại Vương sớm nhất có thể! Hè hè! Cảm ơn Đại Vương đã ủng hộ');location.href='hoadon-$k.html'</script>";
}

?>