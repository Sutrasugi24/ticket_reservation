<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name'      => 'Superadmin',
            'address'   => '-',
            'birth' => '1996-01-22',
            'phone'   => '089656771929',
            'email'     => 'superadmin@superadmin.com',
            'password'  => bcrypt('superadmin')
        ]);
        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'name'      => 'Admin',
            'address'   => '-',
            'birth' => '1996-02-21',
            'phone'   => '089677771111',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $operator = User::create([
            'name'      => 'Operator',
            'address'   => '-',
            'birth' => '1996-02-21',
            'phone'   => '082165676576',
            'email'     => 'operator@operator.com',
            'password'  => bcrypt('operator')
        ]);
        $operator->assignRole('operator');
    }
}
