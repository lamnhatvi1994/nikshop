
<div class="container">
	<h2 class="text-danger"> Thông tin khách hàng </h2>
	<form action="xldn.php" method="post" name="thongtindonhang">
    	<div class="form-group">
    	<table class="table-hover" width="300" height="300">        	
        	<tr>
            	<td width="89"><label for="tenKH" >Tên : </label></td> 
                <td width="182"><input class="form-control" name="tenKH" type="text" value="<?php if(isset($_SESSION['ten'])) echo $_SESSION['ten'] ?>"  /></td>
            </tr>
            <tr>
            	<td><label for="tenKH">Ngày giao : </label></td>
                <td><input class="form-control" name="ngaygiao" type="text"  /></td>
            </tr>   
            <tr>
            	<td><label for="tenKH">Địa điểm : </label></td>
                <td><input class="form-control" name="diadiem" type="text"  /></td>
            </tr>   
            <tr>
            	<td><label for="tenKH">Email : </label></td>
                <td><input class="form-control" name="email" type="text" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>" /></td>
            </tr>   
            <tr>
            	<td><label for="tenKH">Điện thoại : </label></td>
                <td><input class="form-control" name="dt" type="text"  value="<?php if(isset($_SESSION['dienThoai'])) echo $_SESSION['dienThoai'] ?>" /></td>
            </tr>
            <tr>
            	<td align="center" colspan="2"><input class="btn btn-success" name="dathang" type="submit" value="Đặt hàng" /></td>                
            </tr>          
        </table>
        </div>        
    </form>
    <p style="color:red;"> *Điền đầy đủ thông tin nha Đại Vương</p>
</div> 

    
