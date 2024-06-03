
<!--Headerより読み込む-->
@include('layouts.header', [ 'title'=>'手書きフリーフォントダウンロード' , 'robots' =>'','description'=>'手書きのフリーフォントをダウンロードを配布しているページです。'])
<!-- -->


        <!--CSSを直接記入してリンクの下線を削除-->
        <style type="text/css">
          a { color:#000000; text-decoration:none; }
        </style>


    <div class="container">
          <div class="row g-4 justify-content-center">
            <div class="col-md-9">
            
              <!--  -->
              <h1 class="fs-5 mt-4 mb-4">｜ フリーフォント配布ページ</h1>
              <div class="px-lg-4 px-3">
                <div class="mb-4">
                  当サイトへプロフィールを掲載している方の手書きフォントを無料配布しております。<br>
                  全てのフォントは以下のルールに基づきご利用ください。<br>
                  ■利用ルール<br>
                  ・商用利用可・商標登録不可<br>
                   &emsp;※利用報告不要・クレジット表記不要<br>
                  ・正常な動作の保証・サポートはいたしません。<br>
                  ・当サイトのフォントの利用により発生したいかなる損害につきましても、責任を負わないものとします。<br>
                  ■以下の利用は禁止します。<br>
                    ×当サイトのフォントそのものを再配布・販売すること。<br>
                    ×当フォントファイルをベースに加工したものを再配布したり販売すること<br>
                    <br>
                    -利用条件は予告なく変更することがあります。-
                    <br>
                    <br>

                </div>


                <!--ここを繰り返す-->

                @foreach ($fonts as $font)


                      <!--CSSにてフォントを変更する。-->
                        <style type="text/css">
                          @font-face {
                            font-family: "{{$font -> font_eng_name}}";
                            src: url("{{$font -> fontdata}}");
                          }
                          .{{$font -> font_eng_name}}{
                            font-family: "{{$font -> font_eng_name}}";
                          }
                        </style>

                  <div class="row">
                    <div class="col-4 bg-light py-3">
                    {{$font -> font_name}}　※{{$font -> font_count}}
                    </div>
                    <div class="col-8 bg-light py-3">
                      Creator：{{$font -> creater_name}}
                    </div>

                    
                  </div>
                  <div class="px-2">
                    <div class="d-flex py-4">
                      <div class="fs-5">

                          <p class="{{$font -> font_eng_name}}">
                          {{$font -> sample_text}}
                          </p>    

                      </div>
                      <div class="dropdown ms-auto">
                        <button class="btn bg-light rounded-pill  dropdown-toggle px-3" type="button"  aria-expanded="false">
                          <a href="{{$font -> fontdata}}" download>
                          Download
                          </a>
                        </button>

                        <!-- <ul class="dropdown-menu" >
                          <li><button class="dropdown-item" type="button">Action</button></li>
                          <li><button class="dropdown-item" type="button">Another action</button></li>
                          <li><button class="dropdown-item" type="button">Something else here</button></li>
                        </ul> -->
                      </div>
                    </div>

                  </div>

                @endforeach
                <!-- <div class="row">
                  <div class="col-4 bg-light py-3">
                    Font Name
                  </div>
                  <div class="col-8 bg-light py-3">
                    Creator：Name
                  </div>
                </div>
                <div class="px-2">
                  <div class="d-flex py-4">
                    <div class="fs-4">
                      Font Name＆ Font Sample
                    </div>
                    <div class="dropdown ms-auto">
                      <button class="btn bg-light rounded-pill  dropdown-toggle px-3" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                        DL
                      </button>
                      <ul class="dropdown-menu" >
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="row">
                  <div class="col-4 bg-light py-3">
                    Font Name
                  </div>
                  <div class="col-8 bg-light py-3">
                    Creator：Name
                  </div>
                </div>
                <div class="px-2">
                  <div class="d-flex py-4">
                    <div class="fs-4">
                      Font Name＆ Font Sample
                    </div>
                    <div class="dropdown ms-auto">
                      <button class="btn bg-light rounded-pill  dropdown-toggle px-3" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                        DL
                      </button>
                      <ul class="dropdown-menu" >
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-4 bg-light py-3">
                    Font Name
                  </div>
                  <div class="col-8 bg-light py-3">
                    Creator：Name
                  </div>
                </div>
                <div class="px-2">
                  <div class="d-flex py-4">
                    <div class="fs-4">
                      Font Name＆ Font Sample
                    </div>
                    <div class="dropdown ms-auto">
                      <button class="btn bg-light rounded-pill  dropdown-toggle px-3" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                        DL
                      </button>
                      <ul class="dropdown-menu" >
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- <div class="justify-content-center d-flex mt-5">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm align-items-center">
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link py-2" href="#">
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.72 9.93V0.529999L8.86 5.23L0.72 9.93Z" fill="black"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                  </nav>
              </div> -->
              <br>
            </div>
          </div>
         
    </div>
    <div class="text-center py-3 border-top mt-4">
        © SHUN TOMURA
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>