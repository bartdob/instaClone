<?php

namespace App\Http\Controllers;

use App\Post;

use App\User;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $user = auth()->user();
        //$user_id = App\User::id();

        $users = auth()->user()->following()->pluck('profiles.user_id');
        // $posts= Post::whereIn('user_id', $users)->latest()->get();
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        return view('posts.index', compact('posts', 'user'));
    }   

    public function create()
    {
    	return view('posts.create');
    }

        public function store()
    {
    	$data = request()->validate([
    	'caption' => 'required',
    	'image' => 'required|image',
    ]);

    	$imagePath=(request('image')->store('uploads', 'public'));

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(1200);

    	$image->save();

    	auth()->user()->posts()->create([
    		'caption' => $data['caption'],
    		'image' => $imagePath,

    	]);

    	return redirect ('/profile/'.auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post')); // funcka przekazująca wartości compact
    }

    public function search (Request $request, \App\Post $post)
    {
        $query = $request->input('query');
        $users = \App\User::where('username', 'like', '%'.$query.'%%')->get();
        $id = \App\User::select('id')->where('username', $query)->get(); // not used for 
        return view('posts.search-results', compact('users', 'id', 'post'));
    }
}



