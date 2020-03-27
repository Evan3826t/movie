    <div class="container  d-flex justify-content-center align-items-center " id="content">
        <div class="row" style="background:#7373B9" >
        <div class="p-3 border text-white text-center" style="width:300px">
            <div class="m-2">帳號：<input  type="text" name="acc" id="acc"></div>
            <div class="m-2">密碼：<input  type="password" name="pw" id="pw"></div>
            <div class="row">
                <div class="col-12 col-md-6"><input class="btn btn-dark" type="submit" value="登入" id="login"><input id="reset" class="btn btn-dark" type="reset" value="重置"></div>
                <div class="col-12 col-md-6"><a href="?do=reg"><button class="btn btn-dark">馬上註冊</button></a></div>
            </div>
        </div>
        </div>
    </div>

    <script>
        $("#content").show();

        // 重置帳密
        $("#reset").on("click", function(){
        $("#acc").val("");
        $("#pw").val("");
        })

        $("#login").on("click",function(){
            let acc = $("#acc").val();
            let pw = $("#pw").val();
            console.log(acc,pw);

            // 確認帳號有無存在
            $.post("./api/chkacc.php",{acc},function(status){
                console.log(status);
                if(status === '1'){
                    // 確認密碼
                    $.post("./api/chkpw.php",{acc, pw},function(chkpw){
                        if(chkpw === "1"){
                            alert("登入成功");
                            if(acc == "admin"){
                                lof("admin.php");
                            }else{
                                lof("index.php");
                            }
                        }else{
                            alert("密碼錯誤");
                            $("#acc,#pw").val("");
                        }
                    })
                
                }else{
                    alert("帳號錯誤");
                    $("#acc,#pw").val("");
                }
            })
        })
    </script>