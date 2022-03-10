<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $admin = array(
            array(
                'id'            => 1,
                'first_name'    => 'Super',
                'last_name'     => 'Administrator',
                'email'         => 'super.admin@admin.com',
                'password'      => Hash::make('super@admin123'),
                'isAdmin'       => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ),
        );
        DB::table('users')->insert($admin);
    }
}
