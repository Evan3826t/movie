<?php
$div=9;
$now=(empty($_GET['p']))?1:$_GET['p'];
$start=($now-1)*$div;
$total=nums("m_user");
$page=ceil($total/$div);
$movies=all("movie",[]," limit $start,$div");
?>
<table class="table table-striped table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">電影名稱</th>
      <th scope="col">導演</th>
      <th scope="col">刪除</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($movies as $k => $m) {
        ?>
        <tr>
            <th scope="row"><?=$k+1?></th>
            <td><?=$m['name']?></td>
            <td><?=$m['dir']?></td>
            <td>
              <button class="btn btn-danger mr-1 detail" data-date="<?=$m['ondate']?>" data-main="<?=$m['main']?>" data-img="<?=$m['poster']?>">詳細資料</button>
              <button class="btn btn-danger" onclick="del('movie',<?=$m['id']?>)">刪除</button>
            </td>
        </tr>
        <?php
    }
    ?>
    
  </tbody>
</table>
<div class="text-center">
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
      <div class="modal-body">
          <img src=""  alt="" class="w-80">
          <h6>
            導演：<span></span>
          </h6>
          <h6>
            上映日期：<span></span>
          </h6>
          <h6>
            主要演員：<span></span>
          </h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(".detail").on("click",function(){
    let title = $(this).parents("tr").find("td").eq(0).text();
    $("#modal .modal-title").text(title);
    console.log(title);

    let dir = $(this).parents("tr").find("td").eq(1).text();
    $("#modal .modal-body span").eq(0).text(dir);
    console.log(dir);

    let date = $(this).data('date');
    $("#modal .modal-body span").eq(1).text(date);
    console.log(date);

    let main = $(this).data('main');
    $("#modal .modal-body span").eq(2).text(main);
    console.log(main);

    // 把圖片路徑藏在 button 裡面
    let img = "./images/"+$(this).data("img")+".jpg";
    console.log(img);

    $("#modal .modal-body img").attr("src",img);
    $("#modal").modal("show");
    
  })
</script>