
    <div class="row">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-static-top col-md-12"> 
            <a class="navbar-brand" href="index.php"><img src="images/icon.JPG" /></a> 
              <ul class="navbar-nav col-md-9">
                <li class="nav-item">
                  <a class="nav-link fontmenu font-weight-bold" href="index.php"><i class="fa fa-home" aria-hidden="true"> Trang chủ </i></a>
                </li>
                &nbsp;
                 <li class="nav-item">
                  <a class="nav-link fontmenu font-weight-bold" href="index.php?key=dstuong"><i class="fa fa-list" aria-hidden="true"> DS Tướng </i></a>
                </li>
                &nbsp; 
                <li class="nav-item">
                  <a class="nav-link fontmenu font-weight-bold" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-search" aria-hidden="true"> Tìm kiếm </i></a>
                </li>
                &nbsp;                             
                <li class="nav-item">
                  <a class="nav-link fontmenu font-weight-bold text-danger" href="index.php?key=sale"><i class="fa fa-tag" aria-hidden="true"> Sale off </i></a>
                </li>
                &nbsp;
                <li class="nav-item">
                  <a class="nav-link fontmenu font-weight-bold" href="index.php?key=lienhe"><i class="fa fa-handshake-o" aria-hidden="true"> Liên hệ </i></a>
                </li>
                &nbsp;
                <li class="nav-item">
                  <a href="#" data-toggle="modal" data-target="#dangky" class="btn btn-success fontmenu font-weight-bold"><i class="fa fa-user-plus" aria-hidden="true"> Đăng ký </i></a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php if(!isset($_SESSION['flag'])) {echo'<li class="nav-item">
                  <a href="#" data-toggle="modal" data-target="#dangnhap" class="btn btn-success fontmenu font-weight-bold"><i class="fa fa-sign-in" aria-hidden="true"> Đăng nhập </i></a>
                </li>';}else{echo'<li class="nav-item">
                  <a href="xlthoatdn.php" class="btn btn-primary fontmenu font-weight-bold"><i class="fa fa-sign-out" aria-hidden="true"> Đăng xuất </i></a>
                </li>' ;} ?>
                &nbsp;
                <li class="nav-item">
                  <a class="nav-link fontmenu font-weight-bold text-warning" href="index.php?key=gh"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp;<?php if(!isset($_SESSION['somathang']))echo '0';else echo ($_SESSION['somathang']); ?></a>
                </li>
              </ul>
              	<div class="row col-md-3">
                <?php if(isset($_SESSION['flag'])){
						if(($_SESSION['quyen']) == 1){echo '<ul class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-2x fa-user-circle" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="index.php?key=tttk">Thông tin tài khoản</a><li>
                    <li><a class="dropdown-item" href="#">Đổi mật khẩu</a><li>
                    <li><a class="dropdown-item" href="index.php?key=ql">Quản lý</a><li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="xlthoatdn.php">Thoát</a><li>
                  </ul>
                </ul>';}else{
					echo '<ul class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fa fa-2x fa-user-circle" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="index.php?key=tttk">Thông tin tài khoản</a><li>
                    <li><a class="dropdown-item" href="#">Đổi mật khẩu</a><li>                    
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="xlthoatdn.php">Thoát</a><li>
                  </ul>
                </ul>';}} ?>
                <p class="navbar-text text-light"><?php if(isset($_SESSION['ten'])) echo 'Hi, '.$_SESSION['ten'] ?>  </p>
                </div>                        	
            </nav>  	
        <!--  Tìm Kiếm  -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title"> Chọn cách tìm kiếm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>        
              <!-- Modal body -->
              <div class="modal-body">              
              	<a href="tk1.php" class="btn btn-danger">Tên Skin</a>                
                <a href="tk2.php" class="btn btn-warning text-light">Giá</a> 
                <a href="tk3.php" class="btn btn-success">Tên Tướng</a>      
              </div>        
              <!-- Modal footer -->
              <div class="modal-footer text-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
              </div>        
            </div>
          </div>
        </div>
         
         <!--  Đăng nhập  -->
         <div class="modal fade" id="dangnhap">
          <div class="modal-dialog">
            <div class="modal-content">        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title font-weight-bold"> Đăng nhập </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>        
              <!-- Modal body -->
              <div class="modal-body">              
              	<form name="dangnhap" method="post" action="xldn.php" >
                <div class="form-group">
                  <label for="id" class="font-weight-bold">ID :</label>
                  <input type="id" class="form-control font-weight-bold" id="id" placeholder="Nhập ID" name="id">
                </div>
                <div class="form-group">
                  <label for="pwd" class="font-weight-bold">Password :</label>
                  <input type="password" class="form-control font-weight-bold" id="password" placeholder="Nhập password" name="password">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                  </label>
                </div>
                	<button type="submit" class="btn btn-primary"> Đăng nhập </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
              </form>      
              </div>
              </div>        
            </div>
          </div>
          
          <!--  Đăng ký  -->
         <div class="modal fade" id="dangky">
          <div class="modal-dialog">
            <div class="modal-content">        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title font-weight-bold"> Đăng Ký </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>        
              <!-- Modal body -->
              <div class="modal-body">              
              	<form name="dangky" method="post" action="xldk.php" >
                <div class="form-group">
                  <label for="ten" class="font-weight-bold">Tên :</label>
                  <input type="text" class="form-control font-weight-bold" id="ten" placeholder="Nhập Tên" name="ten">
                </div>
                <div class="form-group">
                  <label for="id" class="font-weight-bold">ID :</label>
                  <input type="id" class="form-control font-weight-bold" id="id" placeholder="Nhập ID" name="id">
                </div>
                <div class="form-group">
                  <label for="pwd" class="font-weight-bold">Password :</label>
                  <input type="password" class="form-control font-weight-bold" id="password" placeholder="Nhập password" name="password">
                </div>
                <div class="form-group">
                  <label for="diaChi" class="font-weight-bold">Địa Chỉ :</label>
                  <input type="text" class="form-control font-weight-bold" id="diaChi" placeholder="Nhập Địa Chỉ" name="diaChi">
                </div>
                <div class="form-group">
                  <label for="diaThoai" class="font-weight-bold"> Số Điện Thoại :</label>
                  <input type="text" class="form-control font-weight-bold" id="diaThoai" placeholder="Nhập SĐT" name="dienThoai">
                </div>
                <div class="form-group">
                  <label for="email" class="font-weight-bold">Email :</label>
                  <input type="email" class="form-control font-weight-bold" id="email" placeholder="Nhập Email" name="email">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                  </label>
                </div>
                	<button type="submit" class="btn btn-primary"> Đăng ký </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
              </form>      
              </div>
              </div>        
            </div>
          </div>
        
        </div>               
        </div>


