<?php 
    include_once 'model/config.php';
function ThongTin()
{
    $DBH=connect();
    $query="select * from congdan";
    // đáng lí ở đây phải thêm where id_congdan=$idcongdan như v nó mới lấy hết từ id chứ sao nó có thể lấy đc nhỉ
    // trong khi biến foreach của tui là $form = thongtin()
    // hàm này 0éo phải cái hàm hồi nãy t4i xoá 0i
    // nguyên lí sao nó chạy theo id đc nhỉ
    
    $STH = $DBH->query($query);
    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>