<?php
$div=9;
$now=(empty($_GET['p']))?1:$_GET['p'];
$start=($now-1)*$div;
$total=nums("poster");
$page=ceil($total/$div);
$poster=all("poster",[]," order by rank limit $start,$div");
?>
<button class="btn btn-dark mb-2" id="add">新增輪播</button>
<table class="table table-striped table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">排序</th>
      <th scope="col">操作</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($poster as $k => $p) {
      $pre=($k!=0)?$poster[$k-1]['id']:$p['id'];
      $next=($k<(count($poster)-1))?$poster[$k+1]['id']:$p['id'];
      ?>
      <tr>
          <th scope="row"><?=$k+1?></th>
          <td><?=$p['title']?></td>
          <td>
            <button class="btn btn-danger mr-1" onclick="sw('poster',<?=$p['id']?>,<?=$pre?>)">往上</button>
            <button class="btn btn-danger mr-1" onclick="sw('poster',<?=$p['id']?>,<?=$next?>)">往下</button>

          </td>
          <td>
            <button class="btn btn-danger mr-1 detail"  data-img="<?=$p['src']?>">詳細資料</button>
            <button class="btn btn-danger" onclick="del('poster',<?=$p['id']?>)">刪除</button>
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
          <img src=""  alt="" class="w-80" style="max-width:400px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<form action="./api/addposter.php" method="post" enctype="multipart/form-data">
  <div id="modalAdd" class="modal fade text-dark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title " id="exampleModalLabel">新增輪播</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              title： <input type="text" name="title"><br>
              poster： <input type="file" name="poster">
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-secondary" value="新增">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script>
  // 註冊詳細資料按鈕
  $(".detail").on("click",function(){
    let title = $(this).parents("tr").find("td").eq(0).text();
    $("#modal .modal-title").text(title);
    console.log(title);

    // 把圖片路徑藏在 button 裡面
    let img = "./images/"+$(this).data("img");
    console.log(img);

    $("#modal .modal-body img").attr("src",img);
    $("#modal").modal("show");
    
  })
  $("#add").on("click",function(){
    $("#modalAdd").modal("show");

  })
</script>