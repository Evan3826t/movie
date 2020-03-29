<?php
include_once ("../base.php");

$acc = $_POST['acc'];
$pw = $_POST['pw'];
$chk = nums("m_user", ['acc'=>$acc, 'pw'=>$pw]);

// 確認密碼正確性
if($chk > 0){
    $_SESSION['user'] = $acc;
    echo 1;
}else{
    echo 0;
}
?>