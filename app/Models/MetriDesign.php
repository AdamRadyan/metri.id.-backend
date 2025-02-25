<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetriDesign extends Model
{
    use HasFactory;

    protected $fillable = [
        'youtube_link',
        'video',
        'photo_1',
        'photo_2',
        'photo_3',
        'photo_4',
    ];
}
