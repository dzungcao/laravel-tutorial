<?php namespace App\Repository;
use App\Models\Post;
class PostRepository implements IPostRepository{
	public function add($post){

	}
	public function addFromInputs($inputs){

	}
	public function update($post){

	}
	public function updateFromInputs($inputs){

	}
	public function all(){
		return Post::all();
	}
	public function delete($id){

	}
	public function findById($id){

	}
}