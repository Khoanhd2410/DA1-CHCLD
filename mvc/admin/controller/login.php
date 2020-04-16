<?php
    include_once "model/config.php";
    include_once "model/login.php";
    $action = "default";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case 'default':
            include 'view/login.php';
        break;
        case "login":
            $email = $_POST['username'];
            $pass = $_POST['password'];
            $info= CheckLogin($email,$pass);

            if ($info['id_admin'] > 0)
            {
                $_SESSION['id_admin']= $info['id_admin'];
                $_SESSION['role']= $info['role'];   
                $_SESSION['name']= $info['name'];       
                $_SESSION['action']= $info['action'];
                $_SESSION['status']= $info['status'];
            }
            if ($_SESSION['role'] == 1)
            {
                header("location: index.php?controller=xethuc");
            }
            elseif ($_SESSION['role'] == 2)
            {
                header("location: index.php?controller=xetduyet");
            }
            elseif ($_SESSION['role'] == 3)
            {
                header("location: index.php?controller=luutru");
            }
            else
            {
                header("location: index.php?controller=giamsat");
            }
        break;




            // if(isset($_POST['btn_submit']))
            // {
            //     $email=$_POST['username'];
            //     $pass=$_POST['password'];
            //     if(CheckLogin($email,$pass)==true)
            //     {
            //         $_SESSION['role']=
            //         $_SESSION['admin']=$email;
            //         include 'view/home.php';
            //     }
            //     else
            //     {
            //         $msg_error="Tài Khoản hoặc Mật Khẩu sai! ";
            //         include 'view/login.php';
            //     }
            // }
            // break;
        case "logout":
            unset($_SESSION['id_admin']);
            header("location: index.php?controller=login");
        break;
    }
        
?>  
