<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Font;

//ストレージライブラリ。
use Illuminate\Support\Facades\Storage;

class FontsController extends Controller
{
    //

    public function downloadpage(){
        $fonts = Font::paginate(40); 
   //↑トップページのページネーション機能。数字変更で変わる。
        return view ('download',['fonts'=>$fonts]);


    }


    //新規ページ表示用
    public function addpage($profile_id){
        return view ('edit.fontadd',['profile_id'=>$profile_id]);
    }



    //Formからデータをサーバへアップロードする系
    public function font_add(Request $request){
        // fontdata の処理
        if ($request->hasFile('fontdata')) {
            $fontdata = $request->file('fontdata');
            $fontfilename = $fontdata->getClientOriginalName();
            
            // サーバ時の処理
            $fontfilenamePath = 'fonts/' . $fontfilename;
    
            // ファイルをストレージに保存
            Storage::disk('public')->put($fontfilenamePath, file_get_contents($fontdata->getRealPath()));
            $dataUrlFont = Storage::url($fontfilenamePath);
        } else {
            $dataUrlFont = null;
        }
    
        $profile = new Font();
        $profile->create([
            'artist_id' => $request->artist_id,
            'font_name' => $request->font_name,
            'font_eng_name' => $request->font_eng_name,
            'creater_name' => $request->creater_name,
            'font_count' => $request->font_count,
            'sample_text' =>  $request->sample_text,
            'creater_name' =>  $request->creater_name,
            'fontdata'=> $dataUrlFont,
        ]);
    
        return redirect()->route('edit-index');
    }



}
