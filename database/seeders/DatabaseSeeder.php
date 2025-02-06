<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        //recycle viene a ser un excelente metodo para no volver a crear users ni posts a la hora de reasignar los seeders creados tanto con post y comments

        $posts = Post::factory(200)->recycle($users)->create();
        $comments = Comment::factory(100)->recycle($users)->recycle($posts)->create();

        $jose = User::factory()->has(Post::factory(45))->has(Comment::factory(120)->recycle($posts))->create([
            'name' => 'José Enrique',
            'email' => 'jose@gmail.com',
        ]);
    }
}
