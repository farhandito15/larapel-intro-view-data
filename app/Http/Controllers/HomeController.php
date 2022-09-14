<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $posts = Post::when(request('kategori_id'), function ($query) {
            $query->where('kategori_id', request('kategori_id'));
        })
            ->latest()
            ->get();

        return view(
            'index',
            compact('kategori', 'posts')
        );
    }
}
