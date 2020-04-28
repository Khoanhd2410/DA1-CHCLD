<?php
    //load index/home.php
    include 'model/config.php';
    include 'model/xetduyet.php';
    $action = "xetduyet";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "xetduyet":
            
            if(isset($_GET['idcongdan'])){
                $idcongdan= $_GET['idcongdan'];
                $sttcongdan = Statuscongdan($idcongdan);
                if($sttcongdan['status'] == "Đã xét thực"){
                    statusxetduyet($idcongdan);
                }
                else
                {
                    statusxetduyet2($idcongdan);
                }
            }
            $xetduyet = xetduyet();
            // if($xetduyet['hoten'] == $hochieu['hoten'] && $status['cmnd'] == $hochieu['cmnd'] && $status['dienthoai'] == $hochieu['sdt'])
            // {
            //     changeStatus($idcongdan);
            // }
            // else
            // {
            //     changeStatus2($idcongdan);
            // }
            
            include 'view/xetduyet.php';      
            break;
    }
    // wtf ai đụng vô cái đó mà xoa luôn chữ php của tui 
?>  