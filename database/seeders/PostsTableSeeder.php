<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use \App\Models\User;

class PostsTableSeeder extends Seeder
{

    //private User $user;

    public function __construct(){
        $this->user = User::find(1);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(50)->create([
            'user_id' => $this->user->id,
        ]);
    }
}
