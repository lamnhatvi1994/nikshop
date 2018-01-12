<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Trang tìm kiếm trang phục theo GIÁ</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	 <div class="container">				
		<div class="row">					        	
						<p class="col-md-12 font-weight-bold text-dark display-4 text-center"> Trang tìm kiếm trang phục theo GIÁ </p>
						<form class=" row col-md-12 text-center" method="get" id="form_search" action="dstk.php">
                        
                        <input class=" col-md-5 form-control text-success font-weight-bold" type="text" name="min" id="min"  placeholder="Nhập giá MIN" />
                        
                        </br>
                        <input class=" col-md-5 form-control text-success font-weight-bold" type="text" name="max" id="max"  placeholder="Nhập giá MAX" />
                        </br>
                        <button class="btn btn-dark font-weight-bold text-light" id="button_search" type="submit"><i class="fa fa-search" aria-hidden="true"> &nbsp;<b>Tìm kiếm</b> </i></button>
						</form> 		
        </div>
        </br>
        <p class="text-danger font-weight-bold fontmenu"> *Giới hạn từ 1-2000 RP nha đại ca ! </p>
        <p class="text-danger font-weight-bold fontmenu"> *Tìm kiếm theo giá góc không tính Sale </p>
    </div>
    <div class="text-center"><a href="index.php" class="btn btn-danger text-light font-weight-bold" data-toggle="tooltip" data-placement="right" title="Nhấp để trở về trang chủ ! "><i class="fa fa-2x fa-sign-out" aria-hidden="true"> Trở về trang chủ </i></a></div>    
</body>
</html>