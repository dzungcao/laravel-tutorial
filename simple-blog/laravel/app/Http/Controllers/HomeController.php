<?php namespace App\Http\Controllers;
use App\Post;

class HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return view('home',['posts'=>$posts]);
	}

	public function view($id)
	{
		$post = Post::find($id);
		return view('view',['post'=>$post]);
	}
}
