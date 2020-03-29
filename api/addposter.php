<?php
include_once ("../base.php");

// 移動上傳的檔案 & 把檔名存起來
if(!empty($_FILES['poster']['tmp_name'])){
    $data['src']=$_FILES['poster']['name'];
    move_uploaded_file($_FILES['poster']['tmp_name'], "../images/".$data['src']);
}

$data['title']=$_POST['title'];
$rank=(int)nums("poster");
$data['rank']=$rank+1;
save("poster",$data);

to("../admin.php?do=poster");
?>