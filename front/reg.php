<div class="container  d-flex justify-content-center align-items-center " id="content">
        <div class="row" style="background:#7373B9" >
        <div class="p-3 border text-white text-center" style="width:300px">
            <div class="m-2">帳號：　　<input  type="text" name="acc" id="acc"></div>
            <div class="m-2">密碼：　　<input  type="password" name="pw" id="pw"></div>
            <div class="m-2">確認密碼：<input  type="password" name="pw2" id="pw2"></div>
            <div class="m-2">姓名：　　<input  type="text" name="name" id="name"></div>
            <div class="m-2">信箱：　　<input  type="text" name="email" id="email"></div>
            <div class="m-2">電話：　　<input  type="text" name="tel" id="tel"></div>
            <div class="row">
                <div class="col-12 "><input class="btn btn-dark" type="submit" value="註冊" id="login"><input id="reset" class="btn btn-dark" type="reset" value="重置"></div>
            </div>
        </div>
        </div>
    </div>

    <script>
        $("#content").show();

        // 重置欄位
        $("#reset").on("click", function(){
            reset();
        })

        $("#login").on("click",function(){
            let acc = $("#acc").val();
            let pw = $("#pw").val();
            let pw2 = $("#pw2").val();
            let name = $("#name").val();
            let email = $("#email").val();
            let tel = $("#tel").val();
            if(acc == "" || pw == "" || pw2 == "" || name == "" || email == "" || tel == ""){
                alert("請勿空白");
            }else if(pw != pw2){
                alert("密碼錯誤")
            }else{
                // 確認帳號有無存在
                $.post("./api/chkacc.php",{acc},function(status){
                    console.log(status);
                    if(status === '1'){
                        alert("帳號不可使用");
                        reset();
                    }else{
                        // 註冊帳號
                        $.post("./api/reg.php",{acc, pw, name, email, tel},function(){
                            alert("註冊成功，歡迎加入！");
                            lof("?do=login");
                        })
                    }
                })
            }
        })

        // 清空欄位
        function reset(){
            $("#acc").val("");
            $("#pw").val("");
            $("#pw2").val("");
            $("#name").val("");
            $("#email").val("");
            $("#tel").val("");
        }
    </script>