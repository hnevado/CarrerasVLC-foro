<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Comment;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hector Nevado',
            'email' => 'hector@hnevado.es',
        ]);

        $categories = Category::factory(10)->create();

        $questions = Question::factory(30)->create([
            'user_id' => fn() => User::inRandomOrder()->first()->id,
            'category_id' => fn() => $categories->random()->id,
        ]);

        $answer = Answer::factory(50)->create([
            'user_id' => fn() => User::inRandomOrder()->first()->id,
            'question_id' => fn() => $questions->random()->id,
        ]);

        Comment::factory(100)->create([
            'user_id' => fn() => User::inRandomOrder()->first()->id,
            'commentable_id' => fn() => $answer->random()->id,
            'commentable_type' => Answer::class,
        ]);

        Comment::factory(100)->create([
            'user_id' => fn() => User::inRandomOrder()->first()->id,
            'commentable_id' => fn() => $answer->random()->id,
            'commentable_type' => Question::class,
        ]);

        Post::factory(50)->create([
            'user_id' => fn() => User::inRandomOrder()->first()->id,
            'category_id' => fn() => $categories->random()->id,
        ]);
        
    }
}
