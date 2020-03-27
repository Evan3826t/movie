<div class="container" id="content">
<div class="row">
<?php

$today = date("Y-m-d");
$sql = "select * from movie where ondate = '$today' order by rank";
$hot = q($sql);
foreach ($hot as $k => $m) {
    ?>
    <div class="col-12 col-md-4 col-lg-4 mt-5">
        <div class="card bg-dark text-white" >
          <img src="./images/<?=$m['poster']?>.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$m['name']?></h5>
            <h6 class="card-subtitle mb-2 text-nuted">電影長度</h6>
            <p class="card-text"><?=$m['len']?>分</p>
            <a href="?do=intro&id=<?=$m['id']?>&type=1" class="btn btn-primary">上映中</a>
          </div>
        </div>
    </div>
    <?php
}

$sql = "select * from movie where ondate > '$today' order by rank";
$await = q($sql);
foreach ($await as $k => $m) {
    ?>
    <div class="col-12 col-md-4 col-lg-4 mt-5">
        <div class="card bg-dark text-white" >
          <img src="./images/<?=$m['poster']?>.jpg" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$m['name']?></h5>
            <h6 class="card-subtitle mb-2 text-nuted">電影長度</h6>
            <p class="card-text"><?=$m['len']?>分</p>
            <a href="?do=intro&id=<?=$m['id']?>&type=0" class="btn btn-primary">尚未上映</a>
          </div>
        </div>
    </div>
    <?php
}

?>
</div>
</div>
<script>
  $("#content").show();
</script>
