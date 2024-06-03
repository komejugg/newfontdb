

@include('layouts.header', [ 'title'=>'タレントあ図鑑' , 'robots' =>'noindex,nofollow','description'=>''])



<body>




<div class ="container">



<div class ="row justify-content-left">

    <div class="col-md-4 mb-2">
    <h3>編集画面</h3>


    <form action="/artist_edit" method="post" enctype="multipart/form-data">
                                        @method('PUT')
                                        {{ csrf_field() }}
                                        <input type="hidden" name="userId" value="{{ $profiles->id }}" />

                                        <div class="form-group">
										    <label for="name">氏名</label>
										    <input type="text" class="form-control" name="name" maxlength='5000' value="{{$profiles -> name}}" required>
										  </div>

										  <div class="form-group">
										    <label for="kana">ふりがな※ひらがな/氏名の間に半角スペース</label>
										    <input type="text" class="form-control" name="kana" maxlength='5000' value="{{$profiles -> kana}}" >
										  </div>

                                          <br>

										  <!-- <div class="form-group">
										    <label for="name">プロフィール画像※更新したい場合のみアップロードしてください。</label>
										  	<input type="file" id="file" name="profile_image" class="form-control" accept="image/jpg,image/jpeg, image/gif, image/png">
										  </div>
                                            <br>

										  <div class="form-group">
										    <label for="name">文字画像[あ]※更新したい場合のみアップロードしてください。</label>
										  	<input type="file" id="file" name="font_image" class="form-control" accept="image/jpg,image/jpeg, image/gif, image/png">
										  </div>
                                          <br>

										  <div class="form-group">
										    <label for="name">文字画像[あいさつ文]※更新したい場合のみアップロードしてください。</label>
										  	<input type="file" id="file" name="handwritten_image" class="form-control" accept="image/jpg,image/jpeg, image/gif, image/png">
										  </div>
                                          <br> -->

										  <!-- <div class="form-group">
										    <label for="genre">ジャンル</label>
										    <select id="genre" class="form-control" name="genre">
										      <option value="女優">女優</option>
										      <option value="俳優">俳優</option>
										      <option value="声優">声優</option>
										      <option value="アイドル">アイドル</option>
										      <option value="芸人">芸人</option>
										      <option value="その他">その他</option>
										    </select>
										  </div> -->


										  <!-- <div class="form-group">
										    <label for="sex">性別</label>
										    <select id="sex" class="form-control" name="sex">
										      <option value="男">男</option>
										      <option value="女" >女</option>
										      <option value="その他">その他</option>
                                            </select>
										  </div> -->

                                          <div class="form-group">
										    <label for="genre">ジャンル</label>
										    <input type="text" class="form-control" name="genre" maxlength='5000' value="{{$profiles -> genre}}" >
										  </div>

										  <div class="form-group">
										    <label for="sex">性別</label>
										    <input type="text" class="form-control" name="sex" maxlength='5000' value="{{$profiles -> sex}}" >
										  </div>

                                          <div class="form-group">
										    <label for="name">誕生日</label>
                                            <input type="date" id="birth" name="birth" value="{{$profiles -> birth}}"/>
										  </div>


                                          <div class="form-group">
										    <label for="agency">所属</label>
										    <input type="text" class="form-control" name="agency" maxlength='5000' value="{{$profiles -> agency}}" >
										  </div>

										  <div class="form-group">
										    <label for="hobby">趣味</label>
										    <input type="text" class="form-control" name="hobby" maxlength='5000' value="{{$profiles -> hobby}}" >
										  </div>

                                          <div class="form-group">
										    <label for="instagram">INSTAGRAM</label>
										    <input type="text" class="form-control" name="instagram" maxlength='5000' value="{{$profiles -> instagram}}" >
										  </div>

                                          <div class="form-group">
										    <label for="twitter">Twitter</label>
										    <input type="text" class="form-control" name="twitter" maxlength='5000' value="{{$profiles -> twitter}}" >
										  </div>

                                          <div class="form-group">
										    <label for="youtube">youtube</label>
										    <input type="text" class="form-control" name="youtube" maxlength='5000' value="{{$profiles -> youtube}}" >
										  </div>

										  <div class="form-group">
										    <label for="message">プロフィール</label>
										    <textarea id="text" name="profile" rows="8" cols="80" class="form-control" required maxlength='5000' >{{$profiles->profile}}</textarea >
										  </div>

										<br>
										  <button type="submit" class="btn btn-primary">更新する</button>
									</form>


									</table>


        <!--削除ボタン-->
        <form action="/artistdelete" method="post">  
        @method('DELETE')  
        {{ csrf_field() }}  
        <input type="hidden" name="userId" value="{{$profiles -> id}}"/>  
        <input type="submit" value="削除"/>  
        </form>


	<h5><a href ="../addpage/fontadd/{{ $profiles->id }}">▶フォントを追加する</a></h5>


    </div>


</div>

</div>















</body>

