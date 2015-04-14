<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
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
    	 DB::table('post')->delete();
    	for ($i=0; $i < 100; $i++) { 
    		# code...
    		Post::create(['title'=> 'Hello World ' . $i,'content'=>$i.' - This is my first post on Laravel Web Blog']);
    	}
    }
}