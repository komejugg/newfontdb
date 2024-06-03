<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

//BREEZEが使えるように。
use Illuminate\Support\Facades\Auth;

//ストレージライブラリ。
use Illuminate\Support\Facades\Storage;
//画像ライブラリ。
use Intervention\Image\Facades\Image;

class ArtistsController extends Controller
{
    //


    //閲覧用ページ系//
    //TOPページ表示用
	public function index(){
		$artists = artist::paginate(40); //←トップページのページネーション機能。数字変更で変わる。
		return view ('index',['artists'=>$artists]);

    }

    //Detailページ表示用
    public function show($profile_id){
        $profile_data = Artist::where('id',$profile_id)->first();
		return view ('detail',['profiles'=>$profile_data]);
    }




    //////編集ページ系//////

    //管理画面トップページ表示用
	public function editindex(){
        $artists = Artist::paginate(99999); ; //←トップページのページネーション機能。数字変更で変わる。
        return view ('edit.editindex',['artists'=>$artists]);
        }

    //新規ページ表示用
    public function addpage(){
            return view ('edit.add');
        }

    //個別編集ページ表示用
    public function detailedit($profile_id){
        $profile_data = Artist::where('id',$profile_id)->first();
		return view ('edit.editdetail',['profiles'=>$profile_data]);
    }







    //Formからデータをサーバへアップロードする系
    public function artist_add(Request $request){
        // profile_image の処理
        if ($request->hasFile('profile_image')) {
            $profileImage = $request->file('profile_image');
            $profileImageName = time() . '_profile.' . $profileImage->getClientOriginalExtension();
            
            // サーバ時の処理
            $profileImagePath = 'app/public/images/profiles/' . $profileImageName;
    
            // 画像をストレージに保存
            Storage::disk('public')->put($profileImagePath, file_get_contents($profileImage));
            $dataUrlProfile = Storage::url($profileImagePath);
        } else {
            $dataUrlProfile = null;
        }
    
        // font_image の処理
        if ($request->hasFile('font_image')) {
            $fontImage = $request->file('font_image');
            $fontImageName = time() . '_font.' . $fontImage->getClientOriginalExtension();
            
            // サーバ時の処理
            $fontImagePath = 'app/public/images/profiles/' . $fontImageName;
    
            // 画像をストレージに保存
            Storage::disk('public')->put($fontImagePath, file_get_contents($fontImage));
            $dataUrlFont = Storage::url($fontImagePath);
        } else {
            $dataUrlFont = null;
        }
    
        // handwritten_image の処理
        if ($request->hasFile('handwritten_image')) {
            $handwrittenImage = $request->file('handwritten_image');
            $handwrittenImageName = time() . '_handwritten.' . $handwrittenImage->getClientOriginalExtension();
            
            // サーバ時の処理
            $handwrittenImagePath = 'app/public/images/profiles/' . $handwrittenImageName;
    
            // 画像をストレージに保存
            Storage::disk('public')->put($handwrittenImagePath, file_get_contents($handwrittenImage));
            $dataUrlHandwritten = Storage::url($handwrittenImagePath);
        } else {
            $dataUrlHandwritten = null;
        }
    
        $profile = new Artist();
        $profile->create([
            'name' => $request->name,
            'kana' => $request->kana,
            'genre' => $request->genre,
            'sex' =>  $request->sex,
            'birth' =>  $request->birth,
            'agency' =>  $request->agency,
            'hobby' =>  $request->hobby,
            'instagram' =>  $request->instagram,
            'twitter' =>  $request->twitter,
            'youtube' =>  $request->youtube,
            'profile'=>  $request->profile,
            'profile_image'=> $dataUrlProfile,
            'font_image'=> $dataUrlFont,
            'handwritten_image'=> $dataUrlHandwritten,
        ]);
    
        return redirect()->route('edit-index');
    }


    //更新
    public function update(Request $request)  
{  
    $user = Artist::find($request->userId);  
    $user->update([  
        'name' => $request->name,
        'kana' => $request->kana,
        'genre' => $request->genre,
        'sex' =>  $request->sex,
        'birth' =>  $request->birth,
        'agency' =>  $request->agency,
        'hobby' =>  $request->hobby,
        'instagram' =>  $request->instagram,
        'twitter' =>  $request->twitter,
        'youtube' =>  $request->youtube,
        'profile'=>  $request->profile,
        // 'profile_image'=> $dataUrlProfile,
        // 'font_image'=> $dataUrlFont,
        // 'handwritten_image'=> $dataUrlHandwritten,
    ]);  

    return redirect("/edit-index");  
}



    //削除
    public function delete(Request $request) 
    {
        $user = Artist::find($request->userId);  
        $user->delete();  
    
        return redirect("/edit-index");  
    }





}
