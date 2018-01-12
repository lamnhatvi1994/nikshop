	<?php include('connect.php');
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang tìm kiếm trang phục theo GIÁ</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>     	
    <div class="container">    	
    	<h1 class="text-center"> Danh sách toàn bộ skin có giá từ <b class="text-danger"><?php echo $_GET['min'] ?> RP</b> đến <b class="text-danger"><?php echo $_GET['max'] ?> RP</b> </h1>        
        <div class="row col-md-12">
			
		<?php 
			if(isset($_GET['min']) && ($_GET['max']) ){
				$min = $_GET['min'];
				$max = $_GET['max'];
				$sp1tr=9;
				$sl1 = "select* from skin WHERE gia BETWEEN '$min' AND '$max' ";
				$kq1=mysql_query($sl1);	
				$tsp=mysql_num_rows($kq1);	
				$tst=ceil($tsp/$sp1tr);	
				if(isset($_GET['page'])){ $page=$_GET['page'];} 
				else {$page=1;}
				$vitri=($page-1)*$sp1tr;	
				$sl = "select* from skin WHERE gia BETWEEN '$min' AND '$max' ORDER BY gia ASC limit $vitri,$sp1tr";
				$kq = mysql_query($sl);
				if(mysql_num_rows($kq)>0)
				{
				while($d = mysql_fetch_array($kq)){			
		?>
            <div class="card col-md-4 mart20">
                <div class="card-body">
                  <h4 class="card-title text-success font-weight-bold text-center"><?php echo $d['tenSkin']; ?></h4>
                  <img class="card-img rounded-circle" src="<?php echo $d['urlHinh']; ?>" alt="Card image">
                  </br>
                  <p class=" card-text text-warning font-weight-bold text-center">Giá : <?php echo $d['gia']; ?> RP</p>
                                
                  <div class="text-center"><a href="index.php?key=chitietsp&id=<?php echo $d['idSkin']; ?>" class="btn btn-info text-center" data-toggle="tooltip" data-placement="right" title="Nhấp để xem chi tiết trang phục <?php echo $d['tenSkin']; ?> !"><b> Xem chi tiết Skin </b></a></div>              
                </div>            
            </div>
            <?php }
				 ?> 
            	     
         </div>
         <p class="fontmenu font-weight-bold text-secondary"> Trang : </p>
           <ul class="pagination">    	
    		<?php for($i=1;$i<=$tst;$i++){
    		if($i==$page)
				echo "<li class='page-item active'><a class='page-link' href='dstk.php?page=$i&min=$min&max=$max'>$i</a></li> &nbsp;";
			else
				echo "<li class='page-item'><a class='page-link' href='dstk.php?page=$i&min=$min&max=$max'>$i</a></li> &nbsp;"; 
    	  	}?></ul>
            <?php }else
				echo "<b class='alert alert-warning'> *Không có Skin nào trong khoảng giá này hết. Đại Vương thử lại đi :)) </b> </br> </br>";
				} ?>  
	</div>           
          <div class="text-center"><a href="tk2.php" class="btn btn-danger text-light font-weight-bold" data-toggle="tooltip" data-placement="right" title="Nhấp để trở về trang chủ ! "><i class="fa fa-2x fa-sign-out" aria-hidden="true"> Trở về trang tìm kiếm </i></a></div>
          </br>
          </br>             
</body>
</html>