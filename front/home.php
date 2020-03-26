<div class="container-fluid" id="loading">
        <div class="row h-100">
          <div class="col-12 align-self-center text-center">
            <img src="./images/loading.svg" alt="">
          </div>
        </div>
      </div>

    <div class="container" id="content">
        <div class="row zoomInDown wow">
            <div class="col-12 my-3">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="./images/ad.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./images/ad1.jpg" class="d-block w-100" alt="...">
                              </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
            </div>
            
        </div>
        <div class="row" style="background:#7373B9">
            <div class="col-12 col-md-2 my-4 text-white text-center">
                時刻查詢
            </div>
            <div class="col-12 col-md-4 my-4 text-white text-center">
                <div class="dropdown bg-black">
                    請選擇電影
                    <select name="movie" id="movie"></select>
                </div>
            </div>
            <div class="col-12 col-md-4 my-4 text-white text-center">
                    選擇日期
                    <td><select name="date" id="date"></select></td>
            </div>
            <div class="col-12 col-md-2 my-4 text-white text-center">
                <button type="button" class="btn btn-dark" id="send">查詢</button>
            </div>
        </div>










        <div class="row">
            <div class="col-12 my-3">
              <h1 class="text-center text-white">咖啡介紹</h1>
              <hr class="bg-white">
            </div>
        </div>
        <div class="row coffee">
            <div class="col-12 col-md-5 my-3 zoomInLeft wow">
              <img src="./images/banner-07.jpg" class="w-100 h-100 object-fit">
            </div>
            <div class="col-12 col-md-7 my-3 text-white align-self-center">
              <h1>咖啡的好與壞</h1>
              <p>有發現越來越多咖啡連鎖店一家家開，
                  顯見咖啡已涉入現代人生活中，
                  咖啡會如此流行.迷人，那有沒有想過咖啡裡是怎樣的物質呢？
                  對人體是好與壞呢?!
              </p>
            </div>
        </div>
        <div class="row coffee">
            <div class="col-12 col-md-5 my-3 zoomInRight wow">
                <img src="./images/banner-14.jpg" class="w-100 h-100 object-fit">
            </div>
            <div class="col-12 col-md-7 my-3 text-white align-self-center">
                <h1>咖啡的好處：</h1>
                <p>根據美國俄亥俄州立大學1994年的研究，咖啡因的確能提高清醒度，
                    能提高細胞內環磷腺?的含量，小劑量能興奮大腦皮層，
                    振奮精神，改善思維，消除疲勞，加快反應，提昇工作效率。
                    大劑量則可興奮延腦呼吸中樞和血管運動中樞，
                    增加呼吸頻率，造成過度刺激，
                    產生焦慮、興奮、頭痛、失眠、心神不寧。
                </p>
            </div>
        </div>
        <div class="row coffee">
            <div class="col-12 col-md-5 my-3 zoomInLeft wow">
                <img src="./images/banner-06.jpg" class="w-100 h-100 object-fit">
            </div>
            <div class="col-12 col-md-7 my-3 text-white align-self-center">
                <h1>喝咖啡壞處：</h1>
                <p>成長中的青少年 對咖啡因的興奮作用較敏感，
                    比較會有心悸..影響睡眠的情形。
                    
                    咖啡因對有高血壓及心血管疾病的人有強心作用，
                    但同時也會使心跳加快，血壓增高，
                    亦容易引起心肌缺氧，對病情的控制不利。
                </p>
            </div>
        </div>
    </div>
      <script>
        $("#movie").on("change",function(){
        // getDate($("#movie").val());
        getDate(getForm().id);
        })

        $("#send").on("click",function(){
            lof("?do=order&id="+getForm().id+"&date="+getForm().date)
        })
        
        getMovie();
        console.log($("#movie").val());

        // 抓上映中的電影
        function getMovie(){
            let url = new URL(location.href);
            let param = url.searchParams.get('id');
            
            let id = 0;
            if(!$.isEmptyObject(param)){
                id = param;
            }
            // 帶入 php 值，不建議使用
            // let id = <?=(!empty($_GET['id']))?$_GET['id']:0;?>;
            $.get("./api/getmovie.php",{id},function(movie){
                $("#movie").html(movie);
                // 直接按線上訂票進來會沒有id，所以要自己設 id
                if( id == 0){
                    id =$("#movie").val();
                }
                getDate(id);
                console.log(movie);
            })
        }
        
        // 抓電影上映日期
        function getDate(id){
            $.get("./api/getdate.php",{id},function(res){
                $("#date").html(res);
                let date = $("#date").val();
                getSession(id,date)
            })
        }        

        // 抓取查詢的電影日期
        function getForm(){
            return{"id":$("#movie").val(),"date":$("#date").val()}
        }
    </script>