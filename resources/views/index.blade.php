
<!--Headerより読み込む-->
@include('layouts.header', [ 'title'=>'タレントあ図鑑' , 'robots' =>'','description'=>'あのタレントって「字」どんな字を書くんだろう？その疑問を解消する、タレントの「あ」を集めたサイトです！フリーの手書きフォントも配布中です！'])

<!--noindexにしたいページは、noindex,nofollowと記載。-->


<!-- -->


    <div class="py-4" style="background-color: rgba(247, 247, 247, 1);">
        <div class="container">
            <div class="text-center">
                <img src="/img/main-logo.webp" class="img-fluid" />
                <!-- <p class="fs-4">「あの人の字ってどんな字なの？」
                  <br class="d-block d-md-none">
                  タレントの「あ」を集めました！</p> -->
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="my-3"  aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#" class="text-dark text-decoration-none">女優</a></li>
              <li class="breadcrumb-item  d-flex align-items-center" aria-current="page"><a href="#" class="text-dark text-decoration-none">俳優</a></li>
              <li class="breadcrumb-item  d-flex align-items-center" aria-current="page"><a href="#" class="text-dark text-decoration-none">芸人</a></li>
              <li class="breadcrumb-item active d-flex align-items-center" aria-current="page"><a href="#" class="text-dark text-decoration-none">ミュージシャン</a></li>
              <li class="breadcrumb-item active d-flex align-items-center" aria-current="page"><a href="#" class="text-dark text-decoration-none">アイドル</a></li>
              <li class="breadcrumb-item active d-flex align-items-center" aria-current="page"><a href="#" class="text-dark text-decoration-none">その他</a></li>
              <span>　　※絞り込み機能準備中</span>

            </ol>
          </nav>

          <div class="filters d-flex align-items-center mb-4">
            <span>All</span>
            <div class="form-check form-switch ms-auto">
                <input class="form-check-input border-dark" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">文字で見る</label>
            </div>
        </div>

        <div class="row g-4">

        <!--CSSを直接記入してリンクの下線を削除-->
        <style type="text/css">
          a { color:#000000; text-decoration:none; }
        </style>

        <!--Laravelで操作するポイント-->

        @foreach ($artists as $artist)
            <div class="col-md-3 col-6 text-center">
                <div class="d-inline-block mx-auto images">
                    <div class="image default-view">
                    <a href="user_detail/{{$artist->id}}">
                        <img class="first" src="{{$artist -> profile_image}}" alt="not found">
                        <img src="{{$artist -> font_image}}" alt="" class="img-fluid" />
                        <!--↑　/storage/images/-->
                    </div>
                    <div class="text-center mt-3">{{$artist -> name}}
                    </a>
                    </div>
                </div>
            </div>
		@endforeach

        <!--Laravelで操作するポイント-->
 
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
    </div>
    <div class="text-center py-3 border-top mt-4">
        © SHUN TOMURA
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const switchInput = document.getElementById('flexSwitchCheckDefault');
          const images = document.querySelectorAll('.images .image');
  
          switchInput.addEventListener('change', function() {
              images.forEach(image => {
                  if (switchInput.checked) {
                      image.classList.remove('default-view');
                      image.classList.add('toggled-view');
                  } else {
                      image.classList.remove('toggled-view');
                      image.classList.add('default-view');
                  }
              });
          });
      });
  </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



