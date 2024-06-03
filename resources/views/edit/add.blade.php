

@include('layouts.header', [ 'title'=>'タレントあ図鑑' , 'robots' =>'noindex,nofollow','description'=>''])



<body>




<div class ="container">



<div class ="row justify-content-left">

    <div class="col-md-4 mb-2">
    <h3>新規追加</h3>


    <form action="/artist_add" method="post" enctype="multipart/form-data">
			                            {{ csrf_field() }}

										  <div class="form-group">
										    <label for="name">氏名</label>
										    <input type="text" class="form-control" name="name" placeholder="お名前" maxlength='5000' value="" required>
										  </div>

										  <div class="form-group">
										    <label for="kana">ふりがな※ひらがな/氏名の間に半角スペース</label>
										    <input type="text" class="form-control" name="kana" placeholder="ふりがな" maxlength='5000' value="" >
										  </div>

                                          <br>

										  <div class="form-group">
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
                                          <br>

										  <div class="form-group">
										    <label for="genre">ジャンル</label>
										    <select id="genre" class="form-control" name="genre">
										      <option value="女優">女優</option>
										      <option value="俳優">俳優</option>
										      <option value="声優">声優</option>
										      <option value="アイドル">アイドル</option>
										      <option value="芸人">芸人</option>
										      <option value="その他">その他</option>
										    </select>
										  </div>


										  <div class="form-group">
										    <label for="sex">性別</label>
										    <select id="sex" class="form-control" name="sex">
										      <option value="男">男</option>
										      <option value="女" >女</option>
										      <option value="その他">その他</option>
                                            </select>
										  </div>

                                          <div class="form-group">
										    <label for="name">誕生日</label>
                                            <input type="date" id="birth" name="birth" value="1995-01-01"/>
										  </div>


                                          <div class="form-group">
										    <label for="agency">所属</label>
										    <input type="text" class="form-control" name="agency" placeholder="事務所名・ない場合はフリー" maxlength='5000' value="" >
										  </div>

										  <div class="form-group">
										    <label for="hobby">趣味</label>
										    <input type="text" class="form-control" name="hobby" placeholder="趣味" maxlength='5000' value="" >
										  </div>

                                          <div class="form-group">
										    <label for="instagram">INSTAGRAM</label>
										    <input type="text" class="form-control" name="instagram" placeholder="URL" maxlength='5000' value="" >
										  </div>

                                          <div class="form-group">
										    <label for="twitter">Twitter</label>
										    <input type="text" class="form-control" name="twitter" placeholder="URL" maxlength='5000' value="" >
										  </div>

                                          <div class="form-group">
										    <label for="youtube">youtube</label>
										    <input type="text" class="form-control" name="youtube" placeholder="URL" maxlength='5000' value="" >
										  </div>

										  <div class="form-group">
										    <label for="message">プロフィール</label>
										    <textarea id="text" name="profile" rows="8" cols="80" class="form-control" required maxlength='5000'></textarea >
										  </div>


										  <button type="submit" class="btn btn-primary">登録する</button>
									</form>


									</table>








    </div>


</div>

</div>















</body>

