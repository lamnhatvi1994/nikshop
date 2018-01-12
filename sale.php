	<?php include('connect.php'); ?>
    <div class="col-md-12 row">
    	<img src="images/hpny.gif" class="col-md-6" alt="hpny"/>
        <div class="col-md-6 row">
            <p class=" text-center font-weight-bold text-danger display-4"> Chúc mừng năm mới 2018  </p>
            <p class="col-md-7 text-dark font-weight-bold">
            	<i style='color:purple;'>CUNG</i> kính mời nhau chén rượu nồng.</br>
                <i style='color:purple;'>CHÚC</i> mừng năm đến, tiễn năm xong.</br>
                <i style='color:purple;'>TÂN</i> niên phúc lộc khơi vừa dạ.</br>
                <i style='color:purple;'>XUÂN</i> mới tài danh khởi thỏa lòng.</br>
                <i style='color:purple;'>VẠN</i> chuyện lo toan thay đổi hết.</br>
                <i style='color:purple;'>SỰ</i> gì bế tắc thảy hanh thông.</br>
               	<i style='color:purple;'>NHƯ</i> anh, như chị, bằng bè bạn.</br>
                <i style='color:purple;'>Ý</i> nguyện, duyên lành, đẹp ước mong.</br>
             </p>
             <p class="col-md-5 text-dark font-weight-bold">
                Năm hết tết đến,</br>
                Rước lộc vào nhà,</br>
                Quà cáp bao la,</br>
                Mọi nhà no đủ,</br>
                Vàng bạc đầy tủ,</br>
                Gia chủ phát tài,</br>
                Già trẻ gái trai,</br>
                Sum vầy hạnh phúc,</br>
                Cầu tài chúc phúc,</br>
                Mãi mãi an khang.</br>
			</p>
        </div>
        <div>
        	<p class=" text-center font-weight-bold text-primary display-4"> Mừng Tết Mậu Tuất 2018 <b class="text-success">NIK Shop</b> khuyến mãi 30% các trang phục </p>
        </div>
        <div class="row col-md-12">
		<?php 			
				$sl = "select* from skin where sale = '1'";
				$kq = mysql_query($sl);
				while($d = mysql_fetch_array($kq)){			
		?>
            <div class="card col-md-3 mart20">
                <div class="card-body">
                  <h4 class="card-title text-success font-weight-bold text-center"><?php echo $d['tenSkin']; ?></h4>
                  <img class="card-img img-thumbnail" src="<?php echo $d['urlHinh']; ?>" alt="Card image">
                  </br> </br>
                  <?php 
                      $gia = $d['gia'];
                      $giasale = round($d['gia'] - $d['gia'] * 30/100);
                      if($d['sale'] == 0){echo  '<p class="text-warning font-weight-bold"> Giá : '.$gia.' RP</p>' ;
                      }else{
						  echo ' <div class="row"><p class="text-muted font-weight-bold col-md-6"><del>Giá góc : '.$gia.' RP</del></p>';
                          echo  '<p class="text-warning font-weight-bold col-md-6"> Giá : '.$giasale.' RP </p></div> ' ;                         	
                      }
                      ?>             
                  <div class="text-center"><a href="index.php?key=chitietsp&id=<?php echo $d['idSkin']; ?>" class="btn btn-dark text-center" data-toggle="tooltip" data-placement="right" title="Nhấp để xem chi tiết trang phục <?php echo $d['tenSkin']; ?> !"><b class="text-light"> Xem chi tiết Skin </b></a></div>              
                </div>            
            </div>
            <?php } ?> 
            	     
         </div>
	</div>                   

   