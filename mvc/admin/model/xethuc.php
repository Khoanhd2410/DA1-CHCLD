<?php 
include_once 'model/config.php';
function Status($idcongdan){  // không cùng chung 1 bảng mà nhỉ , tui hk hiểu lắm sao phải so sánh bảng khác v ông 
    $DBH=connect(); // ông so sanh dữ liệu từ bảng công dân này với bảng khác đúng không
    // ê tui vanaxchuaw hiểu lắm mình kệ cái idcong dan luôn đc không mình chỉ cho nó có idcongdan
    // idcongdan=1 ke
    $query="SELECT hoten, cmnd, dienthoai from congdan WHERE id_congdan='$idcongdan'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
    }
function changeStatus($idcongdan){
        $DBH = connect();
        $query = "UPDATE congdan set status='Đã xét thực' WHERE id_congdan = '$idcongdan'"; // =1 thì nó chỉ update cái row co idcd = 1 thoi, phair truyeen tham so vao
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    }
function changeStatus2($idcongdan){
        $DBH = connect();
        $query = "UPDATE congdan set status='Không hợp lệ' WHERE id_congdan = '$idcongdan'"; // =1 thì nó chỉ update cái row co idcd = 1 thoi, phair truyeen tham so vao
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    }    
function hochieu($idcongdan){
    $DBH = connect();
    $query="SELECT id_hochieu, hoten, cmnd, sdt from hochieu WHERE id_congdan='$idcongdan'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>