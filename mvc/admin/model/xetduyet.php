<?php
include_once 'model/config.php';
function xetduyet(){
    $DBH=connect();
    $query="SELECT id_congdan, hoten, cmnd, dienthoai, status from congdan WHERE status='Đã xét thực'";
    $STH = $DBH->query($query);
    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    }
    // ở đây tui lấy tất cả từ đã xét thực nhưng tui muốn trạng thái tui đổi thành chờ xét duyệt

function Statuscongdan($idcongdan){  // không cùng chung 1 bảng mà nhỉ , tui hk hiểu lắm sao phải so sánh bảng khác v ông 
    $DBH=connect(); // ông so sanh dữ liệu từ bảng công dân này với bảng khác đúng không
    // ê tui vanaxchuaw hiểu lắm mình kệ cái idcong dan luôn đc không mình chỉ cho nó có idcongdan
    // idcongdan=1 ke
    $query="SELECT status from congdan WHERE id_congdan='$idcongdan'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
    }  

function statusxetduyet($idcongdan){
        $DBH = connect();
        $query = "UPDATE congdan set status='Phê duyệt' WHERE status ='$idcongdan'"; // =1 thì nó chỉ update cái row co idcd = 1 thoi, phair truyeen tham so vao
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    } 

function statusxetduyet2($idcongdan){
        $DBH = connect();
        $query = "UPDATE congdan set status='Không phê duyệt' WHERE status ='$idcongdan'"; // =1 thì nó chỉ update cái row co idcd = 1 thoi, phair truyeen tham so vao
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    } 
?>

