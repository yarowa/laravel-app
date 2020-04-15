<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(\App\Category::class, 5)->create();
        factory(\App\User::class, 3)->create()->each(function ($a) {
            $a->posts()
                ->saveMany(
                    factory(\App\Post::class, rand(5, 10))->make()
                );
        });

    }
}
