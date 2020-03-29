<?php
include_once ("../base.php");

$d=find($_POST['table'],$_POST['id']);
$d1=find($_POST['table'],$_POST['id2']);
$r=$d;
$d['rank']=$d1['rank'];
$d1['rank']=$r['rank'];
save($_POST['table'],$d);
save($_POST['table'],$d1);

?>