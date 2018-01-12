<?php 
if(!isset($_SESSION['idUser'])){
//	include "formdangnhap.php"; 
	echo "<script language='javascript'>alert(' Bạn phải đăng nhập !'); location.href='../test/index.php';</script>";
	}if($_SESSION['quyen'] != '1' ){
		echo "<script language='javascript'>alert(' Bạn không có quyền !'); location.href='../test/index.php';</script>";
	}
?>
<?php 
if(isset($_POST['idtuong'])){
	$idTuong = $_POST['idtuong'];		
} else
	$idTuong = 'aat';
?>
<div class="container-fluid">    	
    <form class="form-inline" id="chon" name="chon" method="post">
        <label class="text-danger font-weight-bold">Tên Tướng : </label>
        &nbsp; &nbsp;
        <select class="form-control" name="idtuong" id="idtuong" onchange="chon.submit()">      	
			<?php
            $sl2 = "select* from tuong";
            $kq2=mysql_query($sl2); 
            while($d2=mysql_fetch_array($kq2)){
            ?>   
            <option <?php if(isset($_POST['idtuong']) && $_POST['idtuong'] == $d2['idTuong'])
            {echo "selected='selected'";}?> value="<?php echo $d2['idTuong'] ?>"><?php echo $d2['tenTuong'] ?></option> 
            <?php } ?>       
      	</select>
    </form>   
	<?php 
	if(isset($_POST['idtuong'])){
		$idTuong = $_POST['idtuong'];}
		else{$idTuong ='aat';}
		$sl = "select* from tuong where idTuong = '$idTuong'";
		$kq = mysql_query($sl);
		while($d = mysql_fetch_array($kq)){			
    ?>
        <h1> Danh sách toàn bộ skin của <b class='text-danger'><?php echo $d['tenTuong']?></b> </h1> 		
	<?php };?>
       	<a href="index.php?key=themskin" class="btn btn-warning font-weight-bold"> Thêm Skin mới</a>
    <div class="row col-md-12">
		<?php
        $sl1="select * from skin where idTuong ='$idTuong'";
        $kq1=mysql_query($sl1);		
        while($d1=mysql_fetch_array($kq1))
        {
        ?>			
        <div class="card col-md-6 mart20">
            <p class="font-weight-bold"><b class="text-success">idSkin: </b> <?php echo $d1['idSkin'] ?></p>
            <p class="font-weight-bold"><b class="text-success">idTuong: </b><?php echo $d1['idTuong'] ?></p>
            <p class="font-weight-bold"><b class="text-success">tenSkin: </b><?php echo $d1['tenSkin'] ?></p>
            <p class="font-weight-bold"><b class="text-success">urlHinh: </b><?php echo $d1['urlHinh'] ?></p>
            <div><button class="btn btn-primary" data-toggle="collapse" data-target="#<?php echo $d1['idSkin'] ?>">click để xem moTa</button>
            <p id="<?php echo $d1['idSkin'] ?>" class="collapse font-weight-bold"><b class="text-success">moTa: </b><?php echo $d1['moTa']; ?></p></div>
            <p class="font-weight-bold"><b class="text-success">idTheLoai: </b><?php echo $d1['idTheLoai'] ?></p>
            <p class="font-weight-bold"><b class="text-success">soLuong: </b><?php echo $d1['soLuong'] ?></p>
            <p class="font-weight-bold"><b class="text-success">gia: </b><?php echo $d1['gia'] ?></p>
            <p class="font-weight-bold"><b class="text-success">hieuUng: </b><?php echo $d1['hieuUng'] ?></p>
            <p class="font-weight-bold"><b class="text-success">amThanh: </b><?php echo $d1['amThanh'] ?></p>
            <p class="font-weight-bold"><b class="text-success">solanMua: </b><?php echo $d1['soLanMua'] ?></p>                 
            <p class="font-weight-bold"><b class="text-success">urlYT: </b><?php echo $d1['urlYT']; ?></p>
            <p class="font-weight-bold"><b class="text-success">sale: </b><?php echo $d1['sale'] ?></p>
            <a href="index.php?key=suaskin&idskin=<?php echo $d1['idSkin']?>" class="btn btn-success font-weight-bold"> Sửa Skin </a>
            <a href="index.php?key=xoaskin&idskin=<?php echo $d1['idSkin']?>" class="btn btn-danger font-weight-bold"> Xóa Skin </a> 
        </div>
        <?php };?>
    </div>      
</div>                
                    
