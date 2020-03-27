<?php
$div=9;
$now=(empty($_GET['p']))?1:$_GET['p'];
$start=($now-1)*$div;
$total=nums("m_user");
$page=ceil($total/$div);
$members=all("m_user",[]," limit $start,$div");
?>
<table class="table table-striped table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">帳號</th>
      <th scope="col">姓名</th>
      <th scope="col">刪除</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($members as $k => $m) {
        if($m['acc'] == "admin"){
        ?>
        <tr>
            <th scope="row"><?=$k+1?></th>
            <td><?=$m['acc']?></td>
            <td>最高管理員</td>
            <td>不可刪除</td>
        </tr>
        <?php
        }else{
        ?>
        <tr>
            <th scope="row"><?=$k+1?></th>
            <td><?=$m['acc']?></td>
            <td><?=$m['name']?></td>
            <td><button class="btn btn-danger" onclick="del('m_user',<?=$m['id']?>)">刪除</button></td>
        </tr>
        <?php
        }
    }
    ?>
    
  </tbody>
</table>
<div class="text-center">
    <?php
    if($now-1 > 0){
      echo "<a class='text-white' href='?do=user&p=". ($now-1) ."'> < </a>";
    }
    for( $i = 1; $i <= $page; $i++){
      $font = ($i==$now)?"24px":"16px";
      echo "<a class='text-white' href='?do=user&p=$i' style='font-size:$font'>$i</a>";
    }
    if($now+1 <= $page){
      echo "<a class='text-white' href='?do=user&p=". ($now+1) ."'> ></a>";
    }
    ?>
</div>