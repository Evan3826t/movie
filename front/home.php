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
              <h1 class="text-center text-white"><button class="btn btn-dark m-3" id="hot">現正熱映</button><button class="btn btn-dark m-3" id="await">即將上映</button></h1>
              <hr class="bg-white">
            </div>
        </div>
        <div class="row" id="movieList"></div>
        
    </div>
      <script>
        $("#movie").on("change",function(){
        // getDate($("#movie").val());
        getDate(getForm().id);
        })

        $("#send").on("click",function(){
            lof("?do=order&id="+getForm().id+"&date="+getForm().date)
        })

        // 拿取上映中的電影清單
        $("#hot").on("click",function(){
            $.get("./api/hot.php",{},function(res){
                $("#movieList").html(res);
            })
        })

        // 拿取未上映的電影清單
        $("#await").on("click",function(){
            $.get("./api/await.php",{},function(res){
                $("#movieList").html(res);
            })
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
            })
        }        

        // 抓取查詢的電影日期
        function getForm(){
            return{"id":$("#movie").val(),"date":$("#date").val()}
        }
    </script>