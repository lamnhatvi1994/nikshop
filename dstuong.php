    <div class="container">    
    <h1> Danh sách toàn bộ tướng trong <b class="text-danger">Liên Minh Huyền Thoại</b> </h1>    	
        <div class="row col-md-12">
        	<?php			
			$sp1tr=9;
			$sl1="select * from tuong";
			$kq1=mysql_query($sl1);	
			$tsp=mysql_num_rows($kq1);	
			$tst=ceil($tsp/$sp1tr);	
			if(isset($_GET['page'])){ $page=$_GET['page'];} 
			else {$page=1;}
			$vitri=($page-1)*$sp1tr;	
			$sl="select * from tuong limit $vitri,$sp1tr";
			$kq=mysql_query($sl);
			while($d=mysql_fetch_array($kq))
			{
			?>			
            <div class="card col-md-4 mart20">
                <div class="card-body">
                  <h4 class="card-title text-success font-weight-bold"><?php echo $d['tenTuong']; ?></h4>
                  <p class="card-text blockquote-footer font-weight-bold"><?php echo $d['bietDanh']; ?></p>
                  <a href="index.php?key=dssp&idtuong=<?php echo $d['idTuong'] ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Nhấp để xem tất cả trang phục của <?php echo $d['tenTuong'] ?> !"> Xem Skin </a>
                  <a class="btn btn-secondary float-right active" data-toggle="tooltip" data-placement="right" title="Đang tiến hành xây đựng ! ">Cốt truyện</a>                
                </div>
                <img class="card-img-bottom rounded" src="<?php echo $d['urlHinh']; ?>" alt="Card image" width="100%">
              </div>
            <?php };?>
            
        </div>      
           </br>
           <p class="fontmenu font-weight-bold text-secondary"> Trang : </p>
           <ul class="pagination">    	
    		<?php for($i=1;$i<=$tst;$i++){
    		if($i==$page)
				echo "<li class='page-item active'><a class='page-link' href='index.php?key=dstuong&page=$i'>$i</a></li> &nbsp;";
			else
				echo "<li class='page-item'><a class='page-link' href='index.php?key=dstuong&page=$i'>$i</a></li> &nbsp;"; 
    	  	}?></ul>        
                    
