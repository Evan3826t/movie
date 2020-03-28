<style>

.seat{
    height: 129px;
}
.chk{
    bottom: 5px;
    right: 5px;
}
.null{
    background: url("./icon/03D02.png") no-repeat center;
}
.pick{
    background: url("./icon/03D03.png") no-repeat center;
}
</style>
<?php
include_once ("../base.php");
if(empty($_SESSION['user'])){
    ?>
        <div class="col-12  my-4 text-white text-center">
            <button class="btn btn-dark order" onclick="lof('?do=login')">請先登入</button>
        </div>
    <?php
    exit();
}
$movie = find("movie",$_GET['id'])['name'];
$date = $_GET['date'];
$session = $_GET['session'];

// 撈出已被訂的座位
$orders = q("select * from ord where `date`='$date' && `movie`='$movie' && `session`='$session'");

$merge=[];
foreach ($orders as $o) {
    // 陣列合併
    $merge = array_merge($merge , unserialize( $o['seat']));
}
?>
<div class="room">
    <div class="row text-white ">
    <?php
    for($i = 0; $i < 24; $i++){
        if(in_array($i,$merge)){
            echo "<div class='seat pick col-12 col-md-2'>";
            echo "<div class='ct'>".(floor($i/6)+1)."排".(($i%6)+1)."號</div>";

        }else{
            echo "<div class='seat null col-12 col-md-2'>";
            echo "<div class='ct'>".(floor($i/6)+1)."排".(($i%6)+1)."號</div>";

            echo "<input type='checkbox' class='chk'  value='$i'>";
        }
        echo "</div>";

    }
    ?>
</div>
</div>
<div class="row">
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h3>您選擇的電影是: <br> <?=$movie?></h3>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h3>您選擇的時刻是: <br> <?=$date ." ".$session?></h3>
    </div>
    <div class="col-12 col-md-4 my-4 text-white text-center">
        <h3>您以勾選<span class="ticket">0</span>張票<br>最多可以購買四張票</h3>
    </div>
    <div class="col-12  my-4 text-white text-center">
        <button class="btn btn-dark order">訂購</button>
    </div>
</div>

<script>
let num = 0;
let seat = [];
// let seat = new Array();
$(".chk").on("click",function(){
    let chk = $(this).prop("checked");
    if(chk){
        if(num < 4){
            num++;
            seat.push($(this).val());
            // 下兩行可以不用做
            $(this).parent().removeClass("null");
            $(this).parent().addClass("pick");
        }else{
            alert("最多只能訂四張票");
            $(this).prop("checked",false);
        }
    }else{
        num--;
        seat.splice(seat.indexOf($(this).val(),1));
        // 下兩行可以不用做
        $(this).parent().addClass("null");
        $(this).parent().removeClass("pick");
    }
    console.log(seat);
    $(".ticket").text(num);
})

$(".pre").on("click",function(){
    $("form").show();
    $(".load").html("");
})
$(".order").on("click",function(){
    let result = {"seat":seat,
                  "movie":"<?=$movie;?>",
                  "date":"<?=$date;?>",
                  "session":"<?=$session;?>",
                  "qt":num,

                  }
                  console.log(result);
    $.get("./front/result.php",result,function(res){
        $(".load").html(res);
    })
})

</script>