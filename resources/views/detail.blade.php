<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    <style>
      @keyframes rotate-bg{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}

      /* modify */
      .row {
        margin: 0;
      }

      a {
        text-decoration: none;
      }


      /*  */
      .bg-full {
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/main_bg_v15.jpg");
        background-size: cover;
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
      }

      /* poke header */
      .poke-header {
        z-index: 10;
      }


      /*  */
      .nav-poke{
        position: relative;
        z-index: 10;
      }
      .nav-poke .nav-previous {
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_pc_left.png");
        background-repeat: no-repeat;
      }

      .nav-poke .nav-next {
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_pc_right.png");
        background-repeat: no-repeat;
        background-position: right;
      }
      .nav-previous, .nav-next {
        width: 31%;
      }
      .nav-previous p, .nav-next p {
        font-size: larger;
      }
      .arrow-previous img, .arrow-next img {
        width: 60%;
      }

      /* main */
      /* poke img */
      .col-5.poke-main-center {
        width: 42.85%;
        padding: 0;
      }
      .poke-img {
        position: relative;
        top: -8%;
        right: 0%;
        height: 500px;
      }

      .poke-img .img-bg, .poke-img .img-blur, .poke-img .img-poke{
        position: absolute;
      }

      .poke-img .img-bg {
        animation: rotate-bg 3s linear infinite;
        /* left: 50%;
        transform: translate(-50%, -15%); */
        z-index: 1;
        width: 100%;
      }
      .poke-img .img-blur {
        width: 66.7%;
        z-index: 2;
        left: 0%;
        right: 0;
        top: 19.5%;
        margin: 0 auto;
      }
      .poke-img .img-poke {
        width: 66.7%;
        z-index: 2;
        left: 0%;
        right: 0;
        top: 19.5%;
        margin: 0 auto;
      }
      /* poke infor left */ 
      .he, .defect {
        justify-content: space-around;
      }

      .he a {
        display: block;
        color: #fff;
        text-align: center;
        border-radius: 12px;
        height: 30px;
        line-height: 30px;
        width: 220px;
        margin: 5px 0;
        position: relative;
        
      }

      .he span {
        position: absolute;
        left: 5%;
        top: 50%;
        transform: translateY(-50%);
        background-color: #0a141e;
        display: inline-block;
        width: 15px;
        height: 15px;
        border: 1px solid #fff;
        border-radius: 50%;
        margin-right: 20%;
      }

      .defect .even {
        transform: translateX(10%);
      }
      
      .defect a {
        display: inline-block;
        background-color: #fff;
        border-radius: 10px;
        height: 30px;
        width: 150px;
        line-height: 30px;
        margin: 10px;
      }

      .poke-main-right {
        position: relative;
        left: -2%;
        z-index: 10;
        padding-top: 140px;
        /* padding-right: 100px; */
      }
      .poke-main-right .row {
        margin-bottom: 10px;
      }

      
      .poke-infor .version img{
        cursor: pointer;
      }



      .capacity {
      }
      .capacity li {
        margin:0 auto;
        margin-top: 0.25em;
        list-style-type: none;
        display: block;
        width: 7em;
        height: 0.70em;
        border: 1px solid #fff;

      }


      .style {
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/style1_bg.png");
        background-repeat: no-repeat;
      }

      .box-style {
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/style_pokemon_bg.png");
        background-size: cover;
        background-repeat: no-repeat;
        /* width: 15.5%; */
      }
      .box-style img {
        width: 100%;
      }
      .box-style a{
        display: block;
        /* color: #fff; */
      }
      .box-style div a{
        width: 43%;
        background-color: #fff;
        border-radius: 15px;
        margin: 0 auto;
      }




      .evaluation .main {
        border: 2px solid rgb(28, 108, 182);
        border-right: none;
        border-radius: 9999px 0 0 9999px;
        background-color: #000;
        transform: translatey(-10%);
      }
      .evaluation .img-poke {
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/evolutions_pokemon_bg.png");
        background-size: contain;
        background-repeat: no-repeat;
      }
      .evaluation .img-poke img {
        width: 100%;
      }

      .evaluation .type a {
        display: block;
        background-color: #fff;
        border-radius: 15px;
        width: 70%;
        margin: 0 auto;
      }
      .evaluation .next {
        width:100%;
        transform: rotate(-90deg);
      }

      .nav-back-pokedex {
        width: 43.2%;
        margin: 0 auto;
      }
      .bg-back-pokedex {
        
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/backbtn_bg.png");
        background-size: contain;
        background-repeat: no-repeat;
      }
      .back-pokedex a {
        display: block;
      }
      .back-pokedex a:hover .bg-back-pokedex{
        background-image: url("https://vn.portal-pokemon.com/play/resources/pokedex/img/backbtn_bg_on.png")
      }
    </style>
  </head>
  <body>
      <div class="container-fluid bg-dark">
        <div class="bg-full">
          <div class="container poke-header py-4 text-center fs-3">
            <h2 class="py-3 fs-4">Từ điển Pokemon</h2>
          </div>
          <div class="row nav-poke text-light">
            <div class="col nav-previous">
              <div class="row">
                <div class="col-4 arrow-previous pt-3">
                  <a class="" href="#">
                    <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_left_btn.png" alt="" onmouseover="document.querySelector('.arrow-previous img').src='https:\/\/vn.portal-pokemon.com/play/resources/pokedex/img/arrow_left_btn_on.png'" onmouseout="document.querySelector('.arrow-previous img').src='https:\/\/vn.portal-pokemon.com/play/resources/pokedex/img/arrow_left_btn.png'">
                  </a>
                </div>
                <div class="col-8 poke-previous">
                  <p class="pt-3">
                    <span class="code pe-2">001</span>
                    <span class="name">Fushigidane</span>
                  </p>
                </div>
              </div>
            </div>


            <div class="col poke-name text-center">
              <h2>002</h2>
              <h1>Fushigisou</h1>
            </div>


            <div class="col nav-next text-end">
              <div class="row">
                <div class="col-8 poke-next">
                  <p class="pt-3">
                    <span class="code">003</span>
                    <span class="name ps-2">Fushigibana</span>
                  </p>
                </div>
                <div class="col-4 arrow-next pt-3">
                  <a href="">
                    <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_right_btn.png" alt="" onmouseover="document.querySelector('.arrow-next img').src='https:\/\/vn.portal-pokemon.com/play/resources/pokedex/img/arrow_right_btn_on.png'" onmouseout="document.querySelector('.arrow-next img').src='https:\/\/vn.portal-pokemon.com/play/resources/pokedex/img/arrow_right_btn.png'">
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row poke-main">
            <div class="col poke-main-left">
              <div class="row he text-center ps-5 ms-4 py-5">
                  <h2 class="text-light">Hệ</h2>
                  <a class="he-1 bg-success" href="#">
                    <span></span>
                    hệ cỏ
                  </a>
                  <a class="he-2 bg-primary ms-5" href="#">
                    <span></span>
                    hệ Độc
                  </a>
              </div>
              <div class="row defect text-center">
                <h2 class="text-light">Nhược điểm</h2>
                  <div class="row odd">
                    <a class="col" href="#">
                      1
                    </a>
                    <a class="col" href="#">2</a>
                  </div>
                  <div class="row even">
                    <a class="col" href="#">3</a>
                    <a class="col" href="#">4</a>
                  </div>
              </div>
            </div>
            <div class="col-5 poke-main-center">
              <div class="poke-img">
                <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pokemon_bg.png" alt="" class="img-bg">
                <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pokemon_circle_bg.png" alt="" class="img-blur">
                <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pm/3245e4f8c04aa0619cb31884dbf123c6918b3700.png" alt="" class="img-poke">
              </div>
            </div>
            <div class="col poke-main-right text-light">
              <div class="row">
                <div class="col-4">
                  <h5>Chiều cao</h5>
                  <p>1.0 m</p>
                </div>
                <div class="col-8">
                  <h5>Chủng loại</h5>
                  <p>Pokemon ádasdasdasdasasdads</p>
                </div>

              </div>
              <div class="row">
                <div class="col-4">
                  <h5>Chiều cao</h5>
                  <p>1.0 m</p>
                </div>
                <div class="col-8">
                  <h5>Chiều cao</h5>
                  <p>
                    <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_male.png" alt="" width="25">
                    <span>/</span>
                    <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_female.png" alt="" width="25">
                  </p>
                </div>
              </div>

              <div class="row">
                {{-- <div class="col"> --}}
                  <h5>Chiều cao</h5>
                  <p>
                    <span>1.0 m</span>
                    <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_question.png" alt="" width="25">
                  </p>
                {{-- </div> --}}
                {{-- <div class="col"></div> --}}

              </div>
              
            </div>
          </div>
          <div class="row poke-infor pt-2">
            <div class="col-4">
              <div class="px-5 py-2 text-light version">
                <h3 class="">
                  Phiên bản 
                  <span>
                    <img id="img-version-1" src="https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_ball_on.png" alt="" width="29"  onclick="changeVersion(this)">
                  </span>
                  <span>
                    <img id="img-version-2" src="https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_ball.png" alt="" width="29"  onclick="changeVersion(this)">
                  </span>
                </h3>
                <p id='version-1'>
                  Tứ chi của loài này phát triển cứng cáp nhằm nâng đỡ cái nụ trên lưng. Nếu chúng phơi mình hàng giờ liền dưới nắng, nghĩa là nụ sắp nở thành hoa lớn.
                </p>
                <p id='version-2' class='d-none'>
                  Nếu có đủ lượng dinh dưỡng và ánh nắng cần thiết, bông hoa trên lưng chúng sẽ tươi xinh rực rỡ. Hương thơm từ bông hoa này xoa dịu cảm xúc con người.
                </p>
              </div>
            </div>
            <div class="col-1"></div>
            <div class="col-7 text-light ps-5">
              <h3 class="text-center ">Nang luc</h3>
              <div class="row capacity pt-4">
                <div class="col-2">
                  <ul class="p-0 mb-0">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  <p class="text-center">HP</p>
                </div>
                <div class="col-2">
                  <ul class="p-0 mb-0">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  <p class="text-center">HP</p>
                </div>
                <div class="col-2">
                  <ul class="p-0 mb-0">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  <p class="text-center">HP</p>
                </div>
                <div class="col-2">
                  <ul class="p-0 mb-0">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  <p class="text-center">HP</p>
                </div>
                <div class="col-2">
                  <ul class="p-0 mb-0">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  <p class="text-center">HP</p>
                </div>
                <div class="col-2">
                  <ul class="p-0 mb-0">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  <p class="text-center">HP</p>
                </div>
              </div>
            </div>
          </div>
          <div class="style mt-3 pb-5">
            <div class="title ps-5 text-light">
              <h2 class="">Dạng</h2>
            </div>
            <div class="boxes-style">
              <div class="row text-center ps-5 pt-3 text-light">
                <div class="col-2 box-style me-3 pb-4 px-0">
                  <a href="">
                    <img class="mb-2" src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pm/3245e4f8c04aa0619cb31884dbf123c6918b3700.png" alt="">
                    <h5 class="mb-1">000</h5>
                    <h4>Name</h4>
                  </a>
                  <div class="row mt-4 pt-4 mb-1">
                    <a href="#" class="col-6">hê độc</a>
                    <a href="#" class="col-6">hệ cỏ</a>
                  </div>
                </div>
                <div class="col-2 box-style me-3 pb-4 px-0">
                  <a href="">
                    <img class="mb-2" src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pm/3245e4f8c04aa0619cb31884dbf123c6918b3700.png" alt="">
                    <h5 class="mb-1">000</h5>
                    <h4>Name</h4>
                  </a>
                  <div class="row mt-4 pt-4 mb-1">
                    <a href="#" class="col-6">hê độc</a>
                    <a href="#" class="col-6">hệ cỏ</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="evaluation text-center text-light">
            <div class="row ">
              <div class="col-4"></div>
              <div class="col-8 main py-5">
                <div class="row align-items-center">
                  <div class="col-3">
                    <div class="">
                      <h2>Tiến hóa</h2>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="row">
                      <div class="col-4">
                        <div class="row align-items-center">
                          <div class="col-10">
                            <a href="" class="evl">
                              <div class="img-poke">
                                <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pm/cf47f9fac4ed3037ff2a8ea83204e32aff8fb5f3.png" alt="">
                              </div>
                              <div class="main-info mt-1">
                                <h5 class="code">000</h5>
                                <h5 class="name">Name</h5>
        
                              </div>
                            </a>
                            <div class="type mt-1">
                              <a href="#" class="mt-1">Hệ cỏ</a>
                              <a href="" class="mt-1">Hệ đá</a>
                            </div>
                          </div>
                          <div class="col-2 p-0">
                            <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_down.png" alt="" class="next">
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="row align-items-center">
                          <div class="col-10">
                            <a href="" class="evl">
                              <div class="img-poke">
                                <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pm/cf47f9fac4ed3037ff2a8ea83204e32aff8fb5f3.png" alt="">
                              </div>
                              <div class="main-info mt-1">
                                <h5 class="code">000</h5>
                                <h5 class="name">Name</h5>
        
                              </div>
                            </a>
                            <div class="type mt-1">
                              <a href="#" class="mt-1">Hệ cỏ</a>
                              <a href="" class="mt-1">Hệ đá</a>
                            </div>
                          </div>
                          <div class="col-2 p-0">
                            <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_down.png" alt="" class="next">
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="row align-items-center">
                          <div class="col-10">
                            <a href="" class="evl">
                              <div class="img-poke">
                                <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/pm/cf47f9fac4ed3037ff2a8ea83204e32aff8fb5f3.png" alt="">
                              </div>
                              <div class="main-info mt-1">
                                <h5 class="code">000</h5>
                                <h5 class="name">Name</h5>
        
                              </div>
                            </a>
                            <div class="type mt-1">
                              <a href="#" class="mt-1">Hệ cỏ</a>
                              <a href="" class="mt-1">Hệ đá</a>
                            </div>
                          </div>
                          {{-- <div class="col-2 p-0">
                            <img src="https://vn.portal-pokemon.com/play/resources/pokedex/img/arrow_down.png" alt="" class="next">
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="back-pokedex">
            <div class="nav-back-pokedex">
              <a href="" class="text-center">
                <div class="bg-back-pokedex py-3"><h5 class="my-1">Quay trở lại Pokedex</h5></div>
              </a>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Optional JavaScript -->
    <script>
      function changeVersion(element) {
        if (element.id == 'img-version-1') {
          document.querySelector('#version-1').setAttribute('class', '');
          element.src = "https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_ball_on.png";
          document.querySelector('#img-version-2').src = "https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_ball.png";
          document.querySelector('#version-2').setAttribute('class', 'd-none');

        } else {
          document.querySelector('#version-2').setAttribute('class', '');
          element.src = "https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_ball_on.png";
          document.querySelector('#img-version-1').src = "https://vn.portal-pokemon.com/play/resources/pokedex/img/icon_ball.png";
          document.querySelector('#version-1').setAttribute('class', 'd-none');
        }
      }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>