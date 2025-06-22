<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::insert([
            [
                'name' => 'Beras',
                'quantity' => 5,
                'notes' => 'Beras premium',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minyak Goreng',
                'quantity' => 2,
                'notes' => 'Ukuran 2 liter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gula Pasir',
                'quantity' => 3,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Telur Ayam',
                'quantity' => 1,
                'notes' => '1 kg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Susu UHT',
                'quantity' => 4,
                'notes' => 'Rasa coklat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mie Instan',
                'quantity' => 10,
                'notes' => 'Rasa ayam bawang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sabun Mandi',
                'quantity' => 2,
                'notes' => 'Sabun cair',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasta Gigi',
                'quantity' => 1,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teh Celup',
                'quantity' => 2,
                'notes' => 'Isi 25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kopi Bubuk',
                'quantity' => 1,
                'notes' => 'Kopi hitam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
