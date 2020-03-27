<?php
include_once ("../base.php");

$acc = $_POST['acc'];
$chk = nums("m_user", ['acc'=>$acc]);

if($chk>0){
    $_SESSION['user']=$acc;
    echo 1;
}else{
    echo 0;
}
?>