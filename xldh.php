<?php
session_start();
	include_once('connect.php');

if(isset($_POST['guidathang'])){
	echo $_SESSION["somathang"].'</br>'; 
for($i=1;$i<=$_SESSION["somathang"];$i++){
	echo $_SESSION["idSkin".$i];
	echo '</br>' ;}}?>