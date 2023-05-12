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
            'date'    => '2023-10-11',
            'maximux_site'    => 100,
            'venue' => 'Bandung',
        ]);
    }
}
