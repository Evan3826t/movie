<?php

include_once ("../base.php");

// 刪除檔案
if($_POST['table'] == "poster"){
    $d=find("poster",$_POST['id']);
    unlink("../images/".$d['src']);
    echo $d['src'];
}

// 刪除資料
del($_POST['table'],$_POST['id']);

?>