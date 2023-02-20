<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author($id)
    {
        $author = User::find($id);
        $articles = posts::where('author_id', $id)->get();
        return view('single_author', compact('author', 'articles'));
    }
}
