<?php
	if(isset($_GET['idskin']))
	$idSKin = $_GET['idskin'];
?>
<p class="alert alert-danger font-weight-bold text-center"> Bạn có chắc muốn xóa Skin này không ?</p>
<div class="text-center">
<a href="index.php?key=qlskin" class="btn  btn-success text-light font-weight-bold"> Thôi không xóa đâu </a>
<a href="xlxoaskin.php?idskin=<?php echo $idSKin ;?>" class="btn  btn-danger text-light font-weight-bold"> Chắc chắn xóa </a>
</div>