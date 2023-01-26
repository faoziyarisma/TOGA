<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(1)->create();

        User::factory()->create([
            'name' => 'Risma',
            'email' => 'risfa667@gmail.com',
            'password' => bcrypt('july28R)')
        ]);

        User::factory()->create([
            'name' => 'Abil',
            'email' => 'paquita@gmail.com',
            'password' => bcrypt('abil_123')
        ]);
    }
}
