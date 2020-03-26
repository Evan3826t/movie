<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=s1080311";
$pdo = new PDO($dsn, "root", "");

session_start();

$level=[
    1=>["03C01.png","普遍級"],
    2=>["03C02.png","保護級"],
    3=>["03C03.png","輔導級"],
    4=>["03C04.png","限制級"],
];
$sess=[
    1=>"14:00-16:00",
    2=>"16:00-18:00",
    3=>"18:00-20:00",
    4=>"20:00-22:00",
    5=>"22:00-24:00"
];

// 查詢及取得特定條件的資料
function find($table,...$arg){
    global $pdo;

    $sql = "select * from $table where ";
    if( is_array($arg[0])){
        // ["acc"=>"mack","pw"=>"1234"]
        foreach($arg[0] as $key => $value){
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . implode(" && ", $tmp);
    }else{
        // 不是陣列的話預設是 id
        $sql = $sql . "id='" . $arg[0] . "'";
    }

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

// 查詢及取得特定條件的全部資料
function all( $table, ...$arg){
    global $pdo;

    $sql = "select * from $table";
    
    if( !empty( $arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " where " . implode(" && ",$tmp);
    }

    if(!empty( $arg[1])){
        $sql = $sql . $arg[1];
    }

    // echo $sql;
    return $pdo->query($sql)->fetchAll();
}

// 撈出特定條件的全部資料筆數
function nums($table, ...$arg){
    global $pdo;

    $sql = "select count(*) from $table";
    
    if( !empty( $arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }
        $sql = $sql . " where " . implode(" && ",$tmp);
    }

    if(!empty( $arg[1])){
        $sql = $sql . $arg[1];
    }

    // echo $sql;
    return $pdo->query($sql)->fetchColumn();
}



// 簡化 $pdo->query($sql)->fetchAll(); 
function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll();
}

// 刪除特定 id 或符合條件的資料
function del($table, ...$arg){
    global $pdo;
    $sql = "DELETE FROM $table WHERE ";
    if(is_array($arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[] = sprintf("`%s`='%s'", $key, $value);
        }

        $sql = $sql . implode(" && ", $tmp); 
    }else{
        $sql = $sql . "`id`=$arg[0]";
    }
    // echo $sql;
    return $pdo->exec($sql);
}

// 導頁簡化
function to( $path){
    header("location:".$path);
}


// 存新資料或更新資料
function save($table, $data){
    global $pdo;
    
    if(!empty($data['id'])){
        // update
        foreach($data as $key => $value){
            if( $key != "id"){
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
        }
        $sql = " UPDATE $table SET " . implode(",", $tmp) . "  WHERE  `id`=" . $data['id'];
    }else{
        // insert
        $key="`" . implode("`,`",array_keys($data)) . "`";
        $value="'" . implode("','",$data) . "'";
        $sql = " INSERT INTO $table ($key) VALUES ($value)";
    }
    // echo $sql;
    return $pdo->exec($sql);
}

// 印出資料
function pre($data){
    echo "<pre>"; print_r($data) ;"</pre>";
}
?>