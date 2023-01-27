<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\jabatan;

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

        jabatan::create([
            'name' => 'Ketua'
        ]);

        jabatan::create([
            'name' => 'Sekretaris'
        ]);

        jabatan::create([
            'name' => 'Bendahara'
        ]);

        jabatan::create([
            'name' => 'Seksi Pembibitan'
        ]);

        jabatan::create([
            'name' => 'Seksi Pemasaran'
        ]);

        jabatan::create([
            'name' => 'Seksi Pengelolaan'
        ]);

        jabatan::create([
            'name' => 'Anggota'
        ]);
    }
}
