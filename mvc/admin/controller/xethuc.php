<?php
    //load index/home.php
    include_once 'model/thongtin.php' ;
    include_once 'model/xethuc.php';
    //index.php?controller=xethuc&act=xethuc&idcongdan
    // index.php?controller=xethuc&idcongdan vì nó mặc định chạy cái case xethuc nên k cần viết ra ch
    // mới vô nó chạy cái action còn case nó hk chạy 
      //mowis voo là nó nhận ngay cái act này nè, là chỉ show cái trang xét thực ra thôi 
    // à v thì lần sau nếu tui muốn act thì nên load riêng 1 trang để còn act hk tui f5 thì nó chạy như hồi nãi phải k
    // cái đó thì tôi chịu
    // mới vào nhận ngay cái index là chạy case index
    // còn muốn nó chạy case khác thì nối cái &act vào thôi là nó chạy
    // h trường hợp thì thì href="index.php?controller=xethuc&act=xethuc&idcongdan" 
    // tại vì xetthuc nó bao trọn luôn cái idcong dân nên phải act nó ra 
    $action = "xethuc";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {

        case "xethuc":  // index,php?controller=xt&act=xt&idcongdan=3  
            // if(isset($_GET['idcongdan']))
            // {
            // $idcongdan = $_GET['idcongdan'];
        //     $status = Status($idcongdan);
               
        //     if(($status['hoten']=="") || ($status['cmnd']=="") || ($status['dienthoai']==""))
        //     {
        //         changeStatus($idcongdan);        
        //     }
        //     else
        //     {
        //         changeStatus2($idcongdan); 

        //     }
        // 
        if(isset($_GET['idcongdan'])){
            $idcongdan = $_GET['idcongdan'];
            $status = Status($idcongdan);
            $hochieu = hochieu($idcongdan);
            if($status['hoten'] == $hochieu['hoten'] && $status['cmnd'] == $hochieu['cmnd'] && $status['dienthoai'] == $hochieu['sdt'])
            {
                changeStatus($idcongdan);
            }
            else
            {
                changeStatus2($idcongdan);
            }
            
        }
        // đấy chiều nó lỗi v cái tui mới thêm if(isset) để nó nhận cái id cong dân nếu bỏ trong nó bảo hk nhận cái hộ chiếu
            $information = ThongTin(); 
            include 'view/xethuc.php';      
            break;
        case "thongtin":
                if(isset($_GET['idcongdan'])){
                    $idcongdan = $_GET['idcongdan'];   
                    $hochieu = hochieu($idcongdan);
                }
                include 'view/thongtin.php'; 
                break;
    }
?>  