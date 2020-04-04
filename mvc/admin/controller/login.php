<?php
    include_once "model/config.php";
    include_once "model/user.php";
    $action = "login";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "login":
            if(isset($_POST['btn_submit']))
            {
                $email=$_POST['username'];
                $pass=$_POST['password'];
                if(CheckLogin($email,$pass)==true)
                {
                    $_SESSION['admin']=$email;
                    include 'view/home.php';
                }
                else
                {
                    include 'view/login.php';
                }
            }
            else{
            include 'view/login.php';
            }
            break;
        case "logout":
            unset($_SESSION['admin']);
            header("location: index.php?controller=home");
        break;
    }
        
?>  
