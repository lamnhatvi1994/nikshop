<?php 
if(!isset($_SESSION['idUser'])){
	echo "<script language='javascript'>alert(' Bạn phải đăng nhập !'); location.href='../test/index.php';</script>";
	}if($_SESSION['quyen'] != '1' ){
		echo "<script language='javascript'>alert(' Bạn không có quyền !'); location.href='../test/index.php';</script>";
	}
?>
<div class="container">
	<h2 class="text-center text-warning font-weight-bold"> Trang thêm SKIN </h2>
	<form class="form-inline" action="xlthemskin.php" enctype="multipart/form-data" method="post" name="xlthemskin">
        <table class="table-striped">
             <tr>
                    <td><label for="idSkin"> idSkin: </label></td>
                    	<?php
							$sl = "select idSkin from skin ORDER BY idSkin DESC limit 1";
							$kq=mysql_query($sl); 
							$d=mysql_fetch_array($kq);
							$idSkin = ($d['idSkin']+1) ;
                        ?> 
                	<td><input size="10" class="form-control" name="idSkin" id="idSkin" type="text" value="<?php echo $idSkin ?>"></td>						
                    
                    <td><p class="text-danger"> *Tự lấy idSkin tiếp theo (không nên sửa)!</p></td>
                </tr>
                <tr>                	
                    <td><label for="idTuong"> idTuong: </label></td>
                	<td>
                        <select class="form-control" name="idTuong" id="idTuong">      	
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
                	<td><input  size="40"class="form-control" name="tenSkin" id="tenSkin" type="text"></td>
                    <td><p class="text-danger"> *Nhập tên Skin mới</p></td>
                </tr>
                <tr>
                    <td><label for="urlHinh"> urlHinh: </label></td>
                	<td><input class="form-control" name="urlHinh" id="urlHinh" type="file"></td>
                    <td><p class="text-danger"> *Chỉ chọn tệp HÌNH</p></td>
                </tr>
                <tr>
                    <td><label for="moTa"> moTa: </label></td>
                	<td><textarea class="form-control" name="moTa" cols="40" rows="10"></textarea></td>
                    <td><p class="text-danger"> *Miêu tả cho Skin mới</p></td>
                </tr>
                <tr>
                    <td><label for="idTheLoai"> idTheLoai: </label></td>
                	<td>
                        <select class="form-control" name="idTheLoai" id="idTheLoai">      	
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
                	<td><input size="5" class="form-control" name="soLuong" id="soLuong" type="text"></td>
                </tr>
                <tr>
                    <td><label for="gia"> gia: </label></td>
                	<td><input size="20" class="form-control" name="gia" id="gia" type="text"></td>
                    <td><p class="text-danger"> *Giao động từ 1-2000 RP</p></td>
                </tr> 
                <tr>
                    <td><label for="hieuUng"> hieuUng: </label></td>
                	<td><input size="1" class="form-control" name="hieuUng" id="hieuUng" type="text"></td>
                	<td><p class="text-danger"> *1 là có, 0 là ko có</p></td>
                </tr> 
                <tr>
                    <td><label for="amThanh"> amThanh: </label></td>
                	<td><input size="1" class="form-control" name="amThanh" id="amThanh" type="text"></td>
               		<td><p class="text-danger"> *1 là có, 0 là ko có</p></td>
                </tr> 
                <tr>
                    <td><label for="soLanMua"> soLanMua: </label></td>
                	<td><input size="5" class="form-control" name="soLanMua" id="soLanMua" type="text"></td>
                    <td><p class="text-danger"> *Nhập số lần đã được mua</p></td>
                </tr> 
                <tr>
                    <td><label for="urlYT"> urlYT: </label></td>
                	<td><input class="form-control" name="urlYT" id="urlYT" type="text"></td>
                    <td><p class="text-danger"> *Copy toàn bộ thẻ frame trên YT</p></td>
                </tr> 
                <tr>
                    <td><label for="sale"> sale: </label></td>
                	<td><input size="1" class="form-control" name="sale" id="sale" type="text"></td>
                    <td><p class="text-danger"> *1 là có, 0 là ko có</p></td>
                </tr>                               
                <tr>
               		<td  class="text-right"><input class="form-control btn btn-success" type="button" name="back" id="back" value="Back" onclick="location.href='index.php?key=qlskin'"/><td>
					<td   class="text-left"><input class="form-control btn btn-success" type="submit" name="themskin" id="themskin" value="Save" /></td>                    
                <tr>
                 <tr>
               		<td class="text-danger font-weight-bold" colspan="3"> * Vui lòng nhập đầy đủ thông tin</td>
                <tr>              
        </table>
    </form>
</div>