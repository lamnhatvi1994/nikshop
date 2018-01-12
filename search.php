<?php
//neu tồn tại biến term từ gửi sang
if(isset($_GET['term']))
{
    //lay từ khóa cần tìm kiếm
    $key = $_GET['term'];
    
    //cau hinh thong tin ket noi CSDL
   //Kết nối tới csdl
    $conn = mysql_connect("localhost", "root", "") or die("can't connect database");
    //Lựa chọn csdl và cho phép hiển thị mã utf8
    mysql_select_db("nikshop",$conn);
    mysql_query("SET NAMES 'utf8'");
    
    //cau lenh truy van tim kiem voi tu khoa
    $req = "SELECT tenSkin "
        . "FROM skin "
            . "WHERE tenSkin LIKE '%" . $key . "%' ";
    
    $query = mysql_query($req);
    
    while ($row = mysql_fetch_array($query)) {
        $results[] = array('label' => $row['tenSkin']);
    }
    //trả về dữ liệu dạng json
    echo json_encode($results);
}
