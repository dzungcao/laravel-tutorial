<?php namespace App\Http\Controllers;

use App\Repository\IPostRepository;

class HomeController extends Controller {

	protected $postRepo;

	public function __construct(IPostRepository $postRepo){
		$this->postRepo = $postRepo;
	}
	
	public function index()
	{
		$posts = $this->postRepo->all();	
		return \View::make('home',compact('posts'));
	}

	public function view($id)
	{
		$post = $this->postRepo->findById($id);
		return \View::make('view',compact('post'));
	}
}
