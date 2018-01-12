<?php
include('connect.php');
require('dbcon.php');
require('library/mpdf.php');
require_once("docsotien.php");

// Tao moi 1 doi tuong thuoc lop mPDF
$mpdf=new mPDF();

$mpdf->useAdobeCJK = true;
$mpdf->SetAutoFont(AUTOFONT_ALL);
$hoadon = $_GET['id'];
$date = date("Y-m-d");
$str = "
<style type='text/css'>
table.altrowstable { font-size:12px; color:#333333; border-width: 1px; border-color: #a9c6c9; border-collapse: 			collapse; background-color: #FFF; }
table.altrowstable td { border-width: 1px; padding: 8px; border-style: solid; border-color: #a9c6c9; }
#tablerow { background:#CCC; text-align:center; }
p { text-align:center; color: #900; font-size: 22px; text-shadow: 1px 1px 1px rgba(255,255,255,0.8); margin-top:5px; margin-bottom:5px; }
</style>
";
// IN RA TIÊU ĐỀ FILE
$str = "
<a style='font-weight:bold; font-size:18px;'> *NIKShop* - Nơi bán toàn bộ trang phục LMHT</a><br />
<a style='font-size:12px;'>Bùi Đình Túy - Phường 24 - Quận Bình Thạnh - TP.HCM</a><br />
<a style='font-size:12px;'>Tel: 0123456789 - Fax: (08).080808080</a>
<p align='center'>Hóa Đơn Mua Hàng (INVOICE)</p>";
$mpdf->WriteHTML($str);
$sql = "select* from donhang where idDH ='$hoadon'";
$ngay = date('d');
$thang = date('m');
$nam = date('y');
$kq = mysql_query($sql);
$dong = mysql_fetch_array($kq);
$date = date('d-m-Y', strtotime($dong['thoidiemdathang']));
$date2 = date('d-m-Y', strtotime($dong['thoidiemgiaohang']));
$tennguoinhan = $dong['tennguoinhan'];
$diadiemgiaohang = $dong['diadiemgiaohang'];
$str = "
<div align='center'><a>Ngày: $ngay Tháng: $thang Năm: 20$nam</a><br/>
<a>...</a></div><br/>
<table width='180'>
<tr>
<td>Ngày Đặt:</td>
<td>$date</td>
</tr>
<tr>
<td>Ngày Giao:</td>
<td>$date2</td>
</tr>
<tr>
<td>Người Nhận:</td>
<td>$tennguoinhan</td>
</tr>
<tr>
<td>Địa Chỉ:</td>
<td>$diadiemgiaohang</td>
</tr>
</table>
<div align='center'><a>...</a></div><br/>
<table class='altrowstable' align='center'>
<tr id='tablerow' style='color:#900'>
<td width='40'><strong>STT</strong></td>
<td width='140'><strong>id DH</strong></td>
<td width='200'><strong>id SP</strong></td>
<td width='125'><strong>Số Lượng</strong></td>
<td width='125'><strong>Đơn Giá</strong></td>
</tr>
";
$mpdf->WriteHTML($str);
$sql1 = "select* from ct_donhang where idDH ='$hoadon'";
$i = 0;
$kq1 = mysql_query($sql1);
while($dong1 = mysql_fetch_array($kq1)){
$i++;
$gia = $dong1['gia'];
$soluong = $dong1['soLuong'];
$idsp = $dong1['idSkin'];
$str = "
<tr id='tablerow' style='color:#900'>
<td width='40'><strong>$i</strong></td>
<td width='140'><strong>$hoadon</strong></td>
<td width='200'><strong>$idsp</strong></td>
<td width='125'><strong>$soluong</strong></td>
<td width='125'><strong>$gia</strong></td>
</tr>
";
$mpdf->WriteHTML($str);
$tien += $gia ;
}

$thue = round($tien*10/100);
$thanhtien = $tien + $thue;
$tienbangchu = docso($thanhtien);
$str = "
<tr style='border:0px'>
<td colspan='3' style='border-right:0px'></td>
<td style='border-left:0px; border-right:0px'>Tổng Tiền Hàng:</td>
<td style='border-left:0px'>$tien RP</td>
</tr>
<tr style='border:0px'>
<td colspan='3' style='border-right:0px'></td>
<td style='border-left:0px; border-right:0px'>Thuế GTGT:</td>
<td style='border-left:0px'>$thue RP</td>
</tr>
<tr style='border:0px'>
<td colspan='3' style='border-right:0px'></td>
<td style='border-left:0px; border-right:0px'>Tổng Số Tiền:</td>
<td style='border-left:0px'>$thanhtien RP</td>
</tr>
</table><br/>
<a style='font-weight:bold; font-size:14px; padding-left:50px'>Tiền Bằng Chữ: </a>$tienbangchu RiotPoint<br/><br/>
</body>
";

$mpdf->WriteHTML($str);
$mpdf->Output('hoadon_'.$hoadon.'.pdf','I');
exit;
?>