<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
img{
    width:20%;
}
</style>
<body>
<?php
$text=file_get_contents('http://www.ambassador.com.tw/home/MovieList?Type=1');
//取得所有img標籤，並儲存至二維陣列match
preg_match_all("/<a href='.*?'>.*?<\/a>/", $text, $match);
//印出match
// print_r($match);
foreach ($match[0] as $v) {
    $ary2= explode("/<a href='.*?'>.*?<\/a>/", $v);
    pre($ary2);
}


function pre($d){
    echo "<pre>"; print_r($d) ;"</pre>";
}




?>
    <form action="">
        <input type="text" name="" id="">
    </form>
</body>
<script>

</script>
</html>