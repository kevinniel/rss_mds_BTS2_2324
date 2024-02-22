<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(5000)->create();
        for($i = 0; $i < 2000; $i++){
            Category::factory(1)->create([
                'parent_id' => random_int(1, 5000),
            ]);
        }

        User::factory()->create([
            'name' => 'Toto tata',
            'email' => 'toto@toto.fr',
        ]);
    }
}
