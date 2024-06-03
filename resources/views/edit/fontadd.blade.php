

@include('layouts.header', [ 'title'=>'タレントあ図鑑' , 'robots' =>'noindex,nofollow,','description'=>''])



<body>




<div class ="container">



<div class ="row justify-content-left">

    <div class="col-md-4 mb-2">
    <h3>新規追加</h3>


    <form action="/font_add" method="post" enctype="multipart/form-data">
			                            {{ csrf_field() }}

                                        <input type="hidden" name="artist_id" value="{{ $profile_id}}" />


										  <div class="form-group">
										    <label for="name">フォント名</label>
										    <input type="text" class="form-control" name="font_name" placeholder="フォント名称" maxlength='128' value="" required>
										  </div>

										  <div class="form-group">
										    <label for="name">作者</label>
										    <input type="text" class="form-control" name="creater_name" placeholder="作者名" maxlength='128' value="" required>
										  </div>

										  <div class="form-group">
										    <label for="name">フォント英語表記</label>
										    <input type="text" class="form-control" name="font_eng_name" placeholder="フォント英語表記" maxlength='5000' value="" >
										  </div>

										  <div class="form-group">
										    <label for="name">フォント補足</label>
										    <input type="text" class="form-control" name="font_count" placeholder="ひらがな・カタカナのみ" maxlength='5000' value="" >
										  </div>

										  <div class="form-group">
										    <label for="name">フォント表現文章</label>
										    <input type="text" class="form-control" name="sample_text" placeholder="あのイートインコーナーのすきま風" maxlength='5000' value="" >
										  </div>

                                          <br>

										  <div class="form-group">
										    <label for="name">フォントデータ</label>
										  	<input type="file" id="file" name="fontdata" class="form-control" accept=".ttf">
										  </div>
                                            <br>




										  <button type="submit" class="btn btn-primary">登録する</button>
									</form>


									</table>








    </div>


</div>

</div>















</body>

