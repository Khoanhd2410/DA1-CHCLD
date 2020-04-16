<?php
include_once 'model/config.php';
function xetduyet(){
    $DBH=connect();
    $query="SELECT hoten, cmnd, dienthoai from congdan WHERE status='2'";
    $STH = $DBH->query($query);
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    return $result;
    }
?>