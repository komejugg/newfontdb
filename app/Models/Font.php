<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',  // この行を追加
        'font_name',
        'font_eng_name',
        'font_count',
        'sample_text',
        'creater_name',
        'fontdata',
        'bicreater_namerth',
        'fontdata',
    ];


}
