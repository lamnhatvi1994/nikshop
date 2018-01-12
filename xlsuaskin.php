<?php 
include_once("connect.php");
ob_start();
$target_dir = "images/"; // thư mục chứa file
//echo basename($_FILES["hinh"]["name"]);
$target_file = $target_dir . basename($_FILES["urlHinh"]["name"]); // lay ten file
$uploadOk = 1; 
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION); // lấy phẩn mở rộng của file
// Check if image file is a actual image or fake image
if(isset($_POST["suaskin"])) //check nubsumit
 {
    $check = getimagesize($_FILES["urlHinh"]["tmp_name"]); // lấy kích thước hình
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "File đã tồn tại";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["urlHinh"]["size"] > 500000) {
    echo "File cảu bạn quá lớn";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "vui lòng chọn File hình ảnh jpg, jpeg..";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "File chưa được upload thành công";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["urlHinh"]["tmp_name"], $target_file)) {
      echo "File ". basename( $_FILES["urlHinh"]["name"]). " Đã upload thành công";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$idSkin=$_POST["idSkin"];
$idTuong = $_POST["idTuong"];
$tenSkin = $_POST["tenSkin"];
$urlHinh = 'images/'.basename($_FILES["urlHinh"]["name"]);
$moTa = $_POST["moTa"];
$idTheLoai = $_POST["idTheLoai"];
$soLuong = $_POST["soLuong"];
$gia = $_POST["gia"];
$hieuUng = $_POST["hieuUng"];
$amThanh = $_POST["amThanh"];
$soLanMua = $_POST["soLanMua"];
$urlYT = $_POST["urlYT"];
$sale = $_POST["sale"];

if ($urlhinh!=''){
	$s="update skin SET idSkin='$idSkin',idTuong='$idTuong', tenSkin='$tenSkin',urlHinh='$urlHinh',moTa='$moTa',idTheLoai='$idTheLoai',soLuong='$soLuong',gia='$gia',hieuUng='$hieuUng',amThanh='$amThanh',soLanMua='$soLanMua',urlYT='$urlYT',sale='$sale' where idSkin='$idSkin'";
}
else{
	$s="update skin SET idSkin='$idSkin',idTuong='$idTuong', tenSkin='$tenSkin',moTa='$moTa',idTheLoai='$idTheLoai',soLuong='$soLuong',gia='$gia',hieuUng='$hieuUng',amThanh='$amThanh',soLanMua='$soLanMua',urlYT='$urlYT',sale='$sale' where idSkin='$idSkin'";
}

	$kq=mysql_query($s);
	if($kq)
	{
	echo "<script>alert('Skin được sửa thành công!');location.href='../test/index.php?key=themskin'</script>";
	}
	else {
	echo "<script>alert('Sản phẩm không được sửa thành công. Vui lòng thử lại!');location.href='../test/index.php?key=themskin'</script>";
	}
?>