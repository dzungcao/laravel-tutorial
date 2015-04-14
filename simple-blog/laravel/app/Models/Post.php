<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
	protected $table = 'post';

	public function prettyTitle(){
		return preg_replace("/[[:blank:]]+/","-",$this->title);
	}
}
