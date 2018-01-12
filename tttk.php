		
	<div class="container">
    <?php
		$iduser = $_SESSION['idUser'];
		$sl = "select * from user where idUser = '$iduser'";
		$kq = mysql_query($sl);
		$d = mysql_fetch_array($kq);
	  ?>
  <h2>Thông tin tài khoản của sếp <strong class="text-warning"><?php echo $d['ten'] ?></strong></h2>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Tên</th>
        <th>ID</th>
        <th>Password</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><?php echo $d['ten'] ?></th>
        <th><?php echo $d['id'] ?></th>
        <th>*********</th>
        <th><?php echo $d['diaChi'] ?></th>
        <th><?php echo $d['dienThoai'] ?></th>
        <th><?php echo $d['email'] ?></th>
      </tr>
       <tr>
        <th><a data-toggle="modal" data-target="#doiten" class="btn btn-success font-weight-bold" href="#">Đổi Tên</a></th>
        <th></th>
        <th><a class="btn btn-success font-weight-bold" href="#">Đổi Password</a></th>
        <th><a data-toggle="modal" data-target="#doidiaChi" class="btn btn-success font-weight-bold" href="#">Đổi Địa Chỉ</a></th>
        <th><a data-toggle="modal" data-target="#doidienThoai" class="btn btn-success font-weight-bold" href="#">Đổi SĐT</a></th>
        <th><a data-toggle="modal" data-target="#doiemail" class="btn btn-success font-weight-bold" href="#">Đổi Email</a></th>
      </tr>     
    </tbody>
  </table>
  	<div class="row">
  	<a class="btn btn-secondary font-weight-bold col-md-6" href="#">Đổi Hết</a>
    <a class="btn btn-danger font-weight-bold col-md-6" href="index.php">Về trang chủ</a>
    </div>
</div>

<!-- Đổi tên -->
<div class="modal fade" id="doiten">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đổi tên</h4>
        <button type="button" class="close" data-dismiss="modal" name="doiten">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="xltttk.php" method="post" name="doiten">
        	<?php				
				echo '<strong> Tên cũ : <b class="text-warning">'. $d["ten"].'</b> </strong>';				
            ?>
            </br></br>
            <input type="hidden" name="idUser" id="idUser" value="<?php echo $d["idUser"]; ?>" />
        	<input type="text" class="form-control font-weight-bold" id="tenmoi" placeholder="Nhập tên mới" name="tenmoi">
            </br></br>
            <button type="submit" class="btn btn-success" >Cập Nhật</button>
        	<button type="button" class="btn btn-success" data-dismiss="modal">Thoát</button>     
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Đổi Địa Chỉ -->
<div class="modal fade" id="doidiaChi">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đổi Địa Chỉ</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="xltttk.php" method="post">
        	<?php				
				echo '<strong> Địa Chỉ cũ : <b class="text-warning">'. $d["diaChi"].'</b> </strong>';				
            ?>
            </br></br>
            <input type="hidden" name="idUser" id="idUser" value="<?php echo $d["idUser"]; ?>" />
        	<input type="text" class="form-control font-weight-bold" id="diaChimoi" placeholder="Nhập Địa Chỉ mới" name="diaChimoi">
            </br></br>
            <button type="submit" class="btn btn-success" >Cập Nhật</button>
        	<button type="button" class="btn btn-success" data-dismiss="modal">Thoát</button>     
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Đổi SDT -->
<div class="modal fade" id="doidienThoai">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đổi SĐT</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="xltttk.php" method="post">
        	<?php				
				echo '<strong> SĐT cũ : <b class="text-warning">'. $d["dienThoai"].'</b> </strong>';				
            ?>
            </br></br>
            <input type="hidden" name="idUser" id="idUser" value="<?php echo $d["idUser"]; ?>" />
        	<input type="text" class="form-control font-weight-bold" id="dienThoaimoi" placeholder="Nhập SĐT mới" name="dienThoaimoi">
            </br></br>
            <button type="submit" class="btn btn-success" >Cập Nhật</button>
        	<button type="button" class="btn btn-success" data-dismiss="modal">Thoát</button>     
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Đổi email -->
<div class="modal fade" id="doiemail">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đổi Email</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="xltttk.php" method="post">
        	<?php				
				echo '<strong> Email cũ : <b class="text-warning">'. $d["email"].'</b> </strong>';				
            ?>
            </br></br>
            <input type="hidden" name="idUser" id="idUser" value="<?php echo $d["idUser"]; ?>" />
        	<input type="text" class="form-control font-weight-bold" id="emailmoi" placeholder="Nhập Email mới" name="emailmoi">
            </br></br>
            <button type="submit" class="btn btn-success" >Cập Nhật</button>
        	<button type="button" class="btn btn-success" data-dismiss="modal">Thoát</button>     
        </form>
      </div>
    </div>
  </div>
</div>