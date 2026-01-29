<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tenant::create([
            'name' => 'Greetings from Germany',
            'domain' => 'kartoffel.test',
            'bg_color' => 'bg-yellow-400 text-black',
        ]);

        Tenant::create([
            'name' => 'Tunesia to the Win',
            'domain' => 'batata.test',
            'bg_color' => 'bg-red-600 text-white',
        ]);

        Article::factory(40)->create();


        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
