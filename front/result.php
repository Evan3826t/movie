<?php
include_once ("../base.php");

$data['seat'] = serialize($_GET['seat']);
$data['movie'] = $_GET['movie'];
$data['date'] = $_GET['date'];
$data['qt'] = $_GET['qt'];
$data['session'] = $_GET['session'];
$data['no'] = date("Ymd").rand(1,9999);
// $date['no'] = date("Ymd").sprintf("%04d",q('select max(id)+1 from ord')[0][0]);

save("ord",$data);


?>
<div class="row" style="background:#7373B9">
    <div class="col-12  my-4 text-white text-center">
        <h3>感謝您的訂購，您的訂單編號是:<?=$data['no']?></h3>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h4>電影名稱</h4>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h4>日期</h4>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h4>場次時間</h4>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h4><?=$data['movie']?></h4>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h4><?=$data['date']?></h4>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h4><?=$data['session']?></h4>
    </div>
    <div class="col-12 my-4 text-white text-center">
        <h4>
        座位:
        <?php
            foreach ($_GET['seat'] as $seat) {
                echo "　".(floor($seat/5)+1)."排".(($seat%5)+1)."號";
            }
        ?>
        共<?=$data['qt']?>張電影票
        </h4>
    </div>
    <div class="col-12  my-4 text-white text-center">
        <button type="button" class="btn btn-dark" onclick="lof('index.php')">確認</button>
    </div>
</div>
