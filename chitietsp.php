
    <div class="container">
    <?php
		if(isset($_GET['id'])){ 	 	
		$idskin=$_GET['id'];
		$sl="select * from Skin where idSkin=$idskin";
		$kq=mysql_query($sl);
		$d=mysql_fetch_array($kq);		   
	?>    
    <h1 class="text-center"> Chi tiết Trang Phục <b class="text-success"><?php echo $d['tenSkin']; ?></b> </h1>
    </br>    
    	<div class="row">
        	<div class="col-md-5">        
                <div class="card" style="width:400px">
                <img class="card-img-top" src="<?php echo $d['urlHinh']; ?>" alt="hinh" style="width:100%">
                    <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold text-success"><?php echo $d['tenSkin']; ?></h4>
                    <p class="card-text">
                    <b>Thể Loại : </b>
						<span class="text-center text-primary font-weight-bold">
						<?php 
                            $idTheLoai = $d['idTheLoai'];
                            $sl1="select * from theloai where idTheLoai=$idTheLoai";
                            $kq1=mysql_query($sl1);
                            $d1=mysql_fetch_array($kq1);
                            echo $d1['tenTheLoai'];
                        ?> 
                        </span>                   
                    </p>
                    <p class="card-text text-info font-weight-bold"> Hiệu Ứng : <?php if($d['hieuUng'] == 1)echo "Có" ; else echo "Không" ; ?></p>
                    <p class="card-text text-info font-weight-bold"> Âm Thanh : <?php if($d['amThanh'] == 1)echo "Có" ; else echo "Không" ; ?></p>
                    <?php 
                      $gia = $d['gia'];
                      $giasale = round($d['gia'] - $d['gia'] * 30/100);
                      if($d['sale'] == 0){echo  '<p class="text-warning font-weight-bold"> Giá : '.$gia.' RP</p>' ;
                      }else{
						  echo ' <p class="text-muted font-weight-bold"><del>Giá góc : '.$gia.' RP</del></p>';
                          echo  '<p class="text-warning font-weight-bold"> Giá : '.$giasale.' RP <span class="badge badge-dark">-30%</span></p> ' ;
                         
                      }
                      ?>
                    
                    <a href="xldn.php?idSkin=<?php echo $d['idSkin'];?>&soLuong=1" class="btn btn-primary card-link" data-toggle="tooltip" data-placement="right" title="Mua đi cưng, đẹp quá chừng luôn :)"><i class="fa fa-cart-plus" aria-hidden="true"> <b>Thêm vào giỏ hàng</b> </i></a>
                    
                    </div>
                 </div>
             </div>
             <div class="col-md-7 ">
             	<p><?php echo $d['urlYT']; ?></p>               
                <a href="#mota" class="btn btn-primary" data-toggle="collapse"><i class="fontmenu font-weight-bold text-light fa fa-search-plus" aria-hidden="true"> Mô tả chi tiết (Click để xem)</i></a>
             	<p id="mota" class="collapse"><?php echo $d['moTa']; ?></p>                
             </div>
             <?php };?>
    	</div>
        <?php
		$idTuong = $d['idTuong'];
		$sl1="select* from tuong where idTuong = '$idTuong'";
		$kq1=mysql_query($sl1);
		$d1=mysql_fetch_array($kq1);
		?>
        <p class="display-4 font-weight-bold text-danger"> Các trang phục khác của <?php echo $d1['tenTuong'];?> : </p>
        <div class="row col-md-12">
                <?php 					
					$sl2="select* from skin where idTuong = '$idTuong'";
					$kq2=mysql_query($sl2);
				 	while($d2=mysql_fetch_array($kq2)){?> 
				 	<div class="card col-md-3">
                        <div class="card-body">
                          <p class="card-title font-weight-bold text-success"><?php echo $d2['tenSkin'];?></p>
                          <a href="index.php?key=chitietsp&id=<?php echo $d2['idSkin'];?>"><div class="hoverimage"><img src="<?php echo $d2['urlHinh']; ?>" class="card-img"/></div></a>
                        </div>           	
                    </div>
               	<?php };?>
        </div>
        </br>
        	<input class="btn btn-success" data-toggle="modal" data-target="#bl" type="button" name="binhluan" id="binhluan" value="Nhấp để Bình Luận"/>
         </br>
         </br>
         </br>   
        <div class="row col-md-12">
            <?php
		 	$sl5 = "select* from ykienkhachhang where idSkin = {$_GET['id']}";
			$kq5 = mysql_query($sl5); 
			while($d5 = mysql_fetch_array($kq5)){
			 ?>
			 <ul class="col-md-12">
				<li>
                	<div class="">
					<p class="text-danger"><strong><?php echo $d5['ten'].' ** '.$d5['ngay']?></strong></p>
					<p class="text-success"><strong><?php echo $d5['id'].'**'.$d5['email']?></strong></p>                                    
					<p class="text-dark"><?php echo $d5['noiDung']?></p>
                    </div>
                    
				</li>
			 </ul>
			 <?php }?>
        </div>
    </div>

	<!--  Bình luận  -->
        <div class="modal fade" id="bl">
          <div class="modal-dialog">
            <div class="modal-content">        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-success"> Bình luận </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>        
              <!-- Modal body -->
              <div class="modal-body">              
              	<form action="xlbl.php" method="post" name="binhluan">
                	<?php 
					if(isset($_SESSION['id'])&&($_SESSION['id'])) 
					echo '<strong class="text-danger">*Đã lưu thông tin đăng nhập, bạn chỉ cần nhập nội dung bình luận</strong>';
					else
					 echo '<strong class="text-danger">*Do bạn chưa đăng nhập nên sẽ bình luận với định danh là Guess!</strong>';
					?>
                    <table>
                        <tr>                	
                            <td colspan="2"><input name="idSKin" type="hidden"  value="<?php echo $_GET['id'] ?>" /></td>
                        </tr>
                        <tr>                            
                            <td><input name="tendangnhap" type="hidden"  value="<?php if(isset($_SESSION['id'])){echo $_SESSION['id']; }else echo 'guest.'.date('d-m-y'); ?>" /></td>
                        </tr>                         
                        <tr>
                            <td><label for="hoten"> Tên :</label></td>
                            <td><input class="form-control" name="ten" type="<?php if(isset($_SESSION['ten']))echo 'hidden';else echo 'text';?>" value="<?php if(isset($_SESSION['ten'])){echo $_SESSION['ten']; }else echo '';  ?>"  /></td>
                        </tr>
                        <tr>
                            <td><label for="email"> Email :</label></td>
                            <td><input class="form-control" name="email" type="<?php if(isset($_SESSION['email']))echo 'hidden';else echo 'text';?>"  value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email']; }else echo '';  ?>"   /></td>
                        </tr>                       
                        <tr>
                            <td colspan="2">Nội dung :</td>                                        
                        </tr>
                        <tr>
                            <td colspan="2"><textarea class="form-control" name="noidung" cols="40" rows="5"></textarea></td>                    
                        </tr>
                        <tr>
                            <td><input class="btn btn-secondary" type="submit" name="submit-binhluan" value="Gửi ý kiến" /></td>
                            <td><input class="btn btn-secondary" type="reset" name="reset-binhluan" value="Reset bình luận"  /></td>
                        </tr>
                    </table>
                 </form>			
              </div>        
              <!-- Modal footer -->
              <div class="modal-footer text-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
              </div>