		<?php 
			if(isset($_GET['idtuong'])){
				$idTuong = $_GET['idtuong'];
				$sl1 = "select* from tuong where idTuong = '$idTuong'";
				$kq1 = mysql_query($sl1);
				while($d1 = mysql_fetch_array($kq1)){			
		?>
    <div class="container">    	
    	<h1> Danh sách toàn bộ skin của <b class="text-success"><?php echo $d1['tenTuong']; ?></b> </h1>
        <?php } }; ?> 
        <div class="row col-md-12">
		<?php 
			if(isset($_GET['idtuong'])){
				$idTuong = $_GET['idtuong'];
				$sl = "select* from skin where idTuong = '$idTuong'";
				$kq = mysql_query($sl);
				while($d = mysql_fetch_array($kq)){			
		?>
            <div class="card col-md-4 mart20">
                <div class="card-body">
                  <h4 class="card-title text-success font-weight-bold text-center"><?php echo $d['tenSkin']; ?></h4>
                  <img class="card-img rounded-circle" src="<?php echo $d['urlHinh']; ?>" alt="Card image">
                  </br> </br>             
                  <div class="text-center"><a href="index.php?key=chitietsp&id=<?php echo $d['idSkin']; ?>" class="btn btn-warning text-center" data-toggle="tooltip" data-placement="right" title="Nhấp để xem chi tiết trang phục <?php echo $d['tenSkin']; ?> !"><b> Xem chi tiết Skin </b></a></div>              
                </div>            
            </div>
            <?php } ?> 
            	<?php } ?>      
         </div>
	</div>                   
