<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $title = $faker->words(rand(2, 10), true);
            Post::create([
                'user_id'       => User::inRandomOrder()->first()->id,
                'title'         => $title,
                'description'   => $faker->text(rand(50, 300)),
                'slug'          => Post::generateSlug($title)
            ]);
        }
    }
}
