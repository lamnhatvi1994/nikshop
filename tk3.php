<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Trang tìm kiếm trang phục theo TÊN TƯỚNG </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
</head>
<body>
	 <div class="container">				
		<div class="row">
					<script type="text/javascript">
						$(document).ready(function()
						{	
							//sử dụng autocomplete với input có id = key
							$( "input#key" ).autocomplete({
								source:'search1.php', //link xử lý dữ liệu tìm kiếm
							})
						});
					</script>                    	
						<p class="font-weight-bold text-dark display-4 col-md-12 text-center"> Trang tìm kiếm trang phục theo TÊN TƯỚNG </p>
						<form class="col-md-12 text-center" method="get" id="form_search" action="xldn.php">
                        <input class="form-control text-success font-weight-bold" type="text" name="key" id="key"  placeholder="Nhập tên Tướng bạn muốn tìm kiếm" />
                        </br>
                        <button class="btn btn-dark font-weight-bold text-light" id="button_search" type="submit"><i class="fa fa-search" aria-hidden="true"> &nbsp;<b>Tìm kiếm</b> </i></button>
						</form> 
		</div>
        </br>
        <div class="text-center"><a href="index.php" class="btn btn-danger text-light font-weight-bold" data-toggle="tooltip" data-placement="right" title="Nhấp để trở về trang chủ ! "><i class="fa fa-2x fa-sign-out" aria-hidden="true"> Trở về trang chủ </i></a></div>  
    </div>  
</body>
</html>