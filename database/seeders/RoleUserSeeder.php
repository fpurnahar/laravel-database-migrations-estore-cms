<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Domain\Cms\Models\RoleUsers;


class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUsers::create(
            ['name' => 'super_admin']
        );
        RoleUsers::create(
            ['name' => 'admin']
        );
    }
}
