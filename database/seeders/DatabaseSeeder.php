<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => $faker->name,
             'email' => $faker->unique()->safeEmail,
             'password' => bcrypt('password'),
         ]);
    }
}
