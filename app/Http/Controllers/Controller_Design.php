<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetriDesignPost;

class Controller_Design extends Controller
{
    public function index()
    {
        $posts = MetriDesignPost::latest()->get(); // Fetch data dari Filament Model

        // Ubah link menjadi format embed untuk YouTube
        foreach ($posts as $post) {
            if (!empty($post->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $post->link, $matches)) {
                $post->embed_link = 'https://www.youtube.com/embed/' . $matches[1];
            } else {
                $post->embed_link = null; // Jika bukan YouTube, kosongkan
            }
        }

        return view('index', compact('posts'));
    }
}
