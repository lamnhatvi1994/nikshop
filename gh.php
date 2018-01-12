<?php
	if(isset($_SESSION["somathang"]) && $_SESSION["somathang"]>0) {
?> 	

	<div>
   		<form action="xldn.php" method="post" >
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th class="text-primary font-weight-bold">STT</th>
                <th class="text-primary font-weight-bold">idSkin</th>
                <th class="text-primary font-weight-bold">Tên Skin</th>
                <th class="text-primary font-weight-bold">Giá(RP)</th>
                <th class="text-primary font-weight-bold">Số Lượng</th>
                <th class="text-primary font-weight-bold text-center">Thành Tiền (RP)</th>
                <th class="text-danger font-weight-bold">Hủy</th>
              </tr>
            </thead>
           <?php
				$tong=0; 
				for($i=1;$i <= $_SESSION["somathang"];$i++) {
			?>
            <tbody>
              <tr>
                <td><?php echo $i; ?></td>
                <td ><?php echo $_SESSION['idSkin'.$i] ; ?></td>
                <td ><?php echo $_SESSION['tenSkin'.$i] ; ?></td>
                <td ><?php echo $_SESSION['gia'.$i] ; ?></td>
                <td  width="100px"><input class="form-control font-weight-bold text-muted" name="<?php echo 'SL'.$i ;?>" value="<?php echo $_SESSION['soLuong'.$i] ; ?>"/></td>                    
                <td class="font-weight-bold text-center"><?php echo $_SESSION["gia".$i] * $_SESSION["soLuong".$i] ?></td>
                <td ><a class="text-danger" href="xoadathang.php?id=<?php echo $i;?>"> Xóa</a></td>
          </tr> 
                <?php $tong = $tong + $_SESSION["gia".$i] * $_SESSION["soLuong".$i] ;
				 }
				 ?>
              <tr>
              	<td style="font-size:24px" colspan="6" align="center"><strong class="text-warning">Tổng thành tiền : <?php echo $tong; ?>  RP</strong> </td>
              </tr>            
            </tbody>
          </table>
          	<div class="text-center">
          <input class="btn btn-success font-weight-bold" type="submit" name="capnhat" value="Cập Nhật"> 
          <input class="btn btn-success font-weight-bold" name="dathang" type="button"  value="Đặt Hàng" onclick="location.href='index.php?key=ttdh'"> 
          </div>
       </form>
       <p style="margin-left:5x;" class="text-danger font-weight-bold"> *Thêm số lượng và bấm cập nhật nhé!</p>
    </div>
    <?php }; ?>