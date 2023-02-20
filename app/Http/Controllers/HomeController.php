<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $posts = posts::where('status', 'approved')->paginate(3);
        $latest = posts::where('status', 'approved')->latest()->orderBy('created_at', 'desc')->first();
        $side = posts::where('status', 'approved')->orderBy("id", "asc")->take(2)->get();
        $node = posts::where('tag', 'LIKE','%'.'node'.'%')->latest()->orderBy('created_at', 'desc')->first();
        $ai = posts::where('tag', 'LIKE','%'."AI".'%')->latest()->orderBy('created_at', 'desc')->first();
        $react = posts::where('tag', 'LIKE','%'.'react'.'%')->latest()->orderBy('created_at', 'desc')->first();
        return view('welcome', compact('posts', 'latest', 'side', 'node', 'ai', 'react'));
    }
}
