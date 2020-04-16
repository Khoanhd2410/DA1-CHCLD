<?php
    //load index/home.php
    include_once 'model/thongtin.php' ;
    include_once 'model/xethuc.php';

    $action = "xethuc";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "xethuc":
            if(isset($_GET['idcongdan']))
            {
            $idcongdan = $_GET['idcongdan'];
            $status = Status($idcongdan);
            }   
            if(($status['hoten']=="") || ($status['cmnd']=="") || ($status['dienthoai']==""))
            {
                changeStatus($idcongdan);
            }
          
            else
            {
                changeStatus2($idcongdan); 
                echo $status;
                exit();
            }
            $information = ThongTin(); 
            include 'view/xethuc.php';      
            break;
    }   
   
?>  