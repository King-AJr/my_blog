<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function post_article(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'status' => 'required',
        ]);

        // dd($request->all());


        $post = posts::create([
            'title' => $request->title,
            'body' => $request->body,
            'description' => $request->description,
            'tag' => $request->tag,
            'image' => $request->image,
            'status' => $request->status,
            'author_id' => Auth::user()->id
        ]);

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $post->image = $filename;
        $post->save();

        return back()->with(['status' => 'post added']);
    }

    public function view_add()
    {
        return view('add_article');
    }

    public function view_post($id)
    {
        $node = posts::where('tag', 'LIKE','%'.'node'.'%')->latest()->orderBy('created_at', 'desc')->first();
        $ai = posts::where('tag', 'LIKE','%'."AI".'%')->latest()->orderBy('created_at', 'desc')->first();
        $react = posts::where('tag', 'LIKE','%'.'react'.'%')->latest()->orderBy('created_at', 'desc')->first();
        $post = posts::find($id);
        $posts = posts::where('status', 'approved')->take(5)->get();
        return view('view_article', compact('post', 'node', 'ai','react', 'posts'));
    }
    public function update_article_view($id)
    {
        $post = posts::find($id);
        return view('update_article', compact('post'));
    }

    public function update_article(Request $request, posts $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        // dd($request->all());

            $post->title = $request->title;
            $post->body = $request->body;
            $post->description = $request->description;
            $post->tag = $request->tag;
            $post->image = $request->image;
            $post->author_id = Auth::user()->id;

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $post->image = $filename;
        $post->save();

        return back()->with(['status' => 'post added']);
    }

    public function delete_article(posts $post)
    {
        $post->delete();
        return redirect('')->with(['status' => 'post deleted']);
    }

    public function draft()
    {
        $articles = posts::where('status', 'draft')->where('author_id', Auth::user()->id)->get();
        return view('drafts', compact('articles'));
    }

    public function approve(Request $request, posts $post)
    {
        $request->validate([ 'status' => 'required']);

        $post->status = $request->status;

        $post->save();
        return back()->with(['status' => 'post approved']);
    }

    public function tags($tag)
    {
        $articles = posts::where('tag', 'LIKE','%'.$tag.'%')->get();
       // dd($articles);
       return view('tag', compact('articles', 'tag'));
    }

}
