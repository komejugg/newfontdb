

@include('layouts.header', [ 'title'=>'タレントあ図鑑' , 'robots' =>'noindex,nofollow,','description'=>''])



<body>

<div class="container">

        <div class="col-md-4 mb-2">
            <br>
            <h3>管理画面</h3>
            <br>
            <a href=/edit-index/addpage><h5>▶新規ユーザー追加</h5></a>
            <h6>※フォント追加は各ユーザーページよりお願いします。</h6>

            <br>
        </div>

        <div class="row g-4">

        <!--CSSを直接記入してリンクの下線を削除-->
        <style type="text/css">
          a { color:#000000; text-decoration:none; }
        </style>
        <h5>[編集する]</h5>
        <!--Laravelで操作するポイント-->

        @foreach ($artists as $artist)
            <div class="col-md-3 col-6 text-center">
                <div class="d-inline-block mx-auto images">
                    <div class="image default-view">
                    <a href="/edit-index/detailedit/{{$artist -> id}}">
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













</body>

