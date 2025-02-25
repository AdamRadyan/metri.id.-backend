<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetriLandingPage extends Controller
{
    public function index()
    {
        // Fetch data dari model MetriLandingPage
        $posts = MetriLandingPage::latest()->get(); 

        // Ubah link menjadi format embed untuk YouTube
        foreach ($posts as $post) {
            if (!empty($post->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $post->link, $matches)) {
                $post->embed_link = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

        // Mengembalikan view dengan data posts
        return view('index', compact('posts'));
    }
}
