<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TeamSeeder::class,
            UserSeeder::class,
            ToernooiSeeder::class,
        ]);
    }
}
