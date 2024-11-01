<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Author::factory()->create([
            'name' => 'Alaa Hamdy',
            'yob' => '2024',
            'data' => '',
        ]);

        Author::factory()->create([
            'name' => 'Amr Mohmed',
            'yob' => '2022',
            'data' => '',
        ]);

        Author::factory()->create([
            'name' => 'Salma Yasser ',
            'yob' => '2020',
            'data' => '',
        ]);

        Author::factory()->create([
            'name' => 'Abdelrhman youssef',
            'yob' => '2018',
            'data' => '',
        ]);

        Author::factory()->create([
            'name' => 'Sara Ahmed',
            'yob' => '2022',
            'data' => '',
        ]);
    }
}
