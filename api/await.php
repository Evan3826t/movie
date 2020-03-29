<?php
include_once ("../base.php");

$today = date("Y-m-d");

// 未上映電影
$sql = "select * from movie where ondate > '$today' order by rank";
$movies = q($sql);
foreach ($movies as $k => $m) {
    ?>
    <div class="col-12 col-md-4 col-lg-4 mb-5">
        <div class="card bg-dark text-white" >
          <img src="./images/<?=$m['poster']?>.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$m['name']?></h5>
            <h6 class="card-subtitle mb-2 text-nuted">電影長度</h6>
            <p class="card-text"><?=$m['len']?>分</p>
            <a href="?do=intro&id=<?=$m['id']?>&type=0" class="btn btn-primary">詳細內容</a>
          </div>
        </div>
    </div>
    <?php
}
?>