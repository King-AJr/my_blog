<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function become_author()
    {
        return view('become_author');
    }

    public function submit_author(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'about' => 'required',
            'sample_1' => 'required',
            'sample_2' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        //dd($request->all());


        $application = ModelsRequest::create([
            'about' => $request->about,
            'sample_1' => $request->sample_1,
            'sample_2' => $request->sample_2,
            'image' => $request->image,
            'user_id' => Auth::user()->id
        ]);

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $application->image = $filename;
        $application->save();

        return back()->with(['status' => 'application Submitted']);
    }

    public function view_request()
    {
        $requests = ModelsRequest::all();
        //dd($requests);
        return view('admin.author_requests', compact('requests'));
    }

    public function single_request($id)
    {
        $request = ModelsRequest::find($id);
        return view('admin.single_request', compact('request'));
    }

    public function pending_articles()
    {
        $articles = posts::where('status', 'pending')->get();
        //dd($articles);
        return view('admin.pending_articles', compact('articles'));
    }

    public function approve(Request $request, User $user_id)
    {

        $request->validate([ 'role' => 'required']);

        $user_id->role = $request->role;
        $user_id->save();


        return back()->with(['status' => 'author approved']);
    }

}
