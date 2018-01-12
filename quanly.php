<?php 
if(!isset($_SESSION['idUser'])){
//	include "formdangnhap.php"; 
	echo "<script language='javascript'>alert(' Bạn phải đăng nhập !'); location.href='../test/index.php';</script>";
	}if($_SESSION['quyen'] != '1' ){
		echo "<script language='javascript'>alert(' Bạn không có quyền !'); location.href='../test/index.php';</script>";
	}
?>
<div class=container-fluid>	
     <div id="accordion">
    <div class="card">
      <div class="card-header">
      <p class="text-danger fontmenu font-weight-bold"> Chọn hình thức quản lý </p>
      	<a class="card-link btn btn-danger text-light font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#tuong">Tướng</a>
        <a class="card-link btn btn-warning text-light font-weight-bold" data-toggle="collapse" data-parent="#accordion" href="#chungloaituong">Chủng loại Tướng</a>        
        <a class="card-link btn btn-success text-light font-weight-bold" href="index.php?key=qlskin">Skin</a>
      </div>
      <div id="chungloaituong" class="collapse">
        <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr class="text-success fontmenu">
                <th>idCL</th>
                <th>tenCL</th>
                <th> <a href="#"><i class="fa fa-plus-square" style="font-size:20px; color:blue;"> Thêm </i></a> </th>
              </tr>
            </thead>
            <?php
				$sl = "select* from chungloaituong";
				$kq = mysql_query($sl); 
				while($d = mysql_fetch_array($kq)){
			?>
            <tbody>
              <tr style="font-size:14px" class="text-dark">
                <td><?php echo $d['idCL']; ?></td>
                <td><?php echo $d['tenCL']; ?></td>
                <td>                	
                	<a href="#"><i class="fa fa-wrench" style="font-size:20px; color:blue;"> Sửa </i></a> /
                    <a href="#"><i class="fa fa-trash" style="font-size:20px; color:blue;"> Xóa </i></a>
                </td>
              </tr>
            </tbody>
            <?php }?>
    	</table>           
        </div>
      </div>
         <div id="tuong" class="collapse show">
        <div class="card-body">
         <table class="table table-striped">
            <thead>
              <tr class="text-success fontmenu">
                <th>idTuong</th>
                <th>idCL</th>
                <th>tenTuong</th>
                <th>bietDanh</th>
                <th>urlHinh</th>
                <th> <a href="#"><i class="fa fa-plus-square" style="font-size:20px; color:blue;"> Thêm </i></a> </th>
              </tr>
            </thead>
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
				while($d=mysql_fetch_array($kq)){
			?>
            <tbody>
              <tr style="font-size:14px" class="text-dark">
                <td><?php echo $d['idTuong']; ?></td>
                <td><?php echo $d['idCL']; ?></td>
                <td><?php echo $d['tenTuong']; ?></td>
                <td><?php echo $d['bietDanh']; ?></td>
                <td><?php echo $d['urlHinh']; ?></td>
                <td>                	
                	<a href="#"><i class="fa fa-wrench" style="font-size:20px; color:blue;"> Sửa </i></a> /
                    <a href="#"><i class="fa fa-trash" style="font-size:20px; color:blue;"> Xóa </i></a>
                </td>
              </tr>
            </tbody>
            <?php }?>
    	</table>  
        <p class="fontmenu font-weight-bold text-secondary"> Trang : </p>
           <ul class="pagination">    	
    		<?php for($i=1;$i<=$tst;$i++){
    		if($i==$page)
				echo "<li class='page-item active'><a class='page-link' href='index.php?key=ql&page=$i'>$i</a></li> &nbsp;";
			else
				echo "<li class='page-item'><a class='page-link' href='index.php?key=ql&page=$i'>$i</a></li> &nbsp;"; 
    	  	}?></ul>         
        </div>
      </div>
       <div id="skin" class="collapse">              
    	</div>
</div>