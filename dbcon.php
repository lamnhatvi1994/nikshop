<?php
	$link=mysql_connect("localhost","root","") or die("khong the ket noi");
	mysql_select_db("banhang",$link);
	mysql_query("SET NAMES 'utf8'");
?>