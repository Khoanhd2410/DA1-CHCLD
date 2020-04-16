<?php 
include_once 'model/config.php';
function Status($idcongdan){
    $DBH=connect();
    $query="SELECT hoten, cmnd, dienthoai from congdan WHERE id_congdan='$idcongdan'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
    }
function changeStatus($idcongdan)
    {
        $DBH = connect();
        $query = "UPDATE congdan set status=1 WHERE id_congdan = '$idcongdan'"; 
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    }
function changeStatus2($idcongdan)
    {
        $DBH = connect();
        $query = "UPDATE congdan set status=2 WHERE id_congdan = '$idcongdan'"; 
        $STH = $DBH -> prepare($query);
        $STH -> execute();
    }
    
?>