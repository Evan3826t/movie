<?php 
$id=$_GET['id'];
$movie=find("movie",$id);
?>

      <div class="container" id="content">
        <div class="row">
            <div class="col-12 my-3 text-white">
              <a href="index.php" class="text-white">首頁</a>
              >
              <a href="?do=movie" class="text-white">電影</a>
              >
              <?=$movie['name']?>
            </div>
            <div class="col-12 col-md-4 my-3 text-white">
              <img src="./images/<?=$movie['poster']?>.jpg" alt="" >
            </div>
            <div class="col-12 col-md-8 my-3 text-white">
              <h3><?=$movie['name']?></h3>
              <hr style="width: 100%; color: black; height: 1px; background-color:#ccc;"/>
              <div><?=$level[$movie['level']][1]?><img src="./icon/<?=$level[$movie['level']][0]?>" alt="">　<?=$movie['len']?>分</div>
              <br>
              <div><?=$movie['intro']?></div>
              <br>
              <div>主要演員：<?=$movie['main']?></div>
              <div>影片類型：<?=$movie['type']?></div>
              <div>上映日期：<?=$movie['ondate']?></div>
            </div>
        </div>
        <div class="row" style="background:#7373B9">
            <?php
              if($_GET['type']==1){
                ?>
                <div class="col-12 col-md-4 my-4 text-white text-center">
                    選擇日期
                    <td><select name="date" id="date"></select></td>
                </div>
                <div class="col-12 col-md-6 my-4 text-white text-center">
                    <button type="button" class="btn btn-dark" id="send">查詢</button>
                </div>
                <?php
              }else{
                ?>
                <div class="col-12  my-4 text-white text-center">
                    尚未上映
                </div>
                <?php
              }
            ?>
        </div>
        <div class="col-12 my-3 text-white">
          <div class="load">
          </div>
        </div>
      </div>
      

    <script>
      $(window).on("load", function(){
        $("#content").show();

        let url = new URL(location.href);
        let id = url.searchParams.get('id');
        let date = $("#date").val();

        $("#send").on("click",function(){
            lof("?do=order&id="+id+"&date="+date);
        })

        getDate(id);

        // 抓電影上映日期
        function getDate(id){
            $.get("./api/getdate.php",{id},function(res){
                $("#date").html(res);
                let date = $("#date").val();
            })
        }    
      })
    </script>
