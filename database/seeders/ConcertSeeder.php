<?php

namespace Database\Seeders;

use App\Models\Concert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Concert::create([
            'name'          => 'Coldplay',
            'concert_date'    => '2023-10-11',
            'maximum_site'    => 100,
            'venue' => 'Bandung',
        ]);
    }
}
