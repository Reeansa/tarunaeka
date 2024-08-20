<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'client_type_id' => 1,
                'name' => 'PT Patra Badak Arun Solusi',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 1,
                'name' => 'PT Odira Energy Karang Agung',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 1,
                'name' => 'PT Wastec',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 1,
                'name' => 'PT Tracon Industry',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 1,
                'name' => 'PT Elnusa Petrofin',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 1,
                'name' => 'PT Halliburton - Exxon Cepu Project',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 1,
                'name' => 'PT Prima Sentra Usaha',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Four points by Sheraton Hotel',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Rimba Papua Hotel',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'PT Berkah Rezeki Abadi',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Hotel Grand Cakra',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Hotel Jayakarta',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Shangrilla Hotel',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Hotel Intercontinental',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 2,
                'name' => 'Hotel Verwood',
                'description' => 'lorum ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Tirta Investama',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Mitra Tani Dua Tujuh',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Maxima Energi Indokemika',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Wonokoyo Jaya Corporindo',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Suprabakti Mandiri',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Cargill Indonesia',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Aliet Green',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Prasada Samya Mukti',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Ciomas Adisatwa',
                'description' => 'lorem ipsum',
            ],
            [
                'client_type_id' => 3,
                'name' => 'PT Balatif',
                'description' => 'lorem ipsum',
            ],
        ];

        foreach ($clients as $client) {
            \App\Models\Client::create($client);
        }
    }
}
