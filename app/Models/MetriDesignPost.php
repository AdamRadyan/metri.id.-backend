<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MetriDesignPost extends Model
{
    use HasFactory;

    protected $table = 'metri_design_posts';

    protected $fillable = [
        'title', 'slug', 'content', 'client_name', 'year',
        'category', 'industry', 'concept', 'objective',
        'challenge', 'results', 'gambar_1', 'gambar_2',
        'gambar_3', 'gambar_4', 'link'
    ];
    

    // Mutator untuk membuat slug otomatis dari title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
