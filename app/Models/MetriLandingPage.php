<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetriLandingPage extends Model
{
    use HasFactory;

    protected $table = 'metri_landing_pages'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'angka_1',
        'angka_2',
        'angka_3',
        'angka_4',
        'youtube_link',
        'image',
        'video',
    ];
}
