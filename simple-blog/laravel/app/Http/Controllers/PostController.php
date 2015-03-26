<?php namespace App\Http\Controllers;
use App\Post;

class PostController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$posts = Post::orderBy('created_at','desc')->get();
		return view('post/index',['posts'=>$posts]);
	}

	public function create()
	{
		if(\Request::isMethod('post')){
			$post = new Post();
			$post->title = \Input::get('title');
			$post->content = \Input::get('content');
			$post->save();
			return redirect('post');
		}
		return view('post/create');
	}
	public function edit($id)
	{
		$post = Post::find($id);
		if(\Request::isMethod('post') && $post){
			$post->title = \Input::get('title');
			$post->content = \Input::get('content');
			$post->save();
			return redirect('post');
		}
		return view('post/edit',['post'=>$post]);
	}
	public function delete($id)
	{
		$post = Post::find($id);
		if(\Request::isMethod('post')){
			if($post)
				$post->delete();
			return redirect('post');
		}
		return view('post/delete',['post'=>$post]);
	}
}
