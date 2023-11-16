<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'username' => 'mattot',
            'name' => 'mattot the builder',
            'email' => 'mattot@test.com',
        ]);

        \App\Models\User::factory(10)->create();

        foreach (\App\Models\User::all() as $user) {
            Post::factory()->create([
                'user_id' => $user->id,
            ]);
        }

    }
}
