<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Menu::create([
            'nama' => 'Kopi Keadilan',
            'gambar' => 'gambar.jpg',
            'harga' => 10000
        ]);

        Menu::create([
            'nama' => 'Kopi ABC',
            'gambar' => 'gambar.jpg',
            'harga' => 5000
        ]);

        Menu::create([
            'nama' => 'Kopi Arabican',
            'gambar' => 'gambar.jpg',
            'harga' => 5000
        ]);

        Menu::create([
            'nama' => 'Kopi Kapal Api',
            'gambar' => 'gambar.jpg',
            'harga' => 5000
        ]);

        Menu::create([
            'nama' => 'Kopi Mocahino',
            'gambar' => 'gambar.jpg',
            'harga' => 5000
        ]);
    }
}
