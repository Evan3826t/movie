<?php
// 每頁筆數
$div=9;
// 現在頁數
$now=(empty($_GET['p']))?1:$_GET['p'];
$start=($now-1)*$div;
$total=nums("ord");
$page=ceil($total/$div);
$orders=all("ord",[]," limit $start,$div");
?>
<table class="table table-striped table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">訂單編號</th>
      <th scope="col">帳號</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($orders as $k => $o) {
        ?>
        <tr>
            <th scope="row"><?=$k+1?></th>
            <td><?=$o['no']?></td>
            <td><?=$o['user']?></td>
            <td>
              <button class="btn btn-danger mr-1 detail" data-movie="<?=$o['movie']?>" data-date="<?=$o['date'] . "　" . $o['session']?>">詳細資料</button>
              <button class="btn btn-danger" onclick="del('ord',<?=$o['id']?>)">刪除</button>
            </td>
        </tr>
        <?php
    }
    ?>
    
  </tbody>
</table>
<div class="text-center">
<!-- 分頁 -->
    <?php
    if($now-1 > 0){
      echo "<a class='text-white' href='?do=movie&p=". ($now-1) ."'> < </a>";
    }
    for( $i = 1; $i <= $page; $i++){
      $font = ($i==$now)?"24px":"16px";
      echo "<a class='text-white' href='?do=movie&p=$i' style='font-size:$font'>$i</a>";
    }
    if($now+1 <= $page){
      echo "<a class='text-white' href='?do=movie&p=". ($now+1) ."'> ></a>";
    }
    ?>
</div>

<div id="modal" class="modal fade text-dark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
          <h6>
            帳號：<span></span>
          </h6>
          <h6>
            電影：<span></span>
          </h6>
          <h6>
            日期場次：<span></span>
          </h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  // 註冊詳細資料按鈕
  $(".detail").on("click",function(){
    let title = $(this).parents("tr").find("td").eq(0).text();
    $("#modal .modal-title").text(title);
    console.log(title);

    let name = $(this).parents("tr").find("td").eq(1).text();
    $("#modal .modal-body span").eq(0).text(name);
    console.log(name);

    let movie = $(this).data('movie');
    $("#modal .modal-body span").eq(1).text(movie);
    console.log(movie);

    let date = $(this).data('date');
    $("#modal .modal-body span").eq(2).text(date);
    console.log(date);

    $("#modal").modal("show");
    
  })
</script>