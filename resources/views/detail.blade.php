
<!--Headerより読み込む-->
@include('layouts.header', ['title' => $profiles->name . ' | タレントあ図鑑', 'robots' => '','description' => $profiles->name . 'さんの書く文字の紹介ページです！'])
<!-- -->

    <div class="container">
          <div class="row g-4 justify-content-center">
            <div class="col-md-9">
            <br>
            <h1 class="fs-5 mt-4 mb-2">{{$profiles -> name}}</h1>
            <h2 class="fs-6 mt-2 mb-4">{{$profiles -> kana}}</h1>



              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{$profiles -> profile_image}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{$profiles -> handwritten_image}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{$profiles -> font_image}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!--  -->
              <h3 class="fs-5 mt-4">｜ Profile</h1>
              <table class="table mt-4 border-top">
                <tbody>
                  <tr>
                    <td scope="row" class="bg-light border-end">生年月日</td>
                    <td>{{$profiles -> birth}}</td>
                  </tr>
                  <tr>
                    <td scope="row" class="bg-light border-end">所属</td>
                    <td>{{$profiles -> agency}}</td>
                  </tr>
                  <tr>
                    <td scope="row" class="bg-light border-end">ジャンル</td>
                    <td colspan="2">{{$profiles -> genre}}</td>
                  </tr>
                  <tr>
                    <td scope="row" class="bg-light border-end">趣味・特技</td>
                    <td colspan="2">{{$profiles -> hobby}}</td>
                  </tr>
                  <tr>
                    <td scope="row" class="bg-light border-end">プロフィール</td>
                    <td colspan="2">{!! nl2br(e($profiles->profile)) !!}</td>
                  </tr>
                  <tr>
                    <td scope="row" class="bg-light border-end">SNS</td>
                    <td colspan="2">
                      <a href="" class="text-decoration-none me-3">
                        <img src="/img/image1-2.svg" alt="" />
                      </a>
                      <a href="" class="text-decoration-none me-3">
                        <img src="/img/logo-black 1.svg" alt="" />
                      </a>
                      <a href="">
                        <img src="/img/yt_icon_rgb1.svg" alt="" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row" class="bg-light border-end">フリーフォント</td>
                    <td colspan="2">なし</td>
                  </tr>
                </tbody>
              </table>

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