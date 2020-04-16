<?php
function CheckLogin($email,$pass)
{  
    $DBH=connect();
    $query="
    SELECT * FROM admins where email='$email' AND password='$pass'";
    $STH = $DBH->query($query)->fetch();
    // print_r($STH);
    // exit();
    return $STH;
    //nhu h e hk biet cho nay them fetch hay hk e biet no lay theo hang
    // $rows_affected = $STH->rowCount();  
    // // $return = $STH->fetch(PDO::FETCH_ASSOC);
    // if ($rows_affected == 0)
    // {
    //     return false;
    // }
    // return true;
}

?>