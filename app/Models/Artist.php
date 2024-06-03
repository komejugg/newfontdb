<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  // この行を追加
        'kana',
        'birth',
        'agency',
        'genre',
        'sex',
        'profile',
        'hobby',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
        'hp',
        'profile_image',
        'font_image',
        'handwritten_image',

    ];

}
