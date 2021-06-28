<?php

namespace Database\Seeders;

use App\Domain\Cms\Models\Users;
use Illuminate\Database\Seeder;
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
        Users::create([
            'name' => 'Super Admin',
            'role_id' => '1',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        Users::create([
            'name' => 'Admin',
            'role_id' => '2',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
