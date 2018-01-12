<?php 
include('connect.php');
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang chủ</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>

<body>		
    <div class="container-fluid">    	
			<?php include('menu-top.php'); ?>
            </br>
    </div> 
    <?php 
		if((isset($_GET['key']))){
			switch($_GET['key'])
			{				
				case "dstuong": 
					include("dstuong.php");
				break;
				case "dssp": 
					include("dssp.php");
				break;
				case "chitietsp": 
					include("chitietsp.php");
				break;
				case "sale": 
					include("sale.php");
				break;
				case "lienhe": 
					include("lienhe.php");
				break;
				case "tttk": 
					include("tttk.php");
				break;
				case "gh": 
					include("gh.php");
				break;	
				case "ttdh": 
					include("ttdh.php");
				break;				
				case "ql": 
					include("quanly.php");
				break;
				case "qlskin": 
					include("qlskin.php");
				break;
				case "themskin": 
					include("themskin.php");
				break;
				case "suaskin": 
					include("suaskin.php");
				break;
				case "xoaskin": 
					include("xoaskin.php");
				break;													
			}									
		}else{
			include("main.php");
		}				
	?>  
     
  
   		
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>