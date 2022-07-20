<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\CategoryFactory;
use Database\Factories\CommentFactory;
use Database\Factories\PostFactory;
use Database\Factories\UserFactory;
use Hamcrest\Thingy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);


        $this->call([
            UserSeeder::class,
           CategorySeeder::class,
           PostSeeder::class,
           CommentSeeder::class
        ]);
    }
}
