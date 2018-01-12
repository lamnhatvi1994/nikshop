<?php 
if(!isset($_SESSION['idUser'])){ 
	echo "<script language='javascript'>alert(' Bạn phải đăng nhập !'); location.href='../test/index.php';</script>";
	}if($_SESSION['quyen'] != '1' ){
		echo "<script language='javascript'>alert(' Bạn không có quyền !'); location.href='../test/index.php';</script>";
	}
?>
<div class="container">
	<h2 class="text-center text-warning font-weight-bold"> Trang sửa SKIN </h2>
	<?php
		if(isset($_GET['idskin']))							
		$idSkin = $_GET['idskin'] ;
		$sl1 = "select * from skin where idSkin = '$idSkin' ";
		$kq1 = mysql_query($sl1);
		$d1 = mysql_fetch_array($kq1);
		$idTuong = $d1['idTuong'];
		$tenSkin = $d1['tenSkin'];
		$urlHinh = $d1['urlHinh'];
		$moTa = $d1['moTa'];
		$idTheLoai = $d1['idTheLoai'];
		$soLuong = $d1['soLuong'];
		$gia = $d1['gia'];
		$hieuUng = $d1['hieuUng'];
		$amThanh = $d1['amThanh'];
		$soLanMua = $d1['soLanMua'];
		$urlYT = $d1['urlYT'];
		$sale = $d1['sale'];		
	?> 
    <form class="form-inline" action="xlsuaskin.php" enctype="multipart/form-data" method="post" name="xlthemskin">
        <table class="table-hover">
             <tr>
                    <td><label for="idSkin"> idSkin: </label></td>                    	
                	<td><input size="10" class="form-control" name="idSkin" id="idSkin" type="text" value="<?php echo $idSkin ?>"></td>						
                    <td><p class="text-danger"> *idSkin cũ, không nên sửa</p></td>
                </tr>
                <tr>                	
                    <td><label for="idTuong"> idTuong: </label></td>
                	<td>
                        <select class="form-control" name="idTuong" id="idTuong">
                        	<?php							
                            $sl2 = "select idTuong, tenTuong from tuong where idTuong = '$idTuong'";
                            $kq2=mysql_query($sl2); 
                            while($d2=mysql_fetch_array($kq2)){								
                            ?> 
                            <option selected value="<?php echo $idTuong;?>" selected><?php echo $d2['tenTuong'] ?></option>
                            <?php }; ?>
							<?php							
                            $sl = "select idTuong, tenTuong  from tuong";
                            $kq=mysql_query($sl); 
                            while($d=mysql_fetch_array($kq)){								
                            ?>   
                            <option value="<?php echo $d['idTuong'] ?>"><?php echo $d['tenTuong'] ?></option> 
                            <?php } ?>       
                        </select>
                    </td>
                    <td><p class="text-danger"> *Chọn tên Tướng sẽ tự động lấy idTuong</p></td>                   
                </tr>    
                <tr>
                    <td><label for="tenSkin"> tenSkin: </label></td>
                	<td><input size="40"class="form-control" name="tenSkin" id="tenSkin" type="text" value="<?php echo $tenSkin ; ?>"></td>
                    <td><p class="text-danger"> *Tên Skin</p></td>
                </tr>
                <tr>
                    <td><label for="urlHinh"> urlHinh: </label></td>
                	<td><input class="form-control" name="urlHinh" id="urlHinh" type="file"></td>
                    <td><p class="text-danger"> *Đây là hình cũ</p><img src="<?php echo $urlHinh ;?>" width="100px" height="100px" /></td>
                </tr>
                <tr>
                    <td><label for="moTa"> moTa: </label></td>
                	<td><textarea class="form-control" name="moTa" cols="40" rows="10"><?php echo $moTa ; ?></textarea></td>
                    <td><p class="text-danger"> *Miêu tả cho Skin</p></td>
                </tr>
                <tr>
                    <td><label for="idTheLoai"> idTheLoai: </label></td>
                	<td>
                        <select class="form-control" name="idTheLoai" id="idTheLoai">      	
							<?php							
                            $sl3 = "select idTheLoai, tenTheLoai from theloai where idTheLoai = '$idTheLoai'";
                            $kq3=mysql_query($sl3); 
                            while($d3=mysql_fetch_array($kq3)){								
                            ?> 
                            <option selected value="<?php echo $idTheLoai;?>" selected><?php echo $d3['tenTheLoai'] ?></option>
                            <?php }; ?>
							<?php
                            $sl = "select* from theloai";
                            $kq=mysql_query($sl); 
                            while($d=mysql_fetch_array($kq)){
                            ?>   
                            <option value="<?php echo $d['idTheLoai'] ?>"><?php echo $d['tenTheLoai'] ?></option> 
                            <?php } ?>       
                        </select>
                    </td>
                    <td><p class="text-danger"> *Chọn tên Thể loại sẽ tự động lấy idTheLoai</p></td>
                </tr>
                <tr>
                    <td><label for="soLuong"> soLuong: </label></td>
                	<td><input size="5" value="<?php echo $soLuong ; ?>" class="form-control" name="soLuong" id="soLuong" type="text"></td>
                </tr>
                <tr>
                    <td><label for="gia"> gia: </label></td>
                	<td><input value="<?php echo $gia ; ?>" size="20" class="form-control" name="gia" id="gia" type="text"></td>
                    <td><p class="text-danger"> *Giao động từ 1-2000 RP</p></td>
                </tr> 
                <tr>
                    <td><label for="hieuUng"> hieuUng: </label></td>
                	<td><input value="<?php echo $hieuUng ; ?>" size="1" class="form-control" name="hieuUng" id="hieuUng" type="text"></td>
                	<td><p class="text-danger"> *1 là có, 0 là ko có</p></td>
                </tr> 
                <tr>
                    <td><label for="amThanh"> amThanh: </label></td>
                	<td><input value="<?php echo $amThanh ; ?>" size="1" class="form-control" name="amThanh" id="amThanh" type="text"></td>
               		<td><p class="text-danger"> *1 là có, 0 là ko có</p></td>
                </tr> 
                <tr>
                    <td><label for="soLanMua"> soLanMua: </label></td>
                	<td><input value="<?php echo $soLanMua ; ?>" size="5" class="form-control" name="soLanMua" id="soLanMua" type="text"></td>
                    <td><p class="text-danger"> *Nhập số lần đã được mua</p></td>
                </tr> 
                <tr>
                    <td><label for="urlYT"> urlYT: </label></td>
                	<td><input class="form-control" name="urlYT" id="urlYT" type="text"></td>
                    <td><p class="text-danger"> *Đây là link YT cũ. Copy toàn bộ thẻ frame trên YT <?php echo $urlYT ; ?></p></td>                    
                </tr> 
                <tr>
                    <td><label for="sale"> sale: </label></td>
                	<td><input value="<?php echo $sale ; ?>" size="1" class="form-control" name="sale" id="sale" type="text"></td>
                    <td><p class="text-danger"> *1 là có, 0 là ko có</p></td>
                </tr>                               
                <tr>
               		<td  class="text-right"><input class="form-control btn btn-success" type="button" name="back" id="back" value="Back" onclick="location.href='index.php?key=qlskin'"/><td>
					<td   class="text-left"><input class="form-control btn btn-success" type="submit" name="suaskin" id="suaskin" value="Save" /></td>                    
                <tr>
                 <tr>
               		<td class="text-danger font-weight-bold" colspan="3"> * Vui lòng nhập đầy đủ thông tin</td>
                <tr>              
        </table>
    </form>
</div>