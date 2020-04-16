<?php 
    include_once 'model/config.php';
function ThongTin()
{
    $DBH=connect();
    $query="select * from congdan";
    $STH = $DBH->query($query);
    return $STH;
}
?>