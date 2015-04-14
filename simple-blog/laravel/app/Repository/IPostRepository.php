<?php namespace App\Repository;

interface IPostRepository{
	public function add($post);
	public function addFromInputs($inputs);
	public function update($post);
	public function updateFromInputs($inputs);
	public function all();
	public function delete($id);
	public function findById($id);
}