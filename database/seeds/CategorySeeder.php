<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'type' => 'Politica'
            ],
            [
                'type' => 'Attualità'
            ],
            [
                'type' => 'Sport'
            ],
            [
                'type' => 'Informatica'
            ],
            [
                'type' => 'Cronaca'
            ],
            [
                'type' => 'Gossip'
            ],
            [
                'type' => 'Economia'
            ],
        ];

        foreach ($categories as $category ) {
            Category::create($category);
        }
    }
}
