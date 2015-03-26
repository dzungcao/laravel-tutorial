<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(['password'=> bcrypt('123456'),'name'=>'Admin','email'=>'admin@example.com']);
    }
}
class PostTableSeeder extends Seeder {

    public function run()
    {
        Post::create(['title'=> 'Hello World 1','content'=>'This is my first post on Laravel Web Blog']);
        Post::create(['title'=> 'Hello World 2','content'=>'This is my first post on Laravel Web Blog']);
        Post::create(['title'=> 'Hello World 3','content'=>'This is my first post on Laravel Web Blog']);
    }
}