<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key'       => 'app_name',
            'value'     => 'Ticket Reservation',
            'name'      => 'Application Short Name',
            'type'      => 'text',
            'category'  => 'information'
        ]);
        Setting::create([
            'key'       => 'app_short_name',
            'value'     => 'Laravel',
            'name'      => 'Application Name',
            'type'      => 'text',
            'category'  => 'information'
        ]);
        Setting::create([
            'key'       => 'app_logo',
            'value'     => 'storage/logo.png',
            'name'      => 'Application Logo',
            'type'      => 'file',
            'ext'       => 'png',
            'category'  => 'information'
        ]);
        Setting::create([
            'key'       => 'app_favicon',
            'value'     => 'storage/favicon.png',
            'name'      => 'Application Favicon',
            'type'      => 'file',
            'ext'       => 'png'
        ]);
        Setting::create([
            'key'       => 'app_loading_gif',
            'value'     => 'storage/loading.gif',
            'name'      => 'Application Loading Image',
            'type'      => 'file',
            'ext'       => 'gif',
            'category'  => 'information'
        ]);
        Setting::create([
            'key'       => 'app_map_loaction',
            'value'     => '-',
            'name'      => 'Application Map Location',
            'type'      => 'textarea',
            'category'  => 'contact'
        ]);
    }
}
