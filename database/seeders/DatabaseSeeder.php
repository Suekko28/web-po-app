<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'PT. Mustika Arga Kencana',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
            'address' => 'Puri nirwana 2 blok A no 16, Harapan
                            Jaya, Kec. Cibinong, Kabupaten Bogor,
                            Jawa Barat 16914',
            'role' => 1,
        ]);
    }
}
