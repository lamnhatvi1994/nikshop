  
    <div class="row col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">            	
            <div id="tintuc" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#tintuc" data-slide-to="0" class="active"></li>
                <li data-target="#tintuc" data-slide-to="1"></li>
                <li data-target="#tintuc" data-slide-to="2"></li>
              </ul>
              <div class="carousel-inner col-md-12 text-center">
                <div class="carousel-item active">
                  <a href="trangtin2.php"><img width="1100px" height="500px" src="images/slideshow2.jpg" alt="tintuc2"></a>
                  <div class="carousel-caption jumbotron">
                    <p class="display-3"> Bộ ba siêu phẩm </p>
                    <p>Vayne, Jhin, Vi có trang phục siêu phẩm cực hot</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href="trangtin1.html"><img width="1100px" height="500px"  src="images/slideshow1.jpg" alt="tintuc1"></a>
                  <div class="carousel-caption jumbotron">
                    <p class="display-3"> Rengar Máy Móc </p>
                    <p>Trang phục siêu hot của Rengar sắp tới</p>
                  </div>
                </div>                
                <div class="carousel-item">
                  <a href="trangtin3.html"><img width="1100px" height="500px" src="images/slideshow3.jpg" alt="tintuc3"></a>
                  <div class="carousel-caption jumbotron">
                    <p class="display-3"> Bậc thầy biến ảo </p>
                    <p>Ra mắt tướng mới Zoe</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#tintuc" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#tintuc" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>            	
        </div>
		<div class="col-md-1"></div>
    </div>
    </br>
    
    
	<?php 
		$sl = "SELECT * from skin ORDER BY idSkin DESC LIMIT 0,8";
		$kq = mysql_query($sl);
		$sl1 = "SELECT * from skin ORDER BY soLanMua DESC LIMIT 0,8";
		$kq1 = mysql_query($sl1);
		$sl2 = "SELECT * from skin where sale = '1'";
		$kq2 = mysql_query($sl2);				
	?>
    <div class="container">
    	<marquee scrollamount="10" direction="right" class="bg-danger text-light font-weight-bold display-4">Trang phục bán chạy</marquee>
        <div class="row col-md-12">
        	<?php while($fr1 = mysql_fetch_array($kq1)){ ?>
        	<div class="card col-md-3">
                <div class="card-body">
                  <p class="card-title font-weight-bold text-success"><?php echo $fr1['tenSkin'];?></p>
                  <div class="hoverimage"><img src="<?php echo $fr1['urlHinh']; ?>" class="card-img"  /></div>
                  <a href="index.php?key=chitietsp&id=<?php echo $fr1['idSkin'];?>" class="card-link" data-toggle="tooltip" data-placement="right" title="Nhấp để xem chi tiết trang phục <?php echo $fr1['tenSkin'];?> !"><i class="fa fa-info-circle font-weight-bold" aria-hidden="true"> Xem chi tiết </i></a>
                  <a href="xldn.php?idSkin=<?php echo $fr1['idSkin'];?>&soLuong=1" class="card-link" data-toggle="tooltip" data-placement="right" title="Mua đi cưng, đẹp quá chừng luôn :) "><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></a>
                  <p class="float-right" style="width:20%;"><span class="badge badge-danger">Hot</span></p>
                     <?php 
                      $gia = $fr1['gia'];
                      $giasale = round($fr1['gia'] - $fr1['gia'] * 30/100);
                      if($fr1['sale'] == 0){echo  '<p class="text-warning font-weight-bold"> Giá : '.$gia.' RP</p>' ;
                      }else{
                          echo  '<p class="text-warning font-weight-bold"> Giá : '.$giasale.' RP <span class="badge badge-dark">-30%</span></p> ' ;
                         
                      }
                      ?>                     
            	</div>           	
          	</div>
            <?php };?>		
        </div>
        </br>    	
    	<marquee scrollamount="10" direction="left" class="bg-warning text-light font-weight-bold display-4">Trang phục mới nhất</marquee>       	<div class="row col-md-12">
        	<?php while($fr = mysql_fetch_array($kq)){ ?>
        	<div class="card col-md-3">            
            <div class="card-body">
              <p class="card-title font-weight-bold text-success"><?php echo $fr['tenSkin'];?></p>
              <div class="hoverimage"><img src="<?php echo $fr['urlHinh']; ?>" class="card-img"  /></div>
              <a href="index.php?key=chitietsp&id=<?php echo $fr['idSkin'];?>" class="card-link"  data-toggle="tooltip" data-placement="right" title="Nhấp để xem chi tiết trang phục <?php echo $fr['tenSkin'];?> !"><i class="fa fa-info-circle font-weight-bold" aria-hidden="true"> Xem chi tiết </i></a>
              <a href="xldn.php?idSkin=<?php echo $fr['idSkin'];?>&soLuong=1" class="card-link" data-toggle="tooltip" data-placement="right" title="Nhấp để thêm vào giỏ hàng nào :)"><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></a>
              <p class="float-right" style="width:20%;"><span class="badge badge-warning">New</span></p>
              <?php 
                      $gia = $fr['gia'];
                      $giasale = round($fr['gia'] - $fr['gia'] * 30/100);
                      if($fr['sale'] == 0){echo  '<p class="text-warning font-weight-bold"> Giá : '.$gia.' RP</p>' ;
                      }else{
                          echo  '<p class="text-warning font-weight-bold"> Giá : '.$giasale.' RP <span class="badge badge-dark">-30%</span></p> ' ;
                         
                      }
                      ?>
            </div>
         	</div>
            <?php };?>
         </div>
    
    	<marquee scrollamount="10" direction="right" class="bg-success text-light font-weight-bold display-4">Trang phục đang sale</marquee>
        <div class="row col-md-12">
        	<?php while($d = mysql_fetch_array($kq2)){ ?>
        	<div class="card col-md-3">
                <div class="card-body">
                  <p class="card-title font-weight-bold text-success"><?php echo $d['tenSkin'];?></p>
                  <div class="hoverimage"><img src="<?php echo $d['urlHinh']; ?>" class="card-img"  /></div>
                  <a href="index.php?key=chitietsp&id=<?php echo $d['idSkin'];?>" class="card-link" data-toggle="tooltip" data-placement="right" title="Nhấp để xem chi tiết trang phục <?php echo $fr1['tenSkin'];?> !"><i class="fa fa-info-circle font-weight-bold" aria-hidden="true"> Xem chi tiết </i></a>
                  <a href="xldn.php?idSkin=<?php echo $d['idSkin'];?>&soLuong=1" class="card-link" data-toggle="tooltip" data-placement="right" title="Mua đi cưng, đẹp quá chừng luôn :) "><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></a>
                  <p class="float-right" style="width:20%;"><span class="badge badge-success">Sale</span></p>
                     <?php 
                      $gia = $d['gia'];
                      $giasale = round($d['gia'] - $d['gia'] * 30/100);
                      if($d['sale'] == 0){echo  '<p class="text-warning font-weight-bold"> Giá : '.$gia.' RP</p>' ;
                      }else{
                          echo  '<p class="text-warning font-weight-bold"> Giá : '.$giasale.' RP <span class="badge badge-dark">-30%</span></p> ' ;
                         
                      }
                      ?>                     
            	</div>           	
          	</div>
            <?php };?>		
        </div>
    </div>