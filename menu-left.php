<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<?php include('connect.php'); ?>
<body>
	<div class="col-md-2">
         <ul class="nav flex-column bg-light nav-pills">
          <li class="nav-item">
            <p class="nav-link disabled font-weight-bold text-muted text-center bg-dark">Loại Tướng</p>
          </li>
          <?php
		  	$sl = "select * from chungloaituong";
			$kq = mysql_query($sl);
			while($d = mysql_fetch_array($kq)){
		  ?>
          <li class="nav-item font-weight-bold">
            <a class="nav-link text-dark" href="#"><i class="fa fa-caret-square-o-right" aria-hidden="true"> <?php echo $d['tenCL'];?> </i></a>
          </li>
          &nbsp;          
          <?php } ?>          
         </ul>
    </div> 
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>